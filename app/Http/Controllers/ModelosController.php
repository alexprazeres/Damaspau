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
        return Inertia::render('Modelos',['pagina'=>"Modelos",'modelos'=>$modelos]);
    }
    public function modelo(Request $request)
    {


        $request->merge(['id' => $request->route('id')]);
        $request->validate([
            'id' => ['required','numeric']
        ]);

        $modelo = Modelo::find($request->id)->imagens()->get();

        return Inertia::render('Modelo',['pagina'=>"Modelos",'modelo'=>$modelo]);

    }
}
