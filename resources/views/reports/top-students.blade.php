@extends('layouts.app')

@section('content')
    <h3>Report: Top Students (HAVING + SEED)</h3>

    <p>
        شرط‌ها:
        <br>1) حداقل 2 نتیجه
        <br>2) میانگین نمره >= 80
    </p>

    <p>
        <a href="{{ url('/') }}">Back to Dashboard</a>
    </p>

    @if ($students->count() === 0)
        <p>هیچ دانش‌آموزی شرایط گزارش را ندارد.</p>
    @else
        <table border="1" cellpadding="8" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Results Count</th>
                <th>Average Score</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($students as $s)
                <tr>
                    <td>{{ $s->id }}</td>
                    <td>{{ $s->name }}</td>
                    <td>{{ $s->email }}</td>
                    <td>{{ $s->results_count }}</td>
                    <td>{{ number_format($s->avg_score, 2) }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection
