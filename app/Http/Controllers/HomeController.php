<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Modelo;
use Illuminate\Http\Request;
use Inertia\Inertia;
use stdClass;

class HomeController extends Controller
{
    //
    public function index()
    {
        $destaques = Modelo::where('ativo',1)->whereRaw("LENGTH(sobre) > 50")->orderBy('id','DESC')->limit(3)->get();
        $modelos = Modelo::where('ativo',1)->inRandomOrder()->limit(6)->get();
        $eventos = Evento::where('ativo',1)->orderBy('id','desc')->get();

        return Inertia::render('Home',[
            'pagina'=>'Inicio',
            'destaques'=>$destaques,
            'modelos'=>$modelos,
            'eventos'=>$eventos]);
    }
}
