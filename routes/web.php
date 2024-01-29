<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::middleware(['auth'])->group(function(){
    Route::get('/', [HomeController::class,'inicio'])->name('inicio');
    Route::get('/admin', [HomeController::class,'admin'])->name('admin');
    Route::get('/contabilidad', [HomeController::class,'contabilidad'])->name('contabilidad');
    Route::get('/planillas', [HomeController::class,'planillas'])->name('planillas');
    Route::get('/activo-fijo', [HomeController::class,'activoFijo'])->name('activoFijo');
    Route::get('/fact-invent', [HomeController::class,'factInvent'])->name('factInvent');
    Route::get('/iva', [HomeController::class,'iva'])->name('iva');
    Route::get('/cuentas-pago', [HomeController::class,'cuentasPago'])->name('cuentasPago');
    Route::get('/cuentas-cobro', [HomeController::class,'cuentasCobro'])->name('cuentasCobro');
    Route::get('/bancos', [HomeController::class,'bancos'])->name('bancos');
});






require __DIR__.'/auth.php';
