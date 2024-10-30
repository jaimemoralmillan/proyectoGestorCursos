<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Probando
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <h1> Bienvenido al Gestor de cursos</h1>

                <h2> Acceso de Alumnos<h2> 
                    <form method="get" action="{{route('students')}}"> 
                    <input type="submit" value="Acceder">
                    </form>
                <h2>Acceso de Profesores<h2> 
                
                    <form method="get" action="{{route('teacherCourses')}}"> 
                        <input type="submit" value="Acceder">
                        </form>
                


                
            </div>
        </div>
    </div>
</x-app-layout>
