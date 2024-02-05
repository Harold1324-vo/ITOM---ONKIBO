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
    return view('welcome');
});

Auth::routes();

Route::resource('escuelas', App\Http\Controllers\EscuelaController::class);
Route::resource('alumnos', App\Http\Controllers\AlumnoController::class);
Route::resource('artesMarciales', App\Http\Controllers\ArtesMarcialeController::class);
Route::resource('direcciones', App\Http\Controllers\DireccioneController::class);
Route::resource('equipos', App\Http\Controllers\EquipoController::class);
Route::resource('pagos', App\Http\Controllers\PagoController::class);
Route::resource('examenes', App\Http\Controllers\ExameneController::class);
Route::resource('profesores', App\Http\Controllers\ProfesoreController::class);
Route::resource('seminarios', App\Http\Controllers\SeminarioController::class);
Route::resource('servicios', App\Http\Controllers\ServicioController::class);
Route::resource('torneos', App\Http\Controllers\TorneoController::class);

//Ruta para mostrar una vista
Route::view('/nueva-vista', 'nuevavista');
Route::view('/historia-TK', 'historia');
Route::view('/TK', 'taekwondo');
Route::view('/KB', 'kickboxing');
Route::view('/Seminarios', 'seminarios');
Route::view('/Torneos', 'torneos');
Route::view('/Escuelas', 'escuelas');
Route::view('/Informacion', 'informacion');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');