<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Course</title>
</head>
<body>
    <h1>Add Course: </h1>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <input type="text" name="title" id="title" placeholder="title"/>
        <input type="text" name="description" id="description" placeholder="description"/>
        <input type="text" name="curriculum" id="curriculum" placeholder="curriculum"/>
        <input type="text" name="content" id="content" placeholder="content"/>
        <input type="submit" value="Add Course">
    </form>


    <ul>
        @forelse ($courses as $course)
            <li>
                <a href="{{ route('updateCourses', $course->id) }}">✏️​</a>
                
            </li>
           
        @empty
            <li><h2>No Data</h2></li>
        
        @endforelse
    </ul> 

    <h1>Edit Course: {{$course->title}}</h1>
    <form action="{{ route('editCourses', $course->id) }}" method="post">
        @method("PUT")
        @csrf
        <input type="text" name="name" value="{{ $product->id }}" placeholder="name" />
        <input type="submit" value="Update">
    </form>
</body>
</html>