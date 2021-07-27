<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovimientosController;
use App\Http\Controllers\CuentaContableController;
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

Route::redirect("/","/login");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix("movimientos")->name("movimientos.")->group(function(){
    Route::get("",[MovimientosController::class,"index"])->name("listado");
    Route::get("crear",[MovimientosController::class,'create'])->name("crear");
    Route::post("",[MovimientosController::class,"store"])->name("store");
});
Route::prefix("cuentas")->name("cuentas.")->group(function(){
    Route::get("",[CuentaContableController::class,"index"])->name("listado");
    Route::get("crear",[CuentaContableController::class,'create'])->name("crear");
    Route::post("",[CuentaContableController::class,"store"])->name("store");
});

