<?php

namespace App\Http\Controllers;

use App\Models\ClassStudent;

class ClassStudentController extends CrudController
{
    protected string $modelClass = ClassStudent::class;
    protected string $resource = 'class-student';
    protected string $title = 'Class Student (Pivot)';

    protected array $fields = [
        'class_id' => ['type' => 'number', 'label' => 'Class ID'],
        'student_id' => ['type' => 'number', 'label' => 'Student ID'],
    ];

    protected function rules(?int $id = null): array
    {
        return [
            'class_id' => ['required', 'integer', 'exists:classes,id'],
            'student_id' => ['required', 'integer', 'exists:students,id'],
        ];
    }
}
