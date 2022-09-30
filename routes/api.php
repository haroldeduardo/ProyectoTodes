<?php

use Illuminate\Http\Request;
use App\Http\Controllers\PublicacioneventoController ;
use App\Http\Controllers\ArchivoeventoController ;
use App\Http\Controllers\ComentariosController ;
use App\Http\Controllers\CategoriaController ;
use App\Http\Controllers\UserController ;
use Illuminate\Support\Facades\DB;
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
Route::get('/publicacion',[PublicacioneventoController::class,'index']);
Route::post('/publicacion',[PublicacioneventoController::class,'store']);
Route::get('/publicacion/{id}',[PublicacioneventoController::class,'show']);
Route::put('/publicacion/{id}',[PublicacioneventoController::class,'update']);
Route::delete('/publicacion/{id}',[PublicacioneventoController::class,'destroy']);

Route::get('/archivo',[ArchivoeventoController::class,'index']);
Route::get('/comentarios',[ComentariosController::class,'index']);
//Route::get('/categoria',[CategoriaController::class,'index']);
//get
//post
//delete
//--------------------------------------------------------------------------
Route::get('/categoria',[CategoriaController::class,'index']);
Route::get('/categoria/{id}',[CategoriaController::class,'show']);
Route::post('/categoria',[CategoriaController::class,'store']);
Route::put('/categoria/{id}',[CategoriaController::class,'update']);
Route::delete('/categoria/{id}',[CategoriaController::class,'destroy']);
//----------------------------------------------------------------------------
Route::get('/archivoevento',[ArchivoeventoController::class,'index']);
Route::get('/archivoevento/{id}',[ArchivoeventoController::class,'show']);
Route::post('/archivoevento',[ArchivoeventoController::class,'store']);
Route::put('/archivoevento/{id}',[ArchivoeventoController::class,'update']);
Route::delete('/archivoevento/{id}',[ArchivoeventoController::class,'destroy']);
//----------------------------------------------------------------------------
Route::get('/comentarios_index',[ComentariosController::class,'index']);
Route::get('/comentarios_show/{id}',[ComentariosController::class,'show']);
Route::post('/comentarios_store',[ComentariosController::class,'store']);
Route::put('/comentarios_update/{id}',[ComentariosController::class,'update']);
Route::delete('/comentarios_destroy/{id}',[ComentariosController::class,'destroy']);
//----------------------------------------------------------------------------

Route::get('/usuario',[UserController::class,'index']);
Route::post('/usuario',[UserController::class,'store']);
Route::get('/usuario/{id}',[UserController::class,'show']);
Route::delete('/usuario/{id}',[UserController::class,'destroy']);
Route::put('/usuario/{id}',[UserController::class,'update']);



?>