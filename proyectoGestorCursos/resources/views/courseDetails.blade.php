<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Course Details
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 mt-12">
        <div class="bg-white shadow sm:rounded-lg p-6">
            <h1 class="text-3xl font-bold mb-4">{{$course->title}}</h1>
            <h2 class="text-2xl font-semibold mb-2">Description:</h2>
            <p class="text-gray-700 mb-4">{{$course->description}}</p>
            <h2 class="text-2xl font-semibold mb-2">Curriculum:</h2>
            <p class="text-gray-700">{{$course->curriculum}}</p>
        </div>
    </div>

    <div class="py-5">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 mt-12">
                <!-- Aquí podrías agregar algún contenido adicional -->
                <form action="{{ route('students') }}" method="GET" class="mt-4">
                    <button type="submit" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Go back</button>
                </form>
        </div>
    </div>

</x-app-layout>
