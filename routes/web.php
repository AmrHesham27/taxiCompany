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
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/blog-details', function () {
    return view('blog-details');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/book-ride', function () {
    return view('book-ride');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/driver', function () {
    return view('driver');
});
Route::get('/single-taxi', function () {
    return view('single-taxi');
});
Route::get('/taxi', function () {
    return view('taxi');
});
