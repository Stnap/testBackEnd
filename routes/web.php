<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlatosController;
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

Route::get('/', HomeController::class);

Route::controller(PlatosController::class)->group(function () {
    Route::get('platos', 'index');
    Route::post('platos/create', 'create');
    Route::get('platos/{plato}', 'show');
});

// ruta con valor opcional
/*
Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if ($categoria) {
        return "Bienvenido al curso $curso, de la categoria $categoria";
    } else {
        return "Bienvenido al curso $curso";
    }
});
*/
