<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name("home.index");

Route::get('/todoapp', function () {
    return view('todoapp.index');
})->name('todoapp.index');

Route::get('/todoapp/settings', function () {
    return view('todoapp.settings');
})->name('todoapp.settings');


Route::get('/blog', function () {
    return view('blog.index');
})->name("blog.index");
