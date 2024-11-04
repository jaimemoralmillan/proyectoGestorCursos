<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Bienvenido al Gestor de Cursos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h2 class="text-2xl font-bold mb-4">Acceso de Alumnos</h2>
                <form method="get" action="{{ route('students') }}">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Acceder</button>
                </form>
                <h2 class="text-2xl font-bold mt-6 mb-4">Acceso de Profesores</h2>
                <form method="get" action="{{ route('teacherCourses') }}">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Acceder</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
