<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/studios', [App\Http\Controllers\StudioController::class, 'index'])->name('studios.index');
Route::get('/students', [App\Http\Controllers\StudentController::class, 'index'])->name('students.index');

//Route Hooks - Do not delete//
	// Route::view('jurisdicciones', 'livewire.jurisdicciones.index')->middleware('auth');