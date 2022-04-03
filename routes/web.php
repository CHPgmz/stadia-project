<?php

use App\Http\Controllers\AdminsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TecnicosController;
use App\Http\Controllers\CuadrillasController;
use App\Http\Controllers\DevmaController;
use App\Http\Controllers\ObrasController;
use App\Http\Controllers\OslController;
use App\Http\Controllers\QuejasController;
use App\Http\Controllers\QueGuarantiasController;
use App\Http\Controllers\OsSemanalesController;

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

Route::get("/", [ObrasController::class, "home"]);

Route::get("home", [ObrasController::class, "home"])->name("home");

Route::get("export-os", [OslController::class, "export_os"])->name("export.osl");
Route::get("export-obras", [ObrasController::class, "export_obras"])->name("export.obras");

Route::get("Obras", [ObrasController::class, "index"])->name("obras.todo");
Route::get("obras-form", [ObrasController::class, "create"])->name("obras.form");
Route::post("/obras-insert", [ObrasController::class, "store"])->name("obras.insert");
Route::post("/obra-update", [ObrasController::class, "update"])->name("obra.update");
Route::delete("/delete-obra", [ObrasController::class, "elmObra"])->name('elm-obra');

Route::get("dev-materiales", [DevmaController::class, "index"])->name("materiales");
Route::get("dev-materiales-show", [DevmaController::class, "showForm"])->name("materiales.form");
Route::post("/dev-mtr-insert", [DevmaController::class, "store"])->name("materiales.insert");
Route::post("/dev-mtr-update", [DevmaController::class, "update"])->name("materiales.update");

Route::get("tecnicos", [TecnicosController::class, "index"])->name("tecnicos.todo");
Route::get("form-tecnicos", [TecnicosController::class, "create"])->name("form.tecnicos");
Route::post("/tecnico-add", [TecnicosController::class, "store"])->name("tecnico.add");
Route::post("/tec-update", [TecnicosController::class, "update"])->name("tecnico.update");

Route::get("liquidadas", [OslController::class, "index"])->name("os-liquidadas");
Route::post("/os-liquidadas-insert", [OslController::class, "store"])->name("liquidadas.insert");
Route::get("form-osliquidadas", [OslController::class, "create"])->name("liquidadas.form");
Route::post("update-osl", [OslController::class, "update"])->name("update.osl");

Route::get("quejas", [QuejasController::class, "index"])->name("quejas.todo");
Route::get("quejas-form", [QuejasController::class, "create"])->name("quejas.form");
Route::post("/quejas-save", [QuejasController::class, "store"])->name("quejas.insert");
Route::post("queja-update", [QuejasController::class, "update"])->name("quejas.update");
//Route::delete("/queja-delete", [QuejasController::class, "destroy"])->name("queja.delete");

Route::get("cuadrillas", [CuadrillasController::class, "index"])->name("cuadrillas.todo");
Route::get("cuadrilla-form", [CuadrillasController::class, "create"])->name("cuadrilla.form");
Route::post("cuadrilla-insert", [CuadrillasController::class, "store"])->name("cuadrilla.insert");

Route::get("garantias-todo", [QueGuarantiasController::class, "index"])->name("garantias.todo");
Route::get("quejas-garantias-form", [QueGuarantiasController::class,"create",])->name("garantias.form");
Route::post("save-qgrtantias", [QueGuarantiasController::class, "store"])->name("garantias.save");
Route::post("update-qgrt", [QueGuarantiasController::class, "update"])->name("garantias.update");

Route::get("os-semanales", [OsSemanalesController::class, "index"])->name("semanales.todo");
Route::get("os-data/{id}", [OsSemanalesController::class, "index_sem"])->name("os.data");
Route::get("/os-data-todo/{id}", [OsSemanalesController::class,"create_sem",])->name("sem.todo");
Route::post("os-sem-save", [OsSemanalesController::class, "store_sem"])->name("sem.save");
Route::post("os-data-save", [OsSemanalesController::class, "store"])->name("os_sem.save");
Route::post("os-data-update", [OsSemanalesController::class, "update"])->name("data.update");

Route::get("administradores", [AdminsController::class, "index"])->name(
    "admins.todo"
);
