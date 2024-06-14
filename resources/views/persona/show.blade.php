@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<<<<<<< HEAD
    <h1 class="m-0 text-dark">Persona</h1>
=======
    <h1 class="m-0 text-dark">TIPO LICENCIA</h1>
>>>>>>> 805e43479cc6b27115825b87b27e584d17206120
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
<<<<<<< HEAD
                    <p class="mb-0">Persona</p>
=======
                    <p class="mb-0">TIPO LICENCIA</p>
>>>>>>> 805e43479cc6b27115825b87b27e584d17206120
                </div>
            </div>
            <section class="content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
<<<<<<< HEAD
                                <h2> Ver Persona</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('Persona.index') }}"> Volver</a>
=======
                                <h2> Ver Tipo Licencia</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('TipoLicencia.index') }}"> Volver</a>
>>>>>>> 805e43479cc6b27115825b87b27e584d17206120
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
<<<<<<< HEAD
                                        <strong>Gerencia:</strong>
                                        {{ $items->Gerencia }}
                                    </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Rol:</strong>
                                        {{ $items->Rol }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Apellido Paterno:</strong>
                                        {{ $items->Apellido Paterno }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Apellido Materno:</strong>
                                        {{ $items->Apellido Materno }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nombres:</strong>
                                        {{ $items->Nombres }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Persona:</strong>
                                        {{ $items->Persona }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Fotografia:</strong>
                                        {{ $items->Fotografia }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Ci:</strong>
                                        {{ $items->Ci }}
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
                                        <strong>Grado:</strong>
                                        {{ $items->Grado }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Arma:</strong>
                                        {{ $items->Arma }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Especialidad:</strong>
                                        {{ $items->Especialidad }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Cargo:</strong>
                                        {{ $items->Cargo }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Tipo Licencia:</strong>
                                        {{ $items->Tipo Licencia }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Profesion:</strong>
                                        {{ $items->Profesion }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Celular:</strong>
                                        {{ $items->Celular }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Sexo:</strong>
                                        {{ $items->Sexo }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Archivo:</strong>
                                        {{ $items->Archivo }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Reparticion:</strong>
                                        {{ $items->Reparticion }}
                                    </div>
                                </div>
=======
                                        <strong>TipoLicencia:</strong>
                                        {{ $items->TipoLicencia }}
                                    </div>
>>>>>>> 805e43479cc6b27115825b87b27e584d17206120
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@stop
