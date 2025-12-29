<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 5 Project</title>
</head>
<body>
<div style="max-width: 1000px; margin: 20px auto; font-family: Arial, sans-serif;">
    <h2>Exercise 5 | CRUD Project</h2>
    <hr>

    {{-- نمایش خطاهای validation --}}
    @if ($errors->any())
        <div style="background:#ffe5e5; padding:10px; margin:10px 0;">
            <strong>Validation Errors:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('content')
</div>
</body>
</html>
