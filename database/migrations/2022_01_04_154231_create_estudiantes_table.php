<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            
            $table->engine ="InnoDB";
            $table->bigIncrements('estudiante_id');  
            $table->string('estudiante_nombre');
            $table->string('estudiante_apellido'); 
            $table->bigInteger('estudiante_carrera')->unsigned();             
            $table->timestamps();

              // Relación
            $table->foreign('estudiante_carrera')->references('carrera_id')->on('carreras')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
}
