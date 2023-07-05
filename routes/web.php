<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoAppController;
use App\Http\Controllers\TodoAppControllerSettings;

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


Route::prefix('todoapp')->name('todoapp.')->group(function()
{
    Route::get('/', [TodoAppController::class, "index"])->name('index');
    Route::post('/', [TodoAppController::class, "store"])->name('store');    
    Route::delete('/{id}', [TodoAppController::class, "destroy"])->name('destroy');    
    Route::put('/update/{task}', [TodoAppController::class, "update"])->name('update');
    
    Route::put('/complete/{task}', [TodoAppController::class, "complete"])->name('complete');  

    Route::prefix('settings')->name('settings.')->group(function()
    {
        Route::get('/', [TodoAppControllerSettings::class, "index"])->name('index');
        Route::post('/', [TodoAppControllerSettings::class, "store"])->name('store');

    });


});









Route::get('/blog', function () {
    return view('blog.index');
})->name("blog.index");
