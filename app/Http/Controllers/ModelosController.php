<?php

namespace App\Http\Controllers;

use App\Modelo;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ModelosController extends Controller
{
    public function index()
    {

        $modelos = Modelo::all();
        return Inertia::render('Modelos',['pagina'=>"Modelos"]);
    }
}
