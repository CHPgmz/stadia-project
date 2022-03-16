<?php

use App\Http\Controllers\AdminsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TecnicosController;
use App\Http\Controllers\CuadrillasController;
use App\Http\Controllers\DevmaController;
use App\Http\Controllers\ObrasController;
use App\Http\Controllers\OslController;
use App\Http\Controllers\QuejasController;

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

Route::get('/', [ObrasController::class, 'home']);

Route::get('home', [ObrasController::class, 'home'])->name('home');

Route::get('Obras', [ObrasController::class, 'index'])->name('obras.todo');
Route::get('obras-form', [ObrasController::class, 'create'])->name('obras.form');
Route::post('/obras-insert', [ObrasController::class, 'store'])->name('obras.insert');
Route::post('/obra-update', [ObrasController::class, 'update'])->name('obra.update');

Route::get('dev-materiales', [DevmaController::class, 'index'])->name('materiales');
Route::get('dev-materiales-show', [DevmaController::class, 'showForm'])->name('materiales.form');
Route::post('/dev-mtr-insert', [DevmaController::class, 'store'])->name('materiales.insert');
Route::post('/dev-mtr-update', [DevmaController::class, 'update'])->name('materiales.update');

Route::get('tecnicos', [TecnicosController::class, 'index'])->name('tecnicos.todo');
Route::get('form-tecnicos', [TecnicosController::class, 'create'])->name('form.tecnicos');

Route::get('liquidadas', [OslController::class, 'index'])->name('os-liquidadas');
Route::post('/os-liquidadas-insert', [OslController::class, 'store'])->name('liquidadas.insert');
Route::get('form-osliquidadas', [OslController::class, 'create'])->name('liquidadas.form');

Route::get('quejas', [QuejasController::class, 'index'])->name('quejas.todo');
Route::get('quejas-form', [QuejasController::class, 'create'])->name('quejas.form');
Route::post('/quejas-save', [QuejasController::class, 'store'])->name('quejas.insert');
Route::post('queja-update', [QuejasController::class, 'update'])->name('quejas.update');
Route::delete('/queja-delete', [QuejasController::class, 'destroy'])->name('queja.delete');

Route::get('cuadrillas', [CuadrillasController::class, 'index'])->name('cuadrillas.todo');
Route::get('cuadrilla-form', [CuadrillasController::class, 'create'])->name('cuadrilla.form');

Route::get('administradores', [AdminsController::class, 'index'])->name('admins.todo');
