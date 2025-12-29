@extends('layouts.app')

@section('content')
    <h3>{{ $title }} - Edit</h3>

    <form action="{{ route($resource . '.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')

        @foreach($fields as $field => $meta)
            @php $type = $meta['type'] ?? 'text'; @endphp

            <div style="margin-bottom: 10px;">
                <label>{{ $meta['label'] ?? $field }}:</label><br>

                @if($type === 'textarea')
                    <textarea name="{{ $field }}" rows="4" cols="50" required>{{ old($field, $item->$field) }}</textarea>
                @elseif($type === 'boolean')
                    <input type="checkbox" name="{{ $field }}" value="1" {{ old($field, $item->$field) ? 'checked' : '' }}>
                @else
                    <input type="{{ $type }}" name="{{ $field }}" value="{{ old($field, $item->$field) }}" required>
                @endif
            </div>
        @endforeach

        <button type="submit">Update</button>
        <a href="{{ route($resource . '.index') }}">Cancel</a>
    </form>
@endsection
