@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">DEPARTAMENTOS</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">DEPARTAMENTOS</p>
                </div>
            </div>
            <section class="content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-primary">
                              <div class="card-header">
                                <h3 class="card-title">DEPARTAMENTOS</h3>
                              </div>
                              <form action="{{ route('DepDocId.store') }}" method="POST">
                                @csrf
                                <div class="card-body">


                                  <div class="form-group">
                                    <label for="Num">NUMERO</label>
                                    <input type="text" class="form-control" name="Num" placeholder="Num">
                                  </div>
                                  <div class="form-group">
                                    <label for="DepDocId">DepDocId</label>
                                    <input type="text" class="form-control" name="DepDocId" placeholder="DepDocId">
                                  </div>
                                  <div class="form-group">
                                    <label for="DepDocIdDescripcion">DepDocIdDescripcion</label>
                                    <input type="text" class="form-control" name="DepDocIdDescripcion" placeholder="DepDocIdDescripcion">
                                  </div>
                                  

                                </div>

                                <div class="card-footer">
                                  <button class="btn btn-primary">Agregar</button>
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