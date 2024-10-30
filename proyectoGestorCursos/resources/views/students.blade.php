<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Mis cursos:</h1>

    {{-- 
    
    --TODO : creo que la funcion esta bien 
    pero Auth::user()->$courses devuelve un nulo 
    porque no hay cursos
    TODOEND--
    
    <form>
       
        @csrf
        @foreach (Auth::user()->$courses as $course)
            <li> {{ $course->title }}</li>
    

         @endforeach


    </ul>


</form> --}}
        

    <h1>Cursos Disponibles: </h1>
    <ul>
        <form>
        @csrf
        @foreach ($courses as $course)
            <li> {{ $course->title }}</li>
    

         @endforeach


    </ul>


</form>

</body>
</html>