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
    Route::get('/modulo/{id}', [HomeController::class,'modulo'])->name('modulo');

});






require __DIR__.'/auth.php';
