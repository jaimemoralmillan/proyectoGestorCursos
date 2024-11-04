<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
use Auth;

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
        return redirect()->route('create');

    }

    public function destroyCourses($course_id)
    {
        $course = Course::findOrFail($course_id); 
        $course->delete(); 
    
        return redirect()->route('teacherCourses');
    }
    
    public function enroll()
    {
        $students = User::all(); // Obtenemos todos los usuarios
        return view('enroll', compact( 'students')); // Retornamos la vista con los cursos y usuarios
    }
    
    public function enrollStudents(Request $request) {
        $course = Course::findOrFail($request->course_id); // Obtenemos el curso seleccionado por id
        $course->users()->sync($request->student_ids); // Sincronizamos los usuarios seleccionados con el curso
        return redirect()->back()->with('success', 'Estudiante registrado correctamente!'); // Redireccionamos a la vista anterior con un mensaje de éxito
    }

    public function destroyStudent($courseId, $studentId) {
        $course = Course::findOrFail($courseId); // Obtenemos el curso seleccionado por id
        $course->users()->detach($studentId); // Eliminamos el usuario del curso
        return redirect()->back()->with('success', 'Estudiante eliminado correctamente!');
    }
}
