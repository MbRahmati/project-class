@extends('layouts.app')

@section('content')
    <h3>{{ $title }} - Create</h3>

    <form action="{{ route($resource . '.store') }}" method="POST">
        @csrf

        @foreach($fields as $field => $meta)
            @php $type = $meta['type'] ?? 'text'; @endphp

            <div style="margin-bottom: 10px;">
                <label>{{ $meta['label'] ?? $field }}:</label><br>

                @if($type === 'textarea')
                    <textarea name="{{ $field }}" rows="4" cols="50" required>{{ old($field) }}</textarea>
                @elseif($type === 'boolean')
                    {{-- کامنت فارسی: checkbox اگر تیک نخورد ارسال نمی‌شود --}}
                    <input type="checkbox" name="{{ $field }}" value="1" {{ old($field) ? 'checked' : '' }}>
                @else
                    <input type="{{ $type }}" name="{{ $field }}" value="{{ old($field) }}" required>
                @endif
            </div>
        @endforeach

        <button type="submit">Save</button>
        <a href="{{ route($resource . '.index') }}">Cancel</a>
    </form>
@endsection
