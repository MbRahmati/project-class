<?php

namespace App\Http\Controllers;

use App\Models\Attendance;

class AttendanceController extends CrudController
{
    protected string $modelClass = Attendance::class;
    protected string $resource = 'attendance';
    protected string $title = 'Attendance';

    protected array $fields = [
        'student_id' => ['type' => 'number', 'label' => 'Student ID'],
        'class_id' => ['type' => 'number', 'label' => 'Class ID'],
        'is_present' => ['type' => 'boolean', 'label' => 'Is Present'],
    ];

    protected function rules(?int $id = null): array
    {
        return [
            'student_id' => ['required', 'integer', 'exists:students,id'],
            'class_id' => ['required', 'integer', 'exists:classes,id'],
            'is_present' => ['nullable'],
        ];
    }
}
