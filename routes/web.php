<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ReportsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\StudentSubjectController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ClassTeacherController;
use App\Http\Controllers\ClassStudentController;
use App\Http\Controllers\FeedbackController;

Route::get('/', function () {
    return view('home');
});

Route::resource('students', StudentController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('classes', ClassroomController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('student-subject', StudentSubjectController::class);
Route::resource('assignments', AssignmentController::class);
Route::resource('results', ResultController::class);
Route::resource('attendance', AttendanceController::class);
Route::resource('exams', ExamController::class);
Route::resource('class-teacher', ClassTeacherController::class);
Route::resource('class-student', ClassStudentController::class);
Route::resource('feedback', FeedbackController::class);
Route::get('/reports/top-students', [ReportsController::class, 'topStudents'])
    ->name('reports.top-students');
