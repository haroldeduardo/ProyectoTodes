<?php

use Illuminate\Http\Request;
//use App\Http\Controllers\Archivo_controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EjemploController;

//use App\Http\Controllers\categoriasController;


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

Route::get('/publicacion',[EjemploController::class,'index']);

//Route::get('/categorias',[categoriasController::class,'index']);

//get
//post
//delete
?>