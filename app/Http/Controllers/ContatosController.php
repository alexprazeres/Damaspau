<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
class ContatosController extends Controller
{
    public function index()
    {
        return Inertia::render('Contatos',['pagina'=>"Contatos"]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'nome'=>['required','min:5'],
            'telefone'=>['required','min:11'],
            'mensagem'=>['required','min:10']
        ]);


        return Redirect::route('contatos')->with('success', 'Mensagem enviada com sucesso!');
    }
}
