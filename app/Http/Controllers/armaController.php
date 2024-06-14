<?php

namespace App\Http\Controllers;

use App\Models\arma;
use App\Http\Requests\armaRequest;
use Illuminate\Http\Request;

class armaController extends Controller
{
    public function index()
    {
        $items = arma::latest()->paginate(5);
        return view('arma.index',compact('items'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show($item)
    {
        //dd($item);
        $items = arma::find($item);
        return view('arma.show',compact('items'));
    }

    public function create()
    {
        return view('arma.create');
    }


    public function store(armaRequest $request)
    {
        //dd($request);
        $item = new arma;
        $item->Num = $request->Num;
        $item->arma = $request->arma;

        $item->save();
        return redirect()->route('arma.index')
        ->with('info', 'Tipo Arma fue guardado');
    }

    public function edit($id)
    {
        $item = arma::find($id);
        return view('arma.edit', compact('item'));
    }

    public function update(armaRequest $request, $id)
    {
        //dd($request);
        $item = arma::find($id);

        $item->Num = $request->Num;
        $item->arma = $request->arma;

        $item->save();
        return redirect()->route('arma.index')
        ->with('info', 'Tipo Arma fue actualizado');
    }


    public function destroy($item)
    {
        $items = arma::find($item);
        $items->delete();
  
        return redirect()->route('arma.index')->with('danger','Tipo Arma fue Eliminado');
    }
}
