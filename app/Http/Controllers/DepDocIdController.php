<?php

namespace App\Http\Controllers;

use App\Models\DepDocId;
use App\Http\Requests\DepDocIdRequest;
use Illuminate\Http\Request;


class DepDocIdController extends Controller
{
    public function index()
    {
        $items = DepDocId::latest()->paginate(5);
        return view('depDocId.index',compact('items'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show($item)
    {
        //dd($item);
        $items = DepDocId::find($item);
        return view('depDocId.show',compact('items'));
    }

    public function create()
    {
        return view('depDocId.create');
    }


    public function store(DepDocIdRequest $request)
    {
        //dd($request);
        $item = new DepDocId;
        $item->Num = $request->Num;
        $item->DepDocId = $request->DepDocId;
        $item->DepDocIdDescripcion = $request->DepDocIdDescripcion;

        $item->save();
        return redirect()->route('DepDocId.index')
        ->with('info', 'Tipo Licencia fue guardado');
    }

    public function edit($id)
    {
        $item = DepDocId::find($id);
        return view('depDocId.edit', compact('item'));
    }

    public function update(DepDocIdRequest $request, $id)
    {
        //dd($request);
        $item = DepDocId::find($id);

        $item->Num = $request->Num;
        $item->DepDocId = $request->DepDocId;
        $item->DepDocIdDescripcion= $request->DepDocIdDescripcion;

        $item->save();
        return redirect()->route('DepDocId.index')
        ->with('info', 'Tipo Licencia fue actualizado');
    }


    public function destroy($item)
    {
        $items = DepDocId::find($item);
        $items->delete();

        return redirect()->route('DepDocId.index')->with('danger','Tipo Licencia fue Eliminado');
    }
}