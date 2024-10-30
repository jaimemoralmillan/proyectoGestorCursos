<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Course</title>
</head>
<body>
    <h1>Editar</h1>

    <ul>
        <h1>Edit Course:</h1>
        @forelse ($courses as $course)
            <li>

                {{$course->title}}
                <form action="{{ route('editCourses', $course->id) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <input type="text" name="title" id="title" placeholder="title"/>
                    <input type="text" name="description" id="description" placeholder="description"/>
                    <input type="text" name="curriculum" id="curriculum" placeholder="curriculum"/>
                    <input type="text" name="content" id="content" placeholder="content"/>
                    <input type="submit" value="Update Course">
                </form>
                
            </li>
        @empty
            <li><h2>No Data</h2></li>
        @endforelse
    </ul>
   
</body>
</html>