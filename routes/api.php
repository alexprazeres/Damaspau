<?php

use App\Http\Controllers\AcessoController;
use App\Http\Controllers\ArtigoController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
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


//Rotas de Acesso//
Route::get('naoautorizado',array('as'=>'naoautorizado',function(){
    return response()->json(['error' => "Não autorizado."], 401); 
}));

Route::get('semacesso',function(){
    return "<b>Não autorizado</b>";
})->name("semacesso");


Route::post('v1/login', [AcessoController::class, 'realizarLogin']);


//Rotas Protegidas//
Route::middleware('auth:api')->get('/dados', function(Request $request) {
    return $request->user();
});

