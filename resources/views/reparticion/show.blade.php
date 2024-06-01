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
                                <h2> Ver Tipo Reparticion</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('Reparticion.index') }}">Volver</a>
                            </div>
                            <div class="card-body">
                                
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Reparticion:</strong>
                                        {{ $items->Reparticion }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Codigo:</strong>
                                        {{ $items->Codigo }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Responsable:</strong>
                                        {{ $items->Responsable }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Descripcion:</strong>
                                        {{ $items->Descripcion }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>DepDocId:</strong>
                                        {{ $items->DepDocId }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Lugar:</strong>
                                        {{ $items->Lugar }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Latitud:</strong>
                                        {{ $items->Latitud }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Longitud:</strong>
                                        {{ $items->Longitud }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>TipoReparticion:</strong>
                                        {{ $items->TipoReparticion }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>UnidadSup:</strong>
                                        {{ $items->UnidadSup }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>UnidadSupParte:</strong>
                                        {{ $items->UnidadSupParte }}
                                    </div>
                                </div>                             
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@stop
