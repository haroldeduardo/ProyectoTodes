<?php

use Illuminate\Http\Request;
use App\Http\Controllers\PublicacioneventoController ;
use App\Http\Controllers\ArchivoeventoController ;
use App\Http\Controllers\ComentariosController ;
use App\Http\Controllers\CategoriaController ;
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
Route::get('/archivo',[ArchivoeventoController::class,'index']);
Route::get('/comentarios',[ComentariosController::class,'index']);
//Route::get('/categoria',[CategoriaController::class,'index']);
//get
//post
//delete
//--------------------------------------------------------------------------
Route::get('/categoria_index',[Categoriacontroller::class,'index']);
Route::get('/categoria_show/{id}',[Categoriacontroller::class,'show']);
Route::post('/categoria_store',[Categoriacontroller::class,'store']);
Route::put('/categoria_update/{id}',[Categoriacontroller::class,'update']);
Route::delete('/categoria_destroy/{id}',[Categoriacontroller::class,'destroy']);
?>