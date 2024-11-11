<?php

namespace App\Http\Controllers;
use App\Models\Course ;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


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
        $author_id=$course->author_id;
        $author=User::find($author_id);
        
        
        return view("courseDetails", compact("course","author"));
    }

}


