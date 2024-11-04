<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Bienvenido {{Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

               
                

                
            </div>
        </div>
    </div>


    
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
            <li> {{ $course->title }} <a href="{{ route('courseDetails', $course->id) }}" title="details">Ver Detalles</a>
            </li>
    

         @endforeach


    </ul>


</form>
</x-app-layout>
