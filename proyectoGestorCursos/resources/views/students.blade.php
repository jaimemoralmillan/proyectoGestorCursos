<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome, {{ Auth::user()->name }}.
        </h2>
    </x-slot>

   

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6">
        <div class="bg-white shadow sm:rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4">Currently Enrolled in:</h1>
          <ul>
            @forelse ($userCourses as $course)
               <li> {{$course->title}}</li>
            
            @empty
                Currently not enrolled in any courses
            @endforelse
          </ul>
           
        </div>

        <div class="bg-white shadow sm:rounded-lg p-6 mt-6">
            <h1 class="text-2xl font-bold mb-4">Available Courses</h1>  
            <ul class="list-disc list-inside space-y-2">
                @foreach ($courses as $course)
                    <li class="flex justify-between items-center">
                        <span class="text-gray-700">{{ $course->title }}</span>
                        <form action="{{ route('courseDetails', $course->id) }}" method="GET" class="mt-4">
                            @csrf
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-gray-600">View Details</button>
                        </form>
                    </li>
                @endforeach
            </ul>
            

        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <form action="{{ route('dashboard') }}" method="GET" class="mt-4">
                    <button type="submit" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Go back</button>
                </form>
        </div>
    </div>
</x-app-layout>
