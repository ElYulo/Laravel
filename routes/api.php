<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Crear Ruta ip/api/uri
Route::get('/usuarios', [UsuarioController::class, 'obtener']);

Route::put('/usuarios/{id}', [UsuarioController::class, 'actualizar']);

Route::post('/usuarios/{id}', function ($id) {
    return 'Obteniendo usuarios';
});
Route::delete('/usuarios/{id}', [UsuarioController::class, 'eliminar']);

Route::post('/usuarios', [UsuarioController::class, 'crear']);

Route::get('/despedida', function () {
    return 'Ya me voy ya me espido xd';
});

Route::get('/trabajo/{edad}', function ($edad) {
    if ($edad <= 0 || $edad >= 100) {
        return 'error ' . $edad;
    } else if ($edad < 18) {
        return 'Eres menor de edad, con una edad de ' . $edad;
    } else {
        return 'Eres mayor de edad, con una edad de ' . $edad;
    }
});

Route::get('/productos', [ProductoController::class, 'obtener']);
