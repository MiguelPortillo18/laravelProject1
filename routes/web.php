<?php

use App\Http\Controllers\contactUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\courseController;

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


//Usando laravel 7 la ruta y los controllers se llamarian asi:
// Route::get('/', 'homeController')

Route::get('/', homeController::class)->name('home');

//Usando laravel 7 la ruta y los controllers cuando se pasan metodos se llamarian asi:
// Route::get('cursos', 'courseController@index')

/* Route::get('cursos', [courseController::class, 'index'])->name('cursos.index');

Route::get('cursos/create', [courseController::class, 'create'])->name('cursos.create');

Route::post('cursos', [courseController::class, 'store'])->name('cursos.store');

Route::get('cursos/{curso}', [courseController::class, 'show'])->name('cursos.show');

Route::get('cursos/{curso}/edit', [courseController::class, 'edit'])->name('cursos.edit');

Route::put('cursos/{curso}', [courseController::class, 'update'])->name('cursos.update');

Route::delete('cursos/{curso}', [courseController::class, 'destroy'])->name('cursos.destroy'); */

//Con una sola linea de codigo se puede acceder a todas las rutas creadas, de modo que el codigo se optimiza
Route::resource('cursos', courseController::class);

Route::view('about', 'about')->name('about');

Route::get('contactUs', [contactUsController::class, 'index'])->name('contactUs.index');

Route::post('contactUs', [contactUsController::class, 'store'])->name('contactUs.store');





