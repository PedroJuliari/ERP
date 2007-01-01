<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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
    return view('home');
});

//Route::resource('/usuarios',UsuarioController::class);

Route::delete('/usuarios/{id}',[UsuarioController::class,'destroy']);
Route::put('/usuarios/{id}',[UsuarioController::class,'update']);
Route::get('/usuarios/{id}/edit',[UsuarioController::class,"edit"]);
Route::get('/usuarios/create',[UsuarioController::class,'create']);
Route::get('/usuarios/{id}',[UsuarioController::class,'show']);
Route::get('/usuarios',[UsuarioController::class,'index']);
Route::post('/usuarios',[UsuarioController::class,'store']);

