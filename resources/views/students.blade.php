<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student list</title>
</head>
<body>
    <h1>Name of Students:</h1>

    <ul>
        @foreach ($students as $student )
            <li>{{ $student->name }} - (Course: {{ $student->course }})</li>
        @endforeach
    </ul>
</body>
</html>