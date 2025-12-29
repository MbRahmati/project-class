@extends('layouts.app')

@section('content')
    <h3>Dashboard</h3>
    <p>Pick a resource:</p>

    <ul>
        <li><a href="{{ route('students.index') }}">Students</a></li>
        <li><a href="{{ route('teachers.index') }}">Teachers</a></li>
        <li><a href="{{ route('classes.index') }}">Classes</a></li>
        <li><a href="{{ route('subjects.index') }}">Subjects</a></li>
        <li><a href="{{ route('student-subject.index') }}">Student-Subject (Pivot)</a></li>
        <li><a href="{{ route('assignments.index') }}">Assignments</a></li>
        <li><a href="{{ route('results.index') }}">Results</a></li>
        <li><a href="{{ route('attendance.index') }}">Attendance</a></li>
        <li><a href="{{ route('exams.index') }}">Exams</a></li>
        <li><a href="{{ route('class-teacher.index') }}">Class-Teacher (Pivot)</a></li>
        <li><a href="{{ route('class-student.index') }}">Class-Student (Pivot)</a></li>
        <li><a href="{{ route('feedback.index') }}">Feedback</a></li>
    </ul>
@endsection
