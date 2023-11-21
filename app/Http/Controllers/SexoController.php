<?php

namespace App\Http\Controllers;

use App\Models\Sexo;
use App\Http\Requests\SexoRequest;
use Illuminate\Http\Request;

class SexoController extends Controller
{
    public function index()
    {
        $items = Sexo::latest()->paginate(5);
        return view('sexo.index',compact('items'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show($item)
    {
        //dd($item);
        $items = Sexo::find($item);
        return view('sexo.show',compact('items'));
    }

    public function create()
    {
        return view('sexo.create');
    }


    public function store(SexoRequest $request)
    {
        //dd($request);
        $item = new Sexo;
        $item->Num = $request->Num;
        $item->Sexo = $request->Sexo;

        $item->save();
        return redirect()->route('Sexo.index')
        ->with('info', 'Tipo Licencia fue guardado');
    }

    public function edit($id)
    {
        $item = Sexo::find($id);
        return view('sexo.edit', compact('item'));
    }

    public function update(SexoRequest $request, $id)
    {
        //dd($request);
        $item = Sexo::find($id);

        $item->Num = $request->Num;
        $item->Sexo = $request->Sexo;

        $item->save();
        return redirect()->route('Sexo.index')
        ->with('info', 'Tipo Licencia fue actualizado');
    }


    public function destroy($item)
    {
        $items = Sexo::find($item);
        $items->delete();
  
        return redirect()->route('Sexo.index')->with('danger','Tipo Licencia fue Eliminado');
    }
}
