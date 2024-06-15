<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Especialidad;
use App\Http\Requests\EspecialidadRequest;

class EspecialidadController extends Controller
{
    public function index()
    {
        $items = Especialidad::latest()->paginate(5);
        return view('Especialidad.index',compact('items'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show($item)
    {
        //dd($item);
        $items = Especialidad::find($item);
        return view('Especialidad.show',compact('items'));
    }

    public function create()
    {
        return view('Especialidad.create');
    }


    public function store(EspecialidadRequest $request)
    {
        //dd($request);
        $item = new Especialidad;
        $item->Num = $request->Num;
        $item->Especialidad = $request->Especialidad;

        $item->save();
        return redirect()->route('Especialidad.index')
        ->with('info', 'Especialidad fue guardado');
    }

    public function edit($id)
    {
        $item = Especialidad::find($id);
        return view('Especialidad.edit', compact('item'));
    }

    public function update(EspecialidadRequest $request, $id)
    {
        //dd($request);
        $item = Especialidad::find($id);

        $item->Num = $request->Num;
        $item->Especialidad = $request->Especialidad;

        $item->save();
        return redirect()->route('Especialidad.index')
        ->with('info', 'La especialidad fue actualizada');
    }


    public function destroy($item)
    {
        $items = Especialidad::find($item);
        $items->delete();

        return redirect()->route('Especialidad.index')->with('danger','La especialidad fue eliminada');
    }
}
