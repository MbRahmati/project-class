<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class CrudController extends Controller
{

    protected string $modelClass; 
    protected string $resource;   
    protected string $title;      


    protected array $fields = [];


    abstract protected function rules(?int $id = null): array;

    public function index()
    {
        $items = ($this->modelClass)::orderByDesc('id')->paginate(10);

        return view('crud.index', [
            'items' => $items,
            'fields' => $this->fields,
            'title' => $this->title,
            'resource' => $this->resource,
        ]);
    }

    public function create()
    {
        return view('crud.create', [
            'fields' => $this->fields,
            'title' => $this->title,
            'resource' => $this->resource,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate($this->rules());

        $validated = $this->normalizeBooleans($validated);

        ($this->modelClass)::create($validated);

        return redirect()->route($this->resource . '.index');
    }

    public function show(int $id)
    {
        $item = ($this->modelClass)::findOrFail($id);

        return view('crud.show', [
            'item' => $item,
            'fields' => $this->fields,
            'title' => $this->title,
            'resource' => $this->resource,
        ]);
    }

    public function edit(int $id)
    {
        $item = ($this->modelClass)::findOrFail($id);

        return view('crud.edit', [
            'item' => $item,
            'fields' => $this->fields,
            'title' => $this->title,
            'resource' => $this->resource,
        ]);
    }

    public function update(Request $request, int $id)
    {
        $item = ($this->modelClass)::findOrFail($id);

        $validated = $request->validate($this->rules($id));
        $validated = $this->normalizeBooleans($validated);

        $item->update($validated);

        return redirect()->route($this->resource . '.index');
    }

    public function destroy(int $id)
    {
        $item = ($this->modelClass)::findOrFail($id);
        $item->delete();

        return redirect()->route($this->resource . '.index');
    }

    private function normalizeBooleans(array $validated): array
    {
        foreach ($this->fields as $field => $meta) {
            if (($meta['type'] ?? 'text') === 'boolean') {
                $validated[$field] = isset($validated[$field]) ? 1 : 0;
            }
        }

        return $validated;
    }
}
