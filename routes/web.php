<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('student');
});
Route::view('/students', 'student-list');