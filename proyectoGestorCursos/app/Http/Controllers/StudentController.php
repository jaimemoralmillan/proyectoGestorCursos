<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course ;

class StudentController extends Controller
{
    public function students() {

        $courses = Course::all();
        return view("students", compact("courses"));
    }
}
