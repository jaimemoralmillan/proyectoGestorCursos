<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editando curso</h1>

    {{$course->title}}
<ul>
    @foreach ($users as $user)
        <li>
            {{$user->name}}
            <form method='post' action="{{ route('enroll', ['user' => $user->id, 'course' => $course->id]) }}">
                @csrf
             <button type="submit">Enroll</button>
        
            </form>
        </li>
    @endforeach
</ul>
</body>
</html>