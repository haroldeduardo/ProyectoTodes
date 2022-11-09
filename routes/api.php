<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Archivo_controller;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PublicacioneventoController;
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
Route::get('users/',[Archivo_controller::class,'index']);
//get
//post
//delete

Route::get('/publicacion',[PublicacioneventoController::class,'index']);
Route::post('/publicacion',[PublicacioneventoController::class,'store']);
Route::get('/publicacion/{id}',[PublicacioneventoController::class,'show']);
Route::put('/publicacion/{id}',[PublicacioneventoController::class,'update']);
Route::delete('/publicacion/{id}',[PublicacioneventoController::class,'destroy']);


/*CONSULTAS Publicacion
/--------------------------------------------------------------------------------*/


Route::get('/publicacionconsul',[PublicacioneventoController::class,'fechaeventos']);
Route::get('/publicacionconsul2',[PublicacioneventoController::class,'ordenar']);


Route::get('/publis_cate',[PublicacioneventoController::class,'Publicaciones_categoria']);
Route::get('/noticias',[PublicacioneventoController::class,'publicacionNoticia']);
Route::get('/eventos',[PublicacioneventoController::class,'publicacionEvento']);


//Route::get('/archivo',[ArchivoeventoController::class,'index']);
//Route::get('/comentarios',[ComentariosController::class,'index']);
//Route::get('/categoria',[CategoriaController::class,'index']);
//get
//post
//delete
//--------------------------------------------------------------------------
Route::get('/categoria',[CategoriaController::class,'index']);
Route::get('/conscategoria',[CategoriaController::class,'consulta']);
Route::get('/conscategoria2',[CategoriaController::class,'consulta2']);
Route::get('/categoria/{id}',[CategoriaController::class,'show']);
Route::post('/categoria',[CategoriaController::class,'store']);
Route::put('/categoria/{id}',[CategoriaController::class,'update']);
Route::delete('/categoria/{id}',[CategoriaController::class,'destroy']);


/*CONSULTAS CATEGORIA
/--------------------------------------------------------------------------------*/


Route::get('/publi_cate',[CategoriaController::class,'Categorias_publicacion']);

Route::get('/cates_publi',[CategoriaController::class,'Publicaciones_categoria']);

Route::get('/estado_publi',[CategoriaController::class,'Estadoactiva_publicacion']);

Route::get('/estadoinac_publi',[CategoriaController::class,'Estadoinactiva_publicacion']);

//----------------------------------------------------------------------------
Route::get('/archivoevento',[ArchivoeventoController::class,'index']);
Route::get('/archivoevento/{id}',[ArchivoeventoController::class,'show']);
Route::post('/archivoevento',[ArchivoeventoController::class,'store']);
Route::put('/archivoevento/{id}',[ArchivoeventoController::class,'update']);
Route::delete('/archivoevento/{id}',[ArchivoeventoController::class,'destroy']);
//----------------------------------------------------------------------------
Route::get('/comentarios',[ComentariosController::class,'index']);
Route::get('/comentarios/{id}',[ComentariosController::class,'show']);
Route::post('/comentarios',[ComentariosController::class,'store']);
Route::put('/comentarios/{id}',[ComentariosController::class,'update']);
Route::delete('/comentarios/{id}',[ComentariosController::class,'destroy']);
//----------------------------------------------------------------------------

Route::get('/usuario',[UserController::class,'index']);
Route::post('/usuario',[UserController::class,'store']);
Route::get('/usuario/{id}',[UserController::class,'show']);
Route::delete('/usuario/{id}',[UserController::class,'destroy']);
Route::put('/usuario/{id}',[UserController::class,'update']);

//--------------------------------------------------------------------------------
Route::get('/user_login',[UserController::class,'login']);
Route::post('/user_register',[UserController::class,'registrar']);


?>
