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

Route::get('/', function () {
    return view('home');
});

Route::get('home', function () {
    return view('home');
})->name('home');

Route::get('Obras', [ObrasController::class, 'index'])->name('obras.todo');

Route::get('dev-materiales', [DevmaController::class, 'index'])->name('materiales');
Route::get('dev-materiales-show', [DevmaController::class, 'showForm'])->name('materiales.form');
Route::post('/dev-mtr-insert', [DevmaController::class, 'store'])->name('materiales.insert');

Route::get('tecnicos', [TecnicosController::class, 'index'])->name('tecnicos.todo');

Route::get('liquidadas', [OslController::class, 'index'])->name('os-liquidadas');
Route::get('form-osliquidadas', [OslController::class, 'create'])->name('liquidadas.form');

Route::get('quejas', [QuejasController::class, 'index'])->name('quejas.todo');

Route::get('cuadrillas', [CuadrillasController::class, 'index'])->name('cuadrillas.todo');

Route::get('administradores', [AdminsController::class, 'index'])->name('admins.todo');
