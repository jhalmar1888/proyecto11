<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Http\Requests\PersonaRequest;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        $items = Persona::latest()->paginate(5);
        return view('Persona.index',compact('items'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show($item)
    {
        //dd($item);
        $items = Persona::find($item);
        return view('Persona.show',compact('items'));
    }

    public function create()
    {
        return view('Persona.create');
    }


    public function store(PersonaRequest $request)
    {
        $item = new Persona;
        $item->Gerencia = $request->Gerencia;
        $item->Rol = $request->Rol;
        $item->ApellidoPaterno = $request->ApellidoPaterno;
        $item->ApellidoMaterno = $request->ApellidoMaterno;
        $item->Nombres = $request->Nombres;
        $item->Persona = $request->Persona;
        $item->Fotografia = $request->Fotografia;
        $item->DepDocId = $request->DepDocId;
        $item->Grado = $request->Grado;
        $item->Arma = $request->Arma;
        $item->Especialidad = $request->Especialidad;
        $item->Cargo = $request->Cargo;
        $item->TipoLicencia = $request->TipoLicencia;
        $item->Profesion = $request->Profesion;
        $item->Celular = $request->Celular;
        $item->Sexo = $request->Sexo;
        $item->Archivo = $request->Archivo;
        $item->Reparticion = $request->Reparticion;

        $item->save();
        return redirect()->route('Persona.index')
        ->with('info', 'Tipo Persona fue guardado');
    }
    public function edit($id)
    {
        $item = Persona::find($id);
        return view('persona.edit', compact('item'));
    }

    public function update(PersonaRequest $request, $id)
    {
        $item = Persona::find($id);

        $item->Gerencia = $request->Gerencia;
        $item->Rol = $request->Rol;
        $item->ApellidoPaterno = $request->ApellidoPaterno;
        $item->ApellidoMaterno = $request->ApellidoMaterno;
        $item->Nombres = $request->Nombres;
        $item->Persona = $request->Persona;
        $item->Fotografia = $request->Fotografia;
        $item->DepDocId = $request->DepDocId;
        $item->Grado = $request->Grado;
        $item->Arma = $request->Arma;
        $item->Especialidad = $request->Especialidad;
        $item->Cargo = $request->Cargo;
        $item->TipoLicencia = $request->TipoLicencia;
        $item->Profesion = $request->Profesion;
        $item->Celular = $request->Celular;
        $item->Sexo = $request->Sexo;
        $item->Archivo = $request->Archivo;
        $item->Reparticion = $request->Reparticion;

        $item->save();
        return redirect()->route('Persona.index')
        ->with('info', 'Tipo Persona fue actualizado');
    }


    public function destroy($item)
    {
        $items = Persona::find($item);
        $items->delete();
  
        return redirect()->route('Persona.index')->with('danger','Tipo Persona fue Eliminado');
    }
}