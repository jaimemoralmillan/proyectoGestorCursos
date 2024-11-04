<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\WebController;





Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/',[WebController::class,'dashboard'])->name('dashboard'); // Jaime
    Route::get('/teachers',[TeacherController::class,'teacherCourses'])->name('teacherCourses'); // Felipe Vista Profesores
    Route::delete('/teachers/{id}',[TeacherController::class,'destroyCourses'])->name('destroyCourses'); //Felipe Boton para borrar un curso
    Route::get('/teachers/courses/{id}/edit',[TeacherController::class,'edit'])->name('editCourses'); // Angela boton que te lleva a la vista editar
    Route::put('/teachers/update/{id}',[TeacherController::class,'updateCourses'])->name('updateCourses'); // Ángela   Ruta que edita el curso con nueva info
    Route::get('/teachers/create',[TeacherController::class,'create'])->name('create');//Angela ruta que te lleva al formulario donde introduces los datos del nuevo curso
    Route::post('/teachers/create/store',[TeacherController::class,'store'])->name('store');//Angela ruta que mete los datos en bdd
//
    Route::get('/teachers/enroll',[TeacherController::class,'enroll'])->name('enroll'); //Nicklas ruta de la vista en la que matriculas un nuevo usuario
    Route::post('/teachers/enroll', [TeacherController::class, 'enrollStudents']); // Nicklas ruta que matricula un nuevo usuario
    Route::delete('/teachers/enroll/{course}/{student}', [TeacherController::class, 'destroyStudent'])->name('enroll.destroyStudent'); // Nicklas ruta que desmatricula un usuario

    Route::get('/students',[StudentController::class,'students'])->name('students'); //Jaime ruta a vista inicial de students
    Route::get('/students/courseDetails{id}',[StudentController::class,'courseDetails'])->name('courseDetails'); //Jaime ruta que lleva a los detalles y contenido del curso clicado
    Route::get('/students/availableCourses',[StudentController::class,'availableCourses'])->name('availableCourses'); //Jaime ruta que lleva al listado de todos los cursos creados

   
});
    
