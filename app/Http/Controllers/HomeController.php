<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use stdClass;

class HomeController extends Controller
{
    //
    public function index()
    {
        $modelos = new stdClass;
        $modelos->nome = "vanessa";


        return Inertia::render('Home',['pagina'=>'Inicio','modelos'=>$modelos]);
    }
}
