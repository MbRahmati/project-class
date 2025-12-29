<?php

namespace App\Http\Controllers;

use App\Models\ClassTeacher;

class ClassTeacherController extends CrudController
{
    protected string $modelClass = ClassTeacher::class;
    protected string $resource = 'class-teacher';
    protected string $title = 'Class Teacher (Pivot)';

    protected array $fields = [
        'teacher_id' => ['type' => 'number', 'label' => 'Teacher ID'],
        'class_id' => ['type' => 'number', 'label' => 'Class ID'],
    ];

    protected function rules(?int $id = null): array
    {
        return [
            'teacher_id' => ['required', 'integer', 'exists:teachers,id'],
            'class_id' => ['required', 'integer', 'exists:classes,id'],
        ];
    }
}
