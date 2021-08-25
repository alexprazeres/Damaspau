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

        $modelo = Modelo::where('id',$request->id)->with('imagens')->first();
        $modelos = Modelo::where('ativo',1)->whereNotIn('id',[$modelo->id])->inRandomOrder()->limit(6)->get();

        return Inertia::render('Modelo',['pagina'=>"Modelos",'modelo'=>$modelo,'modelos'=>$modelos]);

    }
}
