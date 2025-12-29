<?php

namespace App\Http\Controllers;

use App\Models\Assignment;

class AssignmentController extends CrudController
{
    protected string $modelClass = Assignment::class;
    protected string $resource = 'assignments';
    protected string $title = 'Assignments';

    protected array $fields = [
        'assignment_name' => ['type' => 'text', 'label' => 'Assignment Name'],
        'class_id' => ['type' => 'number', 'label' => 'Class ID'],
    ];

    protected function rules(?int $id = null): array
    {
        return [
            'assignment_name' => ['required', 'string', 'max:150'],
            'class_id' => ['required', 'integer', 'exists:classes,id'],
        ];
    }
}
