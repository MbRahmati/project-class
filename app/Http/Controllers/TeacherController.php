<?php

namespace App\Http\Controllers;

use App\Models\Teacher;

class TeacherController extends CrudController
{
    protected string $modelClass = Teacher::class;
    protected string $resource = 'teachers';
    protected string $title = 'Teachers';

    protected array $fields = [
        'name' => ['type' => 'text', 'label' => 'Name'],
        'email' => ['type' => 'text', 'label' => 'Email'],
    ];

    protected function rules(?int $id = null): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150', 'unique:teachers,email' . ($id ? ',' . $id : '')],
        ];
    }
}
