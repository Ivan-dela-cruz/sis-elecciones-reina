<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',120);
            $table->string('apellido',120);
            $table->string('barrio',120);
            $table->integer('edad')->unsigned();
            $table->string('foto',220);
            $table->string('estado',20)->default('activo');
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
        Schema::dropIfExists('candidatas');
    }
}
