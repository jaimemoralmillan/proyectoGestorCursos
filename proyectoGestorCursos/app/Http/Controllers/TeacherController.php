<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
use Auth;
use DB;
class TeacherController extends Controller
{
    

    public function teacherCourses() {
        return view("teachers");
    }

    
    public function create()
    {   
        $courses = Course::all();
        return view('addCourse', compact('courses'));
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
        return redirect()->route('teacherCourses');
        
    }
    public function edit($id)
    {
        $course = Course::find($id);
        return view('update', compact('course'));
    }
    public function updateCourses(Request $request, $id)
    {
        $course = Course::find($id);
        $course->title = $request->title;
        $course->description = $request->description;
        $course->curriculum = $request->curriculum;
        $course->content = $request->content;
        $course->save();
        return redirect()->route('teacherCourses');
       

    }

    public function destroyCourses($course_id)
    {
        $course = Course::findOrFail($course_id); 
        $course->delete(); 
    
        return redirect()->route('teacherCourses');
    }
   
    public function registration($id) {
       
        $course = Course::find($id);
        $users=User::all();
        return view('enroll',compact('course','users'));

    }
    public function enroll($user_id,$course_id) {
       
        
        $user=User::findOrFail($user_id);
        $course=Course::findOrFail($course_id);
         $user->attach($course);
        return redirect()->route('registration');


 //$user->attach($course);
 //DB::table('course_user')->insert([
            
 //]); 

    }


}
