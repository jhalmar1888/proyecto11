@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Departamento de origen</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">Departamento de origen del Estudiante</p>
                </div>
            </div>
            <section class="content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h2>Departamento de origen</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('departamento.index') }}">Volver</a>
                            </div>
                            <div class="card-body">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Num:</strong>
                                        {{ $items->Num }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>departamento:</strong>
                                        {{ $items->departamento }}
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
