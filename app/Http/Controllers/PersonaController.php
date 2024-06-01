<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Persona;
use App\Http\Requests\PersonaRequest;

class PersonaController extends Controller
{
    public function index()
    {
        $items = Persona::latest()->paginate(5);
        return view('persona.index',compact('items'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show($item)
    {
        //dd($item);
        $items = Persona::find($item);
        return view('persona.show',compact('items'));
    }

    public function create()
    {
        return view('persona.create');
    }


    public function store(PersonaRequest $request)
    {
        //dd($request);
        $item = new Persona;
        $item->Num = $request->Num;
        $item->Persona = $request->Persona;

        $item->save();
        return redirect()->route('Persona.index')
        ->with('info', 'Tipo Licencia fue guardado');
    }

    public function edit($id)
    {
        $item = Persona::find($id);
        return view('persona.edit', compact('item'));
    }

    public function update(PersonaRequest $request, $id)
    {
        //dd($request);
        $item = Persona::find($id);

        $item->Num = $request->Num;
        $item->Persona = $request->Persona;

        $item->save();
        return redirect()->route('Persona.index')
        ->with('info', 'Tipo Licencia fue actualizado');
    }


    public function destroy($item)
    {
        $items = Persona::find($item);
        $items->delete();

        return redirect()->route('Persona.index')->with('danger','Tipo Licencia fue Eliminado');
    }
}
