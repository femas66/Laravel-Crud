<?php

use App\Http\Controllers\BelajarSendiriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WargaController;


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
                                            // index = nama function;
Route::get('/warga', [WargaController::class, "index"]);
Route::get('/warga/create', [WargaController::class, "create"]);
Route::post('/warga/store', [WargaController::class, "store"]);

//belajar sendiri
Route::get('/belajar_sendiri', [BelajarSendiriController::class, "index"]);
Route::post('/belajar_sendiri/store', [BelajarSendiriController::class, "store"]);
