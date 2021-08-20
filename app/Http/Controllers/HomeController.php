<?php

namespace App\Http\Controllers;

use App\Modelo;
use Illuminate\Http\Request;
use Inertia\Inertia;
use stdClass;

class HomeController extends Controller
{
    //
    public function index()
    {
        $modelos = Modelo::where('ativo',1)->whereRaw("LENGTH(sobre) > 50")->orderBy('id','DESC')->limit(3)->get();

        return Inertia::render('Home',['pagina'=>'Inicio','modelos'=>$modelos]);
    }
}
