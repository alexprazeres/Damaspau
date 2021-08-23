<?php

use App\Http\Controllers\CasaController;
use App\Http\Controllers\ContatosController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModelosController;
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

Route::get('/',[HomeController::class, 'index']);
Route::get('/modelos',[ModelosController::class, 'index']);
Route::get('/modelo/{id}',[ModelosController::class, 'modelo']);
Route::get('/acasa',[CasaController::class, 'index']);
Route::get('/eventos',[EventosController::class, 'index']);
Route::get('/contatos',[ContatosController::class, 'index'])->name('contatos');
Route::post('/contatos',[ContatosController::class, 'store']);
