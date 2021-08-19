<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ModelosController extends Controller
{
    public function index()
    {
        return Inertia::render('Modelos',['pagina'=>"Modelos"]);
    }
}
