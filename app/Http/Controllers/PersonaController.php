<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Persona;
use App\Http\Requests\PersonaRequest;
use Illuminate\Http\Request;
=======
use Illuminate\Http\Request;

use App\Models\Persona;
use App\Http\Requests\PersonaRequest;
>>>>>>> 805e43479cc6b27115825b87b27e584d17206120

class PersonaController extends Controller
{
    public function index()
    {
        $items = Persona::latest()->paginate(5);
<<<<<<< HEAD
        return view('Persona.index',compact('items'))->with('i', (request()->input('page', 1) - 1) * 5);
=======
        return view('persona.index',compact('items'))->with('i', (request()->input('page', 1) - 1) * 5);
>>>>>>> 805e43479cc6b27115825b87b27e584d17206120
    }

    public function show($item)
    {
        //dd($item);
        $items = Persona::find($item);
<<<<<<< HEAD
        return view('Persona.show',compact('items'));
=======
        return view('persona.show',compact('items'));
>>>>>>> 805e43479cc6b27115825b87b27e584d17206120
    }

    public function create()
    {
<<<<<<< HEAD
        return view('Persona.create');
=======
        return view('persona.create');
>>>>>>> 805e43479cc6b27115825b87b27e584d17206120
    }


    public function store(PersonaRequest $request)
    {
<<<<<<< HEAD
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
=======
        //dd($request);
        $item = new Persona;
        $item->Num = $request->Num;
        $item->Persona = $request->Persona;

        $item->save();
        return redirect()->route('Persona.index')
        ->with('info', 'Tipo Licencia fue guardado');
    }

>>>>>>> 805e43479cc6b27115825b87b27e584d17206120
    public function edit($id)
    {
        $item = Persona::find($id);
        return view('persona.edit', compact('item'));
    }

    public function update(PersonaRequest $request, $id)
    {
<<<<<<< HEAD
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
=======
        //dd($request);
        $item = Persona::find($id);

        $item->Num = $request->Num;
        $item->Persona = $request->Persona;

        $item->save();
        return redirect()->route('Persona.index')
        ->with('info', 'Tipo Licencia fue actualizado');
>>>>>>> 805e43479cc6b27115825b87b27e584d17206120
    }


    public function destroy($item)
    {
        $items = Persona::find($item);
        $items->delete();
<<<<<<< HEAD
  
        return redirect()->route('Persona.index')->with('danger','Tipo Persona fue Eliminado');
    }
}
=======

        return redirect()->route('Persona.index')->with('danger','Tipo Licencia fue Eliminado');
    }
}
>>>>>>> 805e43479cc6b27115825b87b27e584d17206120
