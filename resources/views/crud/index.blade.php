@extends('layouts.app')

@section('content')
    <h3>{{ $title }} - List</h3>

    <p>
        <a href="{{ route($resource . '.create') }}">+ Create New</a>
        |
        <a href="{{ url('/') }}">Back to Dashboard</a>
    </p>

    @if ($items->count() === 0)
        <p>هیچ رکوردی وجود ندارد.</p>
    @else
        <table border="1" cellpadding="8" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>ID</th>
                @foreach($fields as $field => $meta)
                    <th>{{ $meta['label'] ?? $field }}</th>
                @endforeach
                <th>Actions</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>

                    @foreach($fields as $field => $meta)
                        <td>
                            @php $type = $meta['type'] ?? 'text'; @endphp

                            @if($type === 'boolean')
                                {{ $item->$field ? 'Yes' : 'No' }}
                            @else
                                {{ $item->$field }}
                            @endif
                        </td>
                    @endforeach

                    <td>
                        <a href="{{ route($resource . '.show', $item->id) }}">Show</a>
                        |
                        <a href="{{ route($resource . '.edit', $item->id) }}">Edit</a>
                        |
                        <form action="{{ route($resource . '.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Delete this item?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div style="margin-top: 10px;">
            @if (method_exists($items, 'links'))
                <div style="margin-top: 10px;">
                    {{ $items->links() }}
                </div>
            @endif
        </div>
    @endif
@endsection
