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
    <h2>Hola, {{ Auth::user()->name }}</h2>
    <form action="{{ route('create') }}" method="POST">
        @csrf
        <input type="submit" value="Add Course">
    </form>
    <h3>Cursos que has creado:</h3>
    <ul>
        @forelse(Auth::user()->course as $course) 
            <li style="display: flex; align-items: center; gap: 20px;">
                {{ $course->title }}
                <a href="{{ route('enroll', $course->id) }}" title="Matricular estudiante">↗️</a>
                <a href="{{ route('editCourses', $course->id) }}" title="Editar">✏️</a>
                <form action="{{ route('destroyCourses', $course->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @empty
            <li>No has creado ningún curso.</li>
        @endforelse
    </ul>

    <h3>Estudiantes que has matriculado:</h3>
    <ul>
        @forelse(Auth::user()->courses as $user)
            <li>{{ $user->name }}</li>
        @empty
            <li>No has matriculado a ningún estudiante.</li>
        @endforelse

</body>
</html>