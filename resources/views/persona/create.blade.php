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
                                <h3 class="card-title">Persona</h3>
                              </div>
                              <form action="{{ route('Persona.store') }}" method="POST">
                                @csrf
                                <div class="card-body">







                                  <div class="form-group">
                                   <label for="Gerencia">Gerencia</label>
                                   <input type="text" class="form-control" name="Gerencia" placeholder="Gerencia">
                                  </div>


                                  <div class="form-group">
                                    <label for="Rol">Rol</label>
                                    <input type="text" class="form-control" name="Rol" placeholder="Rol">
                                  </div>


                                  <div class="form-group">
                                    <label for="ApellidoPaterno">ApellidoPaterno</label>
                                    <input type="text" class="form-control" name="ApellidoPaterno" placeholder="Apellido Paterno">
                                  </div>


                                  <div class="form-group">
                                    <label for="ApellidoMaterno">ApellidoMaterno</label>
                                    <input type="text" class="form-control" name="ApellidoMaterno" placeholder="Apellido Materno">
                                  </div>


                                  <div class="form-group">
                                    <label for="Nombres">Nombres</label>
                                    <input type="text" class="form-control" name="Nombres" placeholder="Nombres">
                                  </div>


                                  <div class="form-group">
                                    <label for="Persona">Persona</label>
                                    <input type="text" class="form-control" name="Persona" placeholder="Persona">
                                  </div>


                                  <div class="form-group">
                                    <label for="Fotografia">Fotografia</label>
                                    <input type="text" class="form-control" name="Fotografia" placeholder="Fotografia">
                                  </div>


                                  <div class="form-group">
                                    <label for="Ci">Ci</label>
                                    <input type="text" class="form-control" name="Ci" placeholder="Ci">
                                  </div>


                                  <div class="form-group">
                                    <label for="DepDocId">DepDocId</label>
                                    <input type="text" class="form-control" name="DepDocId" placeholder="DepDocId">
                                  </div>


                                  <div class="form-group">
                                    <label for="Grado">Grado</label>
                                    <input type="text" class="form-control" name="Grado" placeholder="Grado">
                                  </div>


                                  <div class="form-group">
                                    <label for="Arma">Arma</label>
                                    <input type="text" class="form-control" name="Arma" placeholder="Arma">
                                  </div>


                                  <div class="form-group">
                                    <label for="Especialidad">Especialidad</label>
                                    <input type="text" class="form-control" name="Especialidad" placeholder="Especialidad">
                                  </div>


                                  <div class="form-group">
                                    <label for="Cargo">Cargo</label>
                                    <input type="text" class="form-control" name="Cargo" placeholder="Cargo">
                                  </div>


                                  <div class="form-group">
                                    <label for="TipoLicencia">TipoLicencia</label>
                                    <input type="text" class="form-control" name="TipoLicencia" placeholder="Tipo de Licencia">
                                  </div>


                                  <div class="form-group">
                                    <label for="Profesion">Profesion</label>
                                    <input type="text" class="form-control" name="Profesion" placeholder="Profesion">
                                  </div>


                                  <div class="form-group">
                                    <label for="Celular">Celular</label>
                                    <input type="text" class="form-control" name="Celular" placeholder="Celular">
                                  </div>


                                  <div class="form-group">
                                    <label for="Sexo">Sexo</label>
                                    <input type="text" class="form-control" name="Sexo" placeholder="Sexo">
                                  </div>


                                  <div class="form-group">
                                    <label for="Archivo">Archivo</label>
                                    <input type="text" class="form-control" name="Archivo" placeholder="Archivo">
                                  </div>


                                  <div class="form-group">
                                    <label for="Reparticion">Reparticion</label>
                                    <input type="text" class="form-control" name="Reparticion" placeholder="Reparticion">
                                  </div>
                                </div>
=======
                                <h3 class="card-title">Tipo Licencia</h3>
                              </div>
                              <form action="{{ route('TipoLicencia.store') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                  <div class="form-group">
                                    <label for="Num">Num</label>
                                    <input type="text" class="form-control" name="Num" placeholder="Numero">
                                  </div>
                                  <div class="form-group">
                                    <label for="TipoLicencia">Tipo Licencia</label>
                                    <input type="text" class="form-control" name="TipoLicencia" placeholder="Tipo de Licencia">
                                  </div>
                                  <div class="form-group">
                                    <label for="TipoLicencia">Tipo Licencia</label>
                                    <input type="text" class="form-control" name="TipoLicencia" placeholder="Tipo de Licencia">
                                  </div>
                                  <div class="form-group">
                                    <label for="TipoLicencia">Tipo Licencia</label>
                                    <input type="text" class="form-control" name="TipoLicencia" placeholder="Tipo de Licencia">
                                  </div>
                                  <div class="form-group">
                                    <label for="TipoLicencia">Tipo Licencia</label>
                                    <input type="text" class="form-control" name="TipoLicencia" placeholder="Tipo de Licencia">
                                  </div>
                                  <div class="form-group">
                                    <label for="TipoLicencia">Tipo Licencia</label>
                                    <input type="text" class="form-control" name="TipoLicencia" placeholder="Tipo de Licencia">
                                  </div>
                                  <div class="form-group">
                                    <label for="TipoLicencia">Tipo Licencia</label>
                                    <input type="text" class="form-control" name="TipoLicencia" placeholder="Tipo de Licencia">
                                  </div>
                                  <div class="form-group">
                                    <label for="TipoLicencia">Tipo Licencia</label>
                                    <input type="text" class="form-control" name="TipoLicencia" placeholder="Tipo de Licencia">
                                  </div>
                                  <div class="form-group">
                                    <label for="TipoLicencia">Tipo Licencia</label>
                                    <input type="text" class="form-control" name="TipoLicencia" placeholder="Tipo de Licencia">
                                  </div>
                                  <div class="form-group">
                                    <label for="TipoLicencia">Tipo Licencia</label>
                                    <input type="text" class="form-control" name="TipoLicencia" placeholder="Tipo de Licencia">
                                  </div>
                                  <div class="form-group">
                                    <label for="TipoLicencia">Tipo Licencia</label>
                                    <input type="text" class="form-control" name="TipoLicencia" placeholder="Tipo de Licencia">
                                  </div>
                                </div>

>>>>>>> 805e43479cc6b27115825b87b27e584d17206120
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
