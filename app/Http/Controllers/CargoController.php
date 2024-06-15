<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cargo;
use App\Http\Requests\CargoRequest;

class CargoController extends Controller
{
    public function index()
    {
        $items = Cargo::latest()->paginate(5);
        return view('cargo.index',compact('items'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show($item)
    {
        //dd($item);
        $items = Cargo::find($item);
        return view('cargo.show',compact('items'));
    }

    public function create()
    {
        return view('cargo.create');
    }


    public function store(CargoRequest $request)
    {
        //dd($request);
        $item = new Cargo;
        $item->Num = $request->Num;
        $item->Cargo = $request->Cargo;

        $item->save();
        return redirect()->route('Cargo.index')
        ->with('info', 'El Cargo fue guardado');
    }

    public function edit($id)
    {
        $item = Cargo::find($id);
        return view('cargo.edit', compact('item'));
    }

    public function update(CargoRequest $request, $id)
    {
        //dd($request);
        $item = Cargo::find($id);

        $item->Num = $request->Num;
        $item->Cargo = $request->Cargo;

        $item->save();
        return redirect()->route('Cargo.index')
        ->with('info', 'El Cargo fue actualizado');
    }


    public function destroy($item)
    {
        $items = Cargo::find($item);
        $items->delete();

        return redirect()->route('Cargo.index')->with('danger','El cargo fue Eliminado');
    }
}
