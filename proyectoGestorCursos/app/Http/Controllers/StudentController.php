<?php

namespace App\Http\Controllers;
use App\Models\Course ;
use Illuminate\Support\Facades\Auth;


class StudentController extends Controller
{
    public function students() {

        $courses = Course::all();
        $user = Auth::user();
        $userCourses = $user->courses; 
        
        return view("students", compact("courses","userCourses"));
    }


 public function courseDetails($id) {

        $course = Course::find($id);
        
        return view("courseDetails", compact("course"));
    }

}


