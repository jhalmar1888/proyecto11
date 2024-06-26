<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Persona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Persona', function (Blueprint $table) {
<<<<<<< HEAD
            $table->increments('id');    // sgto. Villasante 
            $table->integer('Gerencia')->unsigned()->nullable(); 
            $table->integer('Rol')->unsigned()->nullable(); 
=======
            $table->increments('id');
            $table->integer('Num')->unsigned()->nullable();
            $table->integer('Gerencia')->unsigned()->nullable();
            $table->integer('Rol')->unsigned()->nullable();
>>>>>>> 9b41873977db90818e39464b925820aa0fddcfcd
            $table->string('ApellidoPaterno',50)->nullable();
            $table->string('ApellidoMaterno',50)->nullable();
            $table->string('Nombres',50);
            $table->string('Persona',650);
            $table->string('Fotografia',250)->nullable();
            $table->integer('Ci')->nullable();    
            $table->integer('DepDocId')->nullable();
            $table->string('Complemento',20)->nullable();
            $table->integer('Grado')->nullable();
            $table->integer('Arma')->nullable();
            $table->integer('Especialidad')->nullable();
            $table->integer('Cargo')->nullable();
            $table->integer('TipoLicencia')->nullable();
            $table->integer('Profesion')->nullable(); //huallpa
            $table->integer('Celular')->nullable();
            $table->integer('Sexo',10)->nullable();//paco
            $table->integer('Archivo')->nullable();
            $table->integer('Reparticion')->nullable();
           
            /* credenciales de acceso al sistema */
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
            $table->boolean('Activo')->default(false);
            $table->string('TokenLogin')->nullable();
            $table->rememberToken();

            $table->string('api_token', 80)
                ->unique()
                ->nullable()
                ->default(null); 

            // /* campos para login con Office365 */
            // $table->datetime('UltimoInicioSesion')->nullable();
            // $table->string('SocialLogin', 50)->nullable();
            // $table->string('SocialLoginId', 150)->nullable();
            // $table->string('Avatar', 250)->nullable();

            $table->nullableTimestamps();
            $table->SoftDeletes();
            $table->string('CreatorUserName', 250)->nullable();
            $table->string('CreatorFullUserName', 250)->nullable();
            $table->string('CreatorIP', 250)->nullable();
            $table->string('UpdaterUserName', 250)->nullable();
            $table->string('UpdaterFullUserName', 250)->nullable();
            $table->string('UpdaterIP', 250)->nullable();
            $table->string('DeleterUserName', 250)->nullable();
            $table->string('DeleterFullUserName', 250)->nullable();
            $table->string('DeleterIP', 250)->nullable();

<<<<<<< HEAD
            $table->foreign('Gerencia')->references('id')->on('Gerencia');// Siles
            $table->foreign('Rol')->references('id')->on('Rol');// Sgto Lecoña
            $table->foreign('Archivo')->references('id')->on('Archivo');// quispe
            $table->foreign('Reparticion')->references('id')->on('Reparticion');// Costas
            $table->foreign('DepDocId')->references('id')->on('DepDocId');// mamani
            $table->foreign('Arma')->references('id')->on('Arma');// Villca
            $table->foreign('Cargo')->references('id')->on('Cargo');//  Alatamirano
            $table->foreign('Especialidad')->references('id')->on('Especialidad');// Flores
            $table->foreign('Grado')->references('id')->on('Grado');// Fernandez
            $table->foreign('TipoLicencia')->references('id')->on('TipoLicencia');
=======
>>>>>>> 9b41873977db90818e39464b925820aa0fddcfcd

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Persona');
    }
}
