<?php

namespace App\Http\Controllers;

use App\Models\Result;

class ResultController extends CrudController
{
    protected string $modelClass = Result::class;
    protected string $resource = 'results';
    protected string $title = 'Results';

    protected array $fields = [
        'student_id' => ['type' => 'number', 'label' => 'Student ID'],
        'assignment_id' => ['type' => 'number', 'label' => 'Assignment ID'],
        'score' => ['type' => 'number', 'label' => 'Score'],
    ];

    protected function rules(?int $id = null): array
    {
        return [
            'student_id' => ['required', 'integer', 'exists:students,id'],
            'assignment_id' => ['required', 'integer', 'exists:assignments,id'],
            'score' => ['required', 'integer', 'min:0', 'max:100'],
        ];
    }
}
