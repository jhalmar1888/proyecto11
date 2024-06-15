@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">TIPO ARCHIVO</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">TIPO ARCHIVO</p>
                </div>
            </div>
            <section class="content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-primary">
                              <div class="card-header">
                                <h3 class="card-title">Tipo Archivo</h3>
                              </div>
                              <form action="{{ route('TipoArchivo.update',$item->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">

                                  <div class="form-group">
                                    <label for="TipoArchivo">Tipo Archivo</label>
                                    <input type="text" class="form-control" value="{{ $item->TipoArchivo }}" name="TipoArchivo" placeholder="TipoArchivo">
                                  </div>

                                  <div class="form-group">
                                    <label for="Descripcion">Descripcion</label>
                                    <input type="text" class="form-control" value="{{ $item->Descripcion }}"  name="Descripcion" placeholder="Descripcion">
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
