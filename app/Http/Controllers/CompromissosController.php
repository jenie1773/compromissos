<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompromissosController extends Controller
{
    public function index()
    {
        $compromissos = Compromissos::all();
        return view(view: 'compromissos/index');
    }

    public function salvar(Request $request)
    {
        Compromissos::create($request->all());
        return redirect()->route('compromissos');
    }

    public function editar(Compromissos $compromisso, Request $request)
    {
        if ($request->isMethod('PUT')) {
           
            $compromisso = Compromissos::find($request->id);
            $compromisso->fill($request->all());
            $compromisso->save();

            return redirect()->route('compromissos');
        }
        return view('compromissos.editar', compact('compromissos'));
    }

    public function apagar()
    {

    }
}
