<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Teachers</h1>
    <h2>Hola, profe {{ $teacher->name }}  </h2>
    <h3>Estos son tus cursos:</h3>
    <ul>
        @foreach ($teacher->courses as $course)
            <li>{{ $course->name }}</li>
        @endforeach
    </ul>
    <h3>Estos son tus alumnos:</h3>
    <ul>
        @foreach ($teacher->students as $student)
            <li>{{ $student->name }}</li>
        @endforeach
    </ul>


    
                 <form action="{{ route('create') }}" method="POST">
                    
                    @csrf
                    <input type="submit" value="Add Course">
                </form>
</body>
</html>