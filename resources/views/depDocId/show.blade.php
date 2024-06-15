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
                                <h2> Ver DEPARTAMENTOS</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('DepDocId.index') }}"> Volver</a>
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
                                        <strong>DepDocId:</strong>
                                        {{ $items->DepDocId }}
                                    </div>
                                </div>


                        
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>DepDocIdDescripcion:</strong>
                                        {{ $items->DepDocIdDescripcion }}
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