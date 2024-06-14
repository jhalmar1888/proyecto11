@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">PERSONA</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">Persona</p>
                </div>
            </div>
            <section class="content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-primary">
                              <div class="card-header">
                                <h3 class="card-title">Editar persona</h3>
                              </div>
                              <form action="{{ route('Persona.update',$item->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                 
                                  <div class="form-group">
                                    <label for="Gerencia">Gerencia</label>
                                    <input type="text" class="form-control" name="Gerencia" value="{{ $item->Gerencia }}"  placeholder="Gerencia">
                                  </div>
                                  <div class="form-group">
                                    <label for="Rol">Rol</label>
                                    <input type="text" class="form-control" name="Rol" value="{{ $item->Rol }}" placeholder="Rol">
                                  </div>
                                  <div class="form-group">
                                    <label for="ApellidoPaterno">ApellidoPaterno</label>
                                    <input type="text" class="form-control" name="ApellidoPaterno" value="{{ $item->ApellidoPaterno }}" placeholder="Apellido Paterno">
                                  </div>
                                  <div class="form-group">
                                    <label for="ApellidoMaterno">ApellidoMaterno</label>
                                    <input type="text" class="form-control" name="ApellidoMaterno" value="{{ $item->ApellidoMaterno }}" placeholder="Apellido Materno">
                                  </div>
                                  <div class="form-group">
                                    <label for="Nombres">Nombres</label>
                                    <input type="text" class="form-control" name="Nombres"value="{{ $item->Nombres }}" placeholder="Nombres">
                                  </div>
                                  <div class="form-group">
                                    <label for="Persona">Persona</label>
                                    <input type="text" class="form-control" name="Persona" value="{{ $item->Persona }}" placeholder="Persona">
                                  </div>
                                  <div class="form-group">
                                    <label for="Fotografia">Fotografia</label>
                                    <input type="text" class="form-control" name="Fotografia" value="{{ $item->Fotografia }}" placeholder="Fotografia">
                                  </div>
                                  <div class="form-group">
                                    <label for="Ci">Ci</label>
                                    <input type="text" class="form-control" name="Ci" value="{{ $item->Ci }}" placeholder="Ci">
                                  </div>
                                  <div class="form-group">
                                    <label for="DepDocId">DepDocId</label>
                                    <input type="text" class="form-control" name="DepDocId" value="{{ $item->DepDocId }}" placeholder="DepDocId">
                                  </div>
                                  <div class="form-group">
                                    <label for="Grado">Grado</label>
                                    <input type="text" class="form-control" name="Grado" value="{{ $item->Grado }}" placeholder="Grado">
                                  </div>
                                  <div class="form-group">
                                    <label for="Arma">Arma</label>
                                    <input type="text" class="form-control" name="Arma" value="{{ $item->Arma }}" placeholder="Arma">
                                  </div>
                                  <div class="form-group">
                                    <label for="Especialidad">Especialidad</label>
                                    <input type="text" class="form-control" name="Especialidad" value="{{ $item->Especialidad }}" placeholder="Especialidad">
                                  </div>
                                  <div class="form-group">
                                    <label for="Cargo">Cargo</label>
                                    <input type="text" class="form-control" name="Cargo" value="{{ $item->Cargo }}" placeholder="Cargo">
                                  </div>
                                  <div class="form-group">
                                    <label for="TipoLicencia">TipoLicencia</label>
                                    <input type="text" class="form-control" name="TipoLicencia" value="{{ $item->TipoLicencia }}" placeholder="Tipo de Licencia">
                                  </div>
                                  <div class="form-group">
                                    <label for="Profesion">Profesion</label>
                                    <input type="text" class="form-control" name="Profesion" value="{{ $item->Profesion }}" placeholder="Profesion">
                                  </div>
                                  <div class="form-group">
                                    <label for="Celular">Celular</label>
                                    <input type="text" class="form-control" name="Celular" value="{{ $item->Celular }}" placeholder="Celular">
                                  </div>
                                  <div class="form-group">
                                    <label for="Sexo">Sexo</label>
                                    <input type="text" class="form-control" name="Sexo" value="{{ $item->Sexo }}" placeholder="Sexo">
                                  </div>
                                  <div class="form-group">
                                    <label for="Archivo">Archivo</label>
                                    <input type="text" class="form-control" name="Archivo" value="{{ $item->Archivo }}" placeholder="Archivo">
                                  </div>
                                  <div class="form-group">
                                    <label for="Reparticion">Reparticion</label>
                                    <input type="text" class="form-control" name="Reparticion" value="{{ $item->Reparticion }}" placeholder="Reparticion">
                                  </div>
                                </div>
                                <div class="card-footer">
                                  <button class="btn btn-warning">Editar</button>
                                  {{-- <button type="submit" class="btn btn-warning">Editar</button>
                                  <button type="submit" class="btn btn-danger">Eliminar</button> --}}
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </div>
@stop
