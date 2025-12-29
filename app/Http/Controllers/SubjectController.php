<?php

namespace App\Http\Controllers;

use App\Models\Subject;

class SubjectController extends CrudController
{
    protected string $modelClass = Subject::class;
    protected string $resource = 'subjects';
    protected string $title = 'Subjects';

    protected array $fields = [
        'subject_name' => ['type' => 'text', 'label' => 'Subject Name'],
    ];

    protected function rules(?int $id = null): array
    {
        return [
            'subject_name' => ['required', 'string', 'max:150'],
        ];
    }
}
