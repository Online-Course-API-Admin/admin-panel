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

Route::get('/', function () {
    return view('pages.dashboard');
});
Route::get('/login', function () {
    return view('pages.login');
});
Route::get('/profile/edit', function () {
    return view('pages.profile-edit');
});

Route::get('/courses', function () {
    return view('pages.courses');
});
Route::get('/course/create', function () {
    return view('pages.course-create');
});
Route::get('/course/edit', function () {
    return view('pages.course-edit');
});
Route::get('/lesson/create', function () {
    return view('pages.lesson-create');
});
Route::get('/lesson/edit', function () {
    return view('pages.lesson-edit');
});
Route::get('/quiz/create', function () {
    return view('pages.quiz-create');
});
Route::get('/quiz/edit', function () {
    return view('pages.quiz-edit');
});
Route::get('/earnings', function () {
    return view('pages.earning');
});
