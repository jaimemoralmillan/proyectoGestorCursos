<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;


class TeacherController extends Controller
{
    
    public function create()
    {   
        $courses = Course::all();
        return view('addCourse',compact('courses'));
    }
    public function store(Request $request)
    {   
        $course = new Course;
        $course->title = $request->title;
        $course->description = $request->description;
        $course->curriculum = $request->curriculum;
        $course->content = $request->content;
        $course->author_id = Auth::user()->id;
        $course->save();
        return redirect()->route('create');
    }
    public function updateCourses(Request $request, $id)
    {
        $course = Course::find($id);
        $course->title = $request->title;
        $course->description = $request->description;
        $course->curriculum = $request->curriculum;
        $course->content = $request->content;
        $course->save();
        return redirect()->route('create');
    }
    public function editCourses(Request $request, $id)
    {
        $course = Course::find($id);
        return view('addCourse', compact('course'));
    }

    
   

}
