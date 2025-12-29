<?php

namespace App\Http\Controllers;

use App\Models\Classroom;

class ClassroomController extends CrudController
{
    protected string $modelClass = Classroom::class;
    protected string $resource = 'classes';
    protected string $title = 'Classes';

    protected array $fields = [
        'class_name' => ['type' => 'text', 'label' => 'Class Name'],
    ];

    protected function rules(?int $id = null): array
    {
        return [
            'class_name' => ['required', 'string', 'max:150'],
        ];
    }
}
