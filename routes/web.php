<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
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

Route::get('/contactos', [ContactController::class, 'index']);
Route::post('/contactos', [ContactController::class, 'store']);
Route::delete('/contactos', [ContactController::class, 'destroy']);
Route::put('/contactos', [ContactController::class, 'update']);

Route::get('/encomendas', [OrderController::class, 'index']);
Route::post('/encomendas', [OrderController::class, 'store']);
Route::put('/encomendas/{id}', [OrderController::class, 'complete']);
Route::delete('/encomendas', [OrderController::class, 'destroy']);

Route::get('/test', function () {
    return view('test');
});
