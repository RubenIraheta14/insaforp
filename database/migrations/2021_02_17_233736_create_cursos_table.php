<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string( 'nombre',25);
            $table->date( 'inicio');
            $table->date( 'fin');
            $table->text( 'departamento');
            $table->text( 'municipio');
            $table->integer( 'horas');
            $table->text( 'modalidad');
            $table->text( 'tipo_costo');
            $table->text( 'costo');
            $table->integer( 'n_participantes');
            $table->integer( 'n_evaluaciones');
            $table->integer( 'n_contrato');
            $table->integer( 'orden');
            $table->integer( 'orden_bolsa');
            $table->integer( 'item');       
            $table->text( 'programa');
            $table->text( 'facilitador');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
