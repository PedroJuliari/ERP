<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\OrdenServicoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\MaquinasController;

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

Route::delete('/usuarios/{id}',[UsuarioController::class,'destroy'])->name('deletando');
Route::put('/usuarios/{id}',[UsuarioController::class,'update'])->name('usuario');
Route::get('/usuarios/{id}/edit',[UsuarioController::class,"edit"]);
Route::get('/usuarios/create',[UsuarioController::class,'create']);
Route::get('/usuarios/{id}',[UsuarioController::class,'show']);
Route::get('/usuarios',[UsuarioController::class,'index']);
Route::post('/usuarios',[UsuarioController::class,'store']);
Route::get('/usuarios/{id}',[UsuarioController::class,'editar'])->name('editar');
Route::any('/usuarios/deletar/{id}',[UsuarioController::class,'Deletar'])->name('Deletar');

//rota ordens de serviços
//Route::resource('/OrServicos',OrdenServicoController::class);
Route::get('/OrServicos',[OrdenServicoController::class,'index']);
Route::get('/OrServicos/{id}/edit',[OrdenServicoController::class,"edit"]);
Route::get('/OrServicos/create',[OrdenServicoController::class,'create']);
Route::put('/OrServicos/{id}',[OrdenServicoController::class,'update']);
Route::delete('/OrServicos/{id}',[OrdenServicoController::class,'destroy']);
Route::post('/OrServicos',[OrdenServicoController::class,'store']);

//rotas  categoria
Route::get('/categoria',[CategoriaController::class,'index']);
Route::get('/categoria/{id}/edit',[CategoriaController::class,"edit"]);
Route::get('/categoria/create',[CategoriaController::class,'create']);
Route::put('/categoria/{id}',[CategoriaController::class,'update']);
Route::delete('/categoria/{id}',[CategoriaController::class,'destroy']);
Route::post('/categoria',[CategoriaController::class,'store']);
//Route::get('/categoria/{id}/delete',[CategoriaController::class,"modal"])->name('modal.deleta');

//rotas  funcionarios
Route::get('/funcionario',[FuncionarioController::class,'index']);
Route::get('/funcionario/{id}/edit',[FuncionarioController::class,"edit"]);
Route::get('/funcionario/create',[FuncionarioController::class,'create']);
Route::put('/funcionario/{id}',[FuncionarioController::class,'update']);
Route::delete('/funcionario/{id}',[FuncionarioController::class,'destroy']);
Route::post('/funcionario',[FuncionarioController::class,'store']);
Route::any('/funcionario/search',[FuncionarioController::class,'search']);

//rotas  maquinas
Route::get('/maquinas',[MaquinasController::class,'index']);
Route::get('/maquinas/{id}/edit',[MaquinasController::class,"edit"]);
Route::get('/maquinas/create',[MaquinasController::class,'create']);
Route::put('/maquinas/{id}',[MaquinasController::class,'update']);
Route::delete('/maquinas/{id}',[MaquinasController::class,'destroy']);
Route::post('/maquinas',[MaquinasController::class,'store']);
//Route::get('/maquinas/{id}/modal',[MaquinasController::class,'modal']);
