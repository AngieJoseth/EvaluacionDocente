<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-teacher-eval')->create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('ignug.teachers');
            $table->foreignId('state_id')->constrained('ignug.states');
            //$table->integer('percentage')->nullable()->comment('Este porcentaje se tomara de la tabla evaluations types'); 
            //este campos lo manejaremos en el reporte Sr.Ronquillo
            $table->double('result',5,2)->nullable();
            $table->foreignId('evaluation_type_id')->comment('pares, autoevaluacion,estudiante')->constrained();


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
        Schema::dropIfExists('evaluations');
    }
}
