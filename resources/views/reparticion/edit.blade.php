@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Reparticion</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">Reparticion</p>
                </div>
            </div>
            <section class="content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-primary">
                              <div class="card-header">
                                <h3 class="card-title">Tipo de Reparticion</h3>
                              </div>
                              <form action="{{ route('Reparticion.update',$item->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                  
                                  <div class="form-group">
                                    <label for="Reparticion">Reparticion</label>
                                    <input type="text" class="form-control" value="{{ $item->Reparticion }}" name="Reparticion" placeholder="Reparticion">
                                  </div>
                                  <div class="form-group">
                                    <label for="Codigo">Codigo</label>
                                    <input type="text" class="form-control" value="{{ $item->Codigo }}" name="Codigo" placeholder="Codigo">
                                  </div>
                                  <div class="form-group">
                                    <label for="Responsable">Responsable</label>
                                    <input type="text" class="form-control" value="{{ $item->Responsable }}" name="Responsable" placeholder="Responsable">
                                  </div>
                                  <div class="form-group">
                                    <label for="Descripcion">Descripcion</label>
                                    <input type="text" class="form-control" value="{{ $item->Descripcion }}" name="Descripcion" placeholder="Descripcion">
                                  </div>
                                  <div class="form-group">
                                    <label for="DepDocId">DepDocId</label>
                                    <input type="text" class="form-control" value="{{ $item->DepDocId }}" name="DepDocId" placeholder="DepDocId">
                                  </div>
                                  <div class="form-group">
                                    <label for="Lugar">Lugar</label>
                                    <input type="text" class="form-control" value="{{ $item->Lugar }}" name="Lugar" placeholder="Lugar">
                                  </div>
                                  <div class="form-group">
                                    <label for="Latitud">Latitud</label>
                                    <input type="text" class="form-control" value="{{ $item->Latitud }}" name="Latitud" placeholder="Latitud">
                                  </div>
                                  <div class="form-group">
                                    <label for="Longitud">Longitud</label>
                                    <input type="text" class="form-control" value="{{ $item->Longitud }}" name="Longitud" placeholder="Longitud">
                                  </div>
                                  <div class="form-group">
                                    <label for="TipoReparticion">TipoReparticion</label>
                                    <input type="text" class="form-control" value="{{ $item->TipoReparticion }}" name="TipoReparticion" placeholder="TipoReparticion">
                                  </div>
                                  <div class="form-group">
                                    <label for="UnidadSup">UnidadSup</label>
                                    <input type="text" class="form-control" value="{{ $item->UnidadSup }}" name="UnidadSup" placeholder="UnidadSup">
                                  </div>
                                  <div class="form-group">
                                    <label for="UnidadSupParte">UnidadSupParte</label>
                                    <input type="text" class="form-control" value="{{ $item->UnidadSupParte }}" name="UnidadSupParte" placeholder="UnidadSupParte">
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
