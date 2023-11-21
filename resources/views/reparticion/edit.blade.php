@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">TIPO LICENCIA</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">TIPO LICENCIA</p>
                </div>
            </div>
            <section class="content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-primary">
                              <div class="card-header">
                                <h3 class="card-title">Reparticion</h3>
                              </div>
                              <form action="{{ route('ReparticionController.update',$item->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                  <div class="form-group">
                                    <label for="Num">Num</label>
                                    <input type="text" class="form-control" value="{{ $item->Num }}"  name="Num" placeholder="Numero">
                                  </div>
                                  <div class="form-group">
                                    <label for="TipoLicencia">Reparticion</label>
                                    <input type="text" class="form-control" value="{{ $item->TipoLicencia }}" name="TipoLicencia" placeholder="Reparticion">
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
