<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Añadir Nuevo Curso
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-3xl font-bold mb-4">Add Course</h1>
                <form action="{{ route('store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <input type="text" name="title" id="title" placeholder="Title" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div>
                        <input type="text" name="description" id="description" placeholder="Description" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div>
                        <input type="text" name="curriculum" id="curriculum" placeholder="Curriculum" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div>
                        <input type="text" name="content" id="content" placeholder="Content" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add Course</button>
                    </div>
                </form>
                <form action="{{ route('teacherCourses') }}" method="GET" class="mt-4">
                    <button type="submit" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Go back</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
