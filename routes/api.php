<?php

use Illuminate\Http\Request;

use App\Http\Controllers\PublicacioneventoController ;
use App\Http\Controllers\ArchivoeventoController ;
use App\Http\Controllers\ComentariosController ;
use App\Http\Controllers\CategoriaController ;
use App\Http\Controllers\UserController ;
use App\Http\Controllers\DetallepublicacioncategoriaController ;
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

// CONSULTAS

Route::get('/publicacionconsul',[PublicacioneventoController::class,'fechaeventos']);
Route::get('/publicacionconsul2',[PublicacioneventoController::class,'ordenar']);
Route::get('/noticias',[PublicacioneventoController::class,'publicacionNoticia']);
Route::get('/eventos',[PublicacioneventoController::class,'eventos']);



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
Route::get('/categorianombre/{nombre}',[CategoriaController::class,'busquedadenombres']);
Route::post('/categoria',[CategoriaController::class,'store']);
Route::put('/categoria/{id}',[CategoriaController::class,'update']);
Route::delete('/categoria/{id}',[CategoriaController::class,'destroy']);

//----------------------------------------------------------------------------
Route::get('/archivoevento',[ArchivoeventoController::class,'index']);
Route::get('/archivoevento/{id}',[ArchivoeventoController::class,'show']);
Route::post('/archivoevento',[ArchivoeventoController::class,'store']);
Route::put('/archivoevento/{id}',[ArchivoeventoController::class,'update']);
Route::delete('/archivoevento/{id}',[ArchivoeventoController::class,'destroy']);

//llamar  al formulario
Route::get('/codea',[ArchivoeventoController::class,'index']);
//guardar
Route::post('/codeaguardar',[ArchivoeventoController::class,'codeaguardar']);
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


Route::post('/user_register',[UserController::class,'registrar']);
Route::post('/login',[UserController::class,'login']);

//Agregado por Joel, en el trabajo con los roles **********  PROBAR
Route::resource('users',UserController::class)->names('usuarioCrud');



// Rutas agregadas por Juan Camilo
Route::get('/user_login',[UserController::class,'login']);
Route::post('/user_register',[UserController::class,'registrar']);
Route::get('/consultamuchos',[CategoriaController::class,'Publicaciones_categoria']);
Route::get('/consultaarchivos',[ArchivoeventoController::class,'archivopublicaciones']);
 
///eventos por fecha recientes priemero sacamos todos los eventos

Route::get('/consultadeeventos',[PublicacioneventoController::class,'eventosporfechas']);
 
//noticias por fecha recientes priemero sacamos todos las noticias

Route::get('/consultadenoticias',[PublicacioneventoController::class,'noticiasporfechas']);


Route::get('/detalle',[DetallepublicacioncategoriaController::class,'index']);
Route::get('/detalle_categoria',[DetallepublicacioncategoriaController::class,'detallle_categoria']);
Route::get('/detalle_categoria/{id}',[DetallepublicacioncategoriaController::class,'show']);
Route::post('/detalle_categoria',[DetallepublicacioncategoriaController::class,'store']);

//consulta de usuario con los roles
Route::get('/roles_usuarios/{id}',[UserController::class,'showUsersRoles']);
?>

