<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PlatosController;
use App\Http\Controllers\TableController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(PlatosController::class)->group(function () {
    Route::get('/platos', 'index');
    Route::post('/plato', 'create');
    Route::get('/plato/{name}', 'show');
    Route::put('/plato/{id}', 'update');
    Route::delete('/platos/{id}', 'destroy');
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('/categorias', 'index');
    Route::post('/categoria', 'create');
    Route::get('/categoria/{name}', 'show');
    Route::put('/categoria/{id}', 'update');
    Route::delete('/categorias/{id}', 'destroy');
});

Route::controller(TableController::class)->group(function () {
    Route::get('/mesas', 'index');
    Route::post('/mesa', 'create');
    Route::get('/mesa/{number_table}', 'show');
    Route::put('/mesa/{id}', 'update');
    Route::delete('/mesa/{id}', 'destroy');
});
