<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
class EventosController extends Controller
{
    public function index()
    {
        return Inertia::render('Eventos',['pagina'=>"Eventos"]);
    }
}
