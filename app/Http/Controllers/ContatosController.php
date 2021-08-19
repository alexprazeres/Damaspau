<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
class ContatosController extends Controller
{
    public function index()
    {
        return Inertia::render('Contatos',['pagina'=>"Contatos"]);
    }
}
