<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController extends CrudController
{
    protected string $modelClass = Student::class;
    protected string $resource = 'students';
    protected string $title = 'Students';

    protected array $fields = [
        'name' => ['type' => 'text', 'label' => 'Name'],
        'age' => ['type' => 'number', 'label' => 'Age'],
        'email' => ['type' => 'text', 'label' => 'Email'],
    ];

    protected function rules(?int $id = null): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'age' => ['required', 'integer', 'min:1', 'max:120'],
            'email' => ['required', 'email', 'max:150', 'unique:students,email' . ($id ? ',' . $id : '')],
        ];
    }
}
