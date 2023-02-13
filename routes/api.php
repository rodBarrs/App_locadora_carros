<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Application;

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

//Route::resource('cliente','App\http\Controllers\CLienteController');
Route::apiresource('cliente','App\http\Controllers\CLienteController');
Route::apiresource('carro','App\http\Controllers\CarroController');
Route::apiresource('locacao','App\http\Controllers\LocacaoController');
Route::apiresource('marca','App\http\Controllers\MarcaController');
Route::apiresource('modelo','App\http\Controllers\ModeloController');
