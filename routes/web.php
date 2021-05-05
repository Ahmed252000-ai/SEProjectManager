<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/users', function () {
    return view('users');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/projects', function () {
    return view('projects');
});
Route::get('/edituser', function () {
    return view('edituser');
});

Route::get('/student_home', function () {
    return view('student_home');
});
Route::get('/student_projects', function () {
    return view('student_projects');
});

Route::get('/course', function () {
    return view('course');
});

Route::get('/student_profile', function () {
    return view('student_profile');
});

Route::get('/student_team', function () {
    return view('student_team');
});

Route::get('/student_course', function () {
    return view('student_course');
});

Route::get('/student_project', function () {
    return view('student_project');
});

Route::get('/student_survey', function () {
    return view('student_survey');
});

Auth::routes();


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
