<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student list</title>
</head>

<body style="font-family: Arial, Helvetica, sans-serif; padding: 20px;">
    <h1>Name of Students:</h1>

    
    
    @foreach($students as $student)
    <li style="margin-bottom: 15px; font-size: 18px;">
        <strong>{{ $student->name }}</strong> (Course: {{ $student->course }})

        <form action="/students/{{ $student->id }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE') <button type="submit" style="padding: 5px 10px; background-color: red; color: white; border: none; cursor: pointer; margin-left: 10px;">
                Paih (Delete)
            </button>
        </form>

    </li>
    @endforeach
</body>

</html>