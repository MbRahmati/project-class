<?php

namespace App\Http\Controllers;

use App\Models\Feedback;

class FeedbackController extends CrudController
{
    protected string $modelClass = Feedback::class;
    protected string $resource = 'feedback';
    protected string $title = 'Feedback';

    protected array $fields = [
        'student_id' => ['type' => 'number', 'label' => 'Student ID'],
        'teacher_id' => ['type' => 'number', 'label' => 'Teacher ID'],
        'feedback' => ['type' => 'textarea', 'label' => 'Feedback Text'],
    ];

    protected function rules(?int $id = null): array
    {
        return [
            'student_id' => ['required', 'integer', 'exists:students,id'],
            'teacher_id' => ['required', 'integer', 'exists:teachers,id'],
            'feedback' => ['required', 'string', 'min:3'],
        ];
    }
}
