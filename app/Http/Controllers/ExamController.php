<?php

namespace App\Http\Controllers;

use App\Models\Exam;

class ExamController extends CrudController
{
    protected string $modelClass = Exam::class;
    protected string $resource = 'exams';
    protected string $title = 'Exams';

    protected array $fields = [
        'exam_name' => ['type' => 'text', 'label' => 'Exam Name'],
    ];

    protected function rules(?int $id = null): array
    {
        return [
            'exam_name' => ['required', 'string', 'max:150'],
        ];
    }
}
