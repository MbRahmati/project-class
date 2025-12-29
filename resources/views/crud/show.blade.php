@extends('layouts.app')

@section('content')
    <h3>{{ $title }} - Details</h3>

    <p><strong>ID:</strong> {{ $item->id }}</p>

    @foreach($fields as $field => $meta)
        @php $type = $meta['type'] ?? 'text'; @endphp
        <p>
            <strong>{{ $meta['label'] ?? $field }}:</strong>
            @if($type === 'boolean')
                {{ $item->$field ? 'Yes' : 'No' }}
            @else
                {{ $item->$field }}
            @endif
        </p>
    @endforeach

    <p>
        <a href="{{ route($resource . '.edit', $item->id) }}">Edit</a>
        |
        <a href="{{ route($resource . '.index') }}">Back</a>
    </p>
@endsection
