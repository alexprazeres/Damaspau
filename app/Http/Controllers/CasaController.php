<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CasaController extends Controller
{
    public function index()
    {
        return Inertia::render('Casa',['pagina'=>"A Casa"]);
    }
}
