<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musicos_grupos', function (Blueprint $table) {
            $table->id();
            $table->string('instrumento');
            $table->date('fechainicio');
            $table->date('fechafin');
            $table->unsignedBigInteger('grupo_id');
            $table->unsignedBigInteger('musico_id');
            $table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('cascade');
            $table->foreign('musico_id')->references('id')->on('musicos')->onDelete('cascade');
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
        Schema::dropIfExists('musicos_grupos');
    }
};
