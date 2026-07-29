<?php


use App\Models\Course;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Sudam\SudamSweetAlert\Facades\SudamSweetAlert;

Route::get("/", function () {
    return view("welcome");
});

Route::get("/about", function () {
    return view("about");
});

Route::get("/demo{id}", function ($idddd) {
    return "demo".$idddd;
});

//courses Routes

Route::get("/courses", function () {
      $courses = Course::all();
    //return $courses;

    return view("course.index", compact('courses'));
});


Route::get('/courses/create', function () {
    return view('course.create');
});

Route::post("/save-course", function (Request $request) {
   // return $request->all();
    $course= new Course();
    $course->name =$request->course_name;
    $course->price =$request->price;
    $course->description =$request->description;
    $course->save();
    SudamSweetAlert::toast('success', 'Saved!');
    return redirect('/courses');


});



