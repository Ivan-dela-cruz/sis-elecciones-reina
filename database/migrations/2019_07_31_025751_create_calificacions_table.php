<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_candidata')->unsigned();
            $table->integer('id_jurado')->unsigned();
            $table->float('inicial')->nullable();
            $table->float('gala')->nullable();
            $table->float('pregunta')->nullable();
            $table->timestamps();

            $table->foreign('id_candidata')->references('id')->on('candidatas')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_jurado')->references('id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calificacions');
    }
}
