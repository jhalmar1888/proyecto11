<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Reparticion;
use App\Http\Requests\ReparticionRequest;




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
        $item->Reparticion = $request->Reparticion;
        $item->Codigo = $request->Codigo;
        $item->Responsable = $request->Responsable;
        $item->Descripcion = $request->Descripcion;
        $item->DepDocId = $request->DepDocId;
        $item->Lugar = $request->Lugar;
        $item->Latitud = $request->Latitud;
        $item->Longitud = $request->Longitud;
        $item->TipoReparticion = $request->TipoReparticion;
        $item->UnidadSup = $request->UnidadSup;
        $item->UnidadSupParte = $request->UnidadSupParte;


        $item->save();
        return redirect()->route('Reparticion.index')
        ->with('info', 'Reparticion fue guardado');
    }

    public function edit($id)
    {
        //dd($request->$id);
        $item = Reparticion::find($id);
        return view('reparticion.edit', compact('item'));
    }

    public function update(ReparticionRequest $request, $id)
    {
        //dd($request);
        $item = Reparticion::find($id);

        $item->Reparticion = $request->Reparticion;
        $item->Codigo = $request->Codigo;
        $item->Responsable = $request->Responsable;
        $item->Descripcion = $request->Descripcion;
        $item->DepDocId = $request->DepDocId;
        $item->Lugar = $request->Lugar;
        $item->Latitud = $request->Latitud;
        $item->Longitud = $request->Longitud;
        $item->TipoReparticion = $request->TipoReparticion;
        $item->UnidadSup = $request->UnidadSup;
        $item->UnidadSupParte = $request->UnidadSupParte;

        $item->save();
        return redirect()->route('Reparticion.index')
        ->with('info', 'Reparticion actualizado');
    }


    public function destroy($item)
    {
        $items = Reparticion::find($item);
        $items->delete();  
        return redirect()->route('Reparticion.index')->with('danger','Reparticion fue Eliminado');
    }
}
