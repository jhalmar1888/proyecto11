<?php

namespace App\Http\Controllers;

use App\Models\Reparticion;
use App\Http\Requests\ReparticionRequest;
use Illuminate\Http\Request;

class ReparticionController extends Controller
{
    public function index()
    {
        $items = Reparticion::latest()->paginate(5);
        return view('reparticion.index',compact('items'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show($item)
    {
        //dd($item);
        $items = Reparticion::find($item);
        return view('reparticion.show',compact('items'));
    }

    public function create()
    {
        return view('reparticion.create');
    }


    public function store(ReparticionRequest $request)
    {
        //dd($request);
        $item = new Reparticion;
        $item->Num = $request->Num;
        $item->Reparticion = $request->Reparticion;

        $item->save();
        return redirect()->route('reparticion.index')
        ->with('info', 'guardado');
    }

    public function edit($id)
    {
        $item = Reparticion::find($id);
        return view('reparticion.edit', compact('item'));
    }

    public function update(ReparticionRequest $request, $id)
    {
        //dd($request);
        $item = Reparticion::find($id);

        $item->Num = $request->Num;
        $item->Reparticion = $request->Reparticion;

        $item->save();
        return redirect()->route('Sexo.index')
        ->with('info', 'actualizado');
    }


    public function destroy($item)
    {
        $items = Reparticion::find($item);
        $items->delete();
  
        return redirect()->route('reparticion.index')->with('danger','Eliminado');
    }
}
