<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get("/", function () {
    return view("welcome");
});

Route::get("/about", function () {
    return view("about");
});

Route::get("/courses", function () {
    return view("courses");
});

Route::get("/home", function () {
    return redirect("/");
});

Route::post("/save-course", function (Request $request) {
    return $request->all();
});
