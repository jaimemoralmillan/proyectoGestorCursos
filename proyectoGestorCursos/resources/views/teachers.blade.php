<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Panel de control del profesor {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-3xl font-bold mb-4">Teachers</h1>
                <h2 class="text-2xl font-semibold mb-4"></h2>

                <form action="{{ route('create') }}" method="GET" class="mb-6">
                    @csrf
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add Course</button>
                </form>
                
                <h3 class="text-2xl font-semibold mb-4">Cursos que has creado:</h3>
                <ul class="list-disc list-inside space-y-2 mb-6">
                    @forelse(Auth::user()->course as $course) 
                        <li class="flex items-center gap-4">
                            <span class="text-gray-700">{{ $course->title }}</span>
                            <a href="{{ route('enroll', $course->id) }}" title="Matricular estudiante" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">👩🏻‍🎓</a>
                            <a href="{{ route('editCourses', $course->id) }}" title="Editar" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">✏️</a>
                            <form action="{{ route('destroyCourses', $course->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-blue-600">🗑️</button>
                            </form>
                        </li>
                    @empty
                        <li class="text-gray-500">No has creado ningún curso.</li>
                    @endforelse
                </ul>

                <h3 class="text-2xl font-semibold mb-4">Estudiantes que has matriculado:</h3>
                <ul class="list-disc list-inside space-y-2">
                    @forelse(Auth::user()->courses as $user)
                        <li class="text-gray-700">{{ $user->name }}</li>
                    @empty
                        <li class="text-gray-500">No has matriculado a ningún estudiante.</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>

    
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Aquí podrías agregar algún contenido adicional -->
                <form action="{{ route('dashboard') }}" method="GET" class="mt-4">
                    <button type="submit" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Go back</button>
                </form>
        </div>
   
</x-app-layout>
