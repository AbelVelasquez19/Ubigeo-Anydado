<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UbigeoController;
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

Route::get('/ubigeo',[UbigeoController::class,'index'])->name('index');
Route::get('/ubigeo/departamentos',[UbigeoController::class,'gedDepartamento'])->name('gedDepartamento');
Route::get('/ubigeo/provincias/{id}',[UbigeoController::class,'gedProvincia'])->name('provincias.gedProvincia');
Route::get('/ubigeo/distrito/{id}',[UbigeoController::class,'gedDistrito'])->name('distrito.gedDistrito');
