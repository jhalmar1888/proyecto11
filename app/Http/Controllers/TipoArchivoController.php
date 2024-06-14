<?php

namespace App\Http\Controllers;



use App\Models\TipoArchivo;
use App\Http\Requests\TipoArchivoRequest;
use Illuminate\Http\Request;

class TipoArchivoController extends Controller
{
    public function index()
    {
        $items = TipoArchivo::latest()->paginate(5);
        return view('tipoArchivo.index',compact('items'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show($item)
    {
        //dd($item);
        $items = TipoArchivo::find($item);
        return view('tipoArchivo.show',compact('items'));
    }

    public function create()
    {
        return view('tipoArchivo.create');
    }


    public function store(TipoArchivoRequest $request)
    {
        //dd($request);
        $item = new TipoArchivo;
        
        $item->TipoArchivo = $request->TipoArchivo;
        $item->Descripcion = $request->Descripcion;

        $item->save();
        return redirect()->route('TipoArchivo.index')
        ->with('info', 'Tipo archivo fue guardado');
    }

    public function edit($id)
    {
        $item = TipoArchivo::find($id);
        return view('tipoArchivo.edit', compact('item'));
    }

    public function update(TipoArchivoRequest $request, $id)
    {
        //dd($request);
        $item = TipoArchivo::find($id);

        $item->TipoArchivo = $request->TipoArchivo;
        $item->Descripcion = $request->Descripcion;

        $item->save();
        return redirect()->route('TipoArchivo.index')
        ->with('info', 'Tipo Licencia fue actualizado');
    }


    public function destroy($item)
    {
        $items = TipoArchivo::find($item);
        $items->delete();

        return redirect()->route('TipoArchivo.index')->with('danger','Tipo Licencia fue Eliminado');
    }
}
