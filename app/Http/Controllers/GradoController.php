<?php

namespace App\Http\Controllers;

use App\Models\Grado;
use App\Http\Requests\GradoRequest;
use Illuminate\Http\Request;

class GradoController extends Controller
{
    public function index()
    {
        $items = Grado::latest()->paginate(5);
        return view('grado.index',compact('items'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show($item)
    {
        //dd($item);
        $items = Grado::find($item);
        return view('grado.show',compact('items'));
    }

    public function create()
    {
        return view('grado.create');
    }


    public function store(GradoRequest $request)
    {
        //dd($request);
        $item = new Grado;
        $item->Num = $request->Num;
        $item->Grado = $request->Grado;

        $item->save();
        return redirect()->route('Grado.index')
        ->with('info', 'Tipo Licencia fue guardado');
    }

    public function edit($id)
    {
        $item = Grado::find($id);
        return view('grado.edit', compact('item'));
    }

    public function update(GradoRequest $request, $id)
    {
        //dd($request);
        $item = Grado::find($id);

        $item->Num = $request->Num;
        $item->Grado = $request->Grado;

        $item->save();
        return redirect()->route('Grado.index')
        ->with('info', 'Tipo Licencia fue actualizado');
    }


    public function destroy($item)
    {
        $items = Grado::find($item);
        $items->delete();
  
        return redirect()->route('Grado.index')->with('danger','Tipo Licencia fue Eliminado');
    }
}
