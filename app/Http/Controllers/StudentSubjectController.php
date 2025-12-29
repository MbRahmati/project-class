<?php

namespace App\Http\Controllers;

use App\Models\StudentSubject;

class StudentSubjectController extends CrudController
{
    protected string $modelClass = StudentSubject::class;
    protected string $resource = 'student-subject';
    protected string $title = 'Student Subject (Pivot)';

    protected array $fields = [
        'student_id' => ['type' => 'number', 'label' => 'Student ID'],
        'subject_id' => ['type' => 'number', 'label' => 'Subject ID'],
    ];

    protected function rules(?int $id = null): array
    {
        return [
            'student_id' => ['required', 'integer', 'exists:students,id'],
            'subject_id' => ['required', 'integer', 'exists:subjects,id'],
        ];
    }
}
