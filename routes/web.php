<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DatosContablesController;
use App\Http\Controllers\PersonasController;
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

Route::get('/', [HomeController::class,('index')])->name('index');;
Route::get('/DatosPersonas', [PersonasController::class, 'personas'])->name('personas');
Route::get('/DatosContables', [DatosContablesController::class,('contables')])->name('contables');
Route::get('/CrearPersonas', [PersonasController::class,('crearPersonas')])->name('CrearPersona');
