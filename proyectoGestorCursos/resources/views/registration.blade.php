<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6">
        <div class="bg-white shadow sm:rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4">Users to enroll</h1>
            <p class="mb-4">Enrolling students to course: {{ $course->title }}</p>
            <ul class="list-disc list-inside space-y-2">
                @foreach ($users as $user)
                    <li class="flex justify-between items-center">
                        <span class="text-gray-700">{{ $user->name }}</span>
                        <form method="post" action="{{ route('enroll', ['user' => $user->id, 'course' => $course->id]) }}">
                            @csrf
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Enroll</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Aquí podrías agregar algún contenido adicional -->
            <form action="{{ route('dashboard') }}" method="GET" class="mt-4">
                <button type="submit" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Go back</button>
            </form>
        </div>
    </div>
</x-app-layout>
