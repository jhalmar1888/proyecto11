<?php

namespace App\Http\Controllers;

use App\Models\departamento;
use App\Http\Requests\departamentoRequest;
use Illuminate\Http\Request;

class departamentoController extends Controller
{
    public function index()
    {
        $items = departamento::latest()->paginate(5);
        return view('departamento.index',compact('items'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show($item)
    {
        //dd($item);
        $items = departamento::find($item);
        return view('departamento.show',compact('items'));
    }

    public function create()
    {
        return view('departamento.create');
    }


    public function store(departamentoRequest $request)
    {
        //dd($request);
        $item = new departamento;
        $item->Num = $request->Num;
        $item->departamento = $request->departamento;

        $item->save();
        return redirect()->route('departamento.index')
        ->with('info', 'Tipo departamento fue guardado');
    }

    public function edit($id)
    {
        $item = departamento::find($id);
        return view('departamento.edit', compact('item'));
    }

    public function update(departamentoRequest $request, $id)
    {
        //dd($request);
        $item = departamento::find($id);

        $item->Num = $request->Num;
        $item->departamento = $request->departamento;

        $item->save();
        return redirect()->route('departamento.index')
        ->with('info', 'Tipo departamento fue actualizado');
    }


    public function destroy($item)
    {
        $items = departamento::find($item);
        $items->delete();
  
        return redirect()->route('departamento.index')->with('danger','Tipo departamento fue Eliminado');
    }
}
