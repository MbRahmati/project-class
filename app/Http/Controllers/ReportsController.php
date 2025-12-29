<?php

namespace App\Http\Controllers;

use App\Models\Student;

class ReportsController extends Controller
{

    public function topStudents()
    {
        $students = Student::query()
            ->join('results', 'results.student_id', '=', 'students.id')
            ->groupBy('students.id', 'students.name', 'students.email')
            ->select('students.id', 'students.name', 'students.email')
            ->selectRaw('COUNT(results.id) as results_count')
            ->selectRaw('AVG(results.score) as avg_score')
            ->having('results_count', '>=', 2)
            ->having('avg_score', '>=', 80)
            ->orderByDesc('avg_score')
            ->get();

        return view('reports.top-students', [
            'students' => $students,
        ]);
    }
}
