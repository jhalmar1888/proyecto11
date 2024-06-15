<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
<<<<<<< HEAD
use App\Models\Persona;
use App\Http\Requests\PersonaRequest;
use Illuminate\Http\Request;
=======
>>>>>>> 9b41873977db90818e39464b925820aa0fddcfcd
use Illuminate\Http\Request;

use App\Models\Persona;
use App\Http\Requests\PersonaRequest;
<<<<<<< HEAD
=======
>>>>>>> 805e43479cc6b27115825b87b27e584d17206120
>>>>>>> 9b41873977db90818e39464b925820aa0fddcfcd

class PersonaController extends Controller
{
    public function index()
    {
        $items = Persona::latest()->paginate(5);
<<<<<<< HEAD
        return view('persona.index',compact('items'))->with('i', (request()->input('page', 1) - 1) * 5);
=======
<<<<<<< HEAD
        return view('Persona.index',compact('items'))->with('i', (request()->input('page', 1) - 1) * 5);
=======
        return view('persona.index',compact('items'))->with('i', (request()->input('page', 1) - 1) * 5);
>>>>>>> 805e43479cc6b27115825b87b27e584d17206120
>>>>>>> 9b41873977db90818e39464b925820aa0fddcfcd
    }

    public function show($item)
    {
        //dd($item);
        $items = Persona::find($item);
<<<<<<< HEAD
        return view('persona.show',compact('items'));
=======
<<<<<<< HEAD
        return view('Persona.show',compact('items'));
=======
        return view('persona.show',compact('items'));
>>>>>>> 805e43479cc6b27115825b87b27e584d17206120
>>>>>>> 9b41873977db90818e39464b925820aa0fddcfcd
    }

    public function create()
    {
<<<<<<< HEAD
        return view('persona.create');
=======
<<<<<<< HEAD
        return view('Persona.create');
=======
        return view('persona.create');
>>>>>>> 805e43479cc6b27115825b87b27e584d17206120
>>>>>>> 9b41873977db90818e39464b925820aa0fddcfcd
    }


    public function store(PersonaRequest $request)
    {
<<<<<<< HEAD
=======
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
>>>>>>> 9b41873977db90818e39464b925820aa0fddcfcd
        //dd($request);
        $item = new Persona;
        $item->Num = $request->Num;
        $item->Persona = $request->Persona;

        $item->save();
        return redirect()->route('Persona.index')
        ->with('info', 'Tipo Licencia fue guardado');
    }

<<<<<<< HEAD
=======
>>>>>>> 805e43479cc6b27115825b87b27e584d17206120
>>>>>>> 9b41873977db90818e39464b925820aa0fddcfcd
    public function edit($id)
    {
        $item = Persona::find($id);
        return view('persona.edit', compact('item'));
    }

    public function update(PersonaRequest $request, $id)
    {
<<<<<<< HEAD
=======
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
>>>>>>> 9b41873977db90818e39464b925820aa0fddcfcd
        //dd($request);
        $item = Persona::find($id);

        $item->Num = $request->Num;
        $item->Persona = $request->Persona;

        $item->save();
        return redirect()->route('Persona.index')
        ->with('info', 'Tipo Licencia fue actualizado');
<<<<<<< HEAD
=======
>>>>>>> 805e43479cc6b27115825b87b27e584d17206120
>>>>>>> 9b41873977db90818e39464b925820aa0fddcfcd
    }


    public function destroy($item)
    {
        $items = Persona::find($item);
        $items->delete();
<<<<<<< HEAD
=======
<<<<<<< HEAD
  
        return redirect()->route('Persona.index')->with('danger','Tipo Persona fue Eliminado');
    }
}
=======
>>>>>>> 9b41873977db90818e39464b925820aa0fddcfcd

        return redirect()->route('Persona.index')->with('danger','Tipo Licencia fue Eliminado');
    }
}
<<<<<<< HEAD
=======
>>>>>>> 805e43479cc6b27115825b87b27e584d17206120
>>>>>>> 9b41873977db90818e39464b925820aa0fddcfcd
