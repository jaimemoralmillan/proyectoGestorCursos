<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Matriculas
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1> Bienvenido al Registrador de Matriculas</h1>

                <form action="{{ route('enroll') }}" method="POST">
                    @csrf
                    <h2 class="text-lg font-semibold mb-4">Registra Estudiantes A Cursos</h2>
                    <div class="mb-4">
                        <label for="course" class="block text-sm font-medium text-gray-700">Selecciona Curso:</label>
                        <select name="course_id" id="course" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            @foreach(Auth::user()->course as $course)
                                <option value="{{ $course->id }}">{{ $course->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <h3 class="text-lg font-semibold mb-4">Seleccionar Estudiantes:</h3>
                    <ul class="mb-4">
                        @foreach($students as $student)
                            <li class="flex items-center mb-2">
                                <input type="checkbox" name="student_ids[]" value="{{ $student->id }}" class="mr-2">
                                <label>{{ $student->name }}</label>
                            </li>
                        @endforeach
                    </ul>
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 disabled:opacity-25 transition">Registrar</button>
                </form>

                <h3 class="text-lg font-semibold mt-6">Estudiantes Registrados</h3>
                <ul>
                    @foreach(Auth::user()->course as $course)
                        <li class="mt-4">
                            <strong>{{ $course->title }}</strong>
                            <ul class="ml-4">
                                @foreach($course->users as $student)
                                    <li class="flex items-center justify-between">
                                        {{ $student->name }}
                                        <form action="{{ route('enroll.destroyStudent', ['course' => $course->id, 'student' => $student->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to remove this student?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ml-4 inline-flex items-center px-2 py-1 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">Remove</button>
                                        </form>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>