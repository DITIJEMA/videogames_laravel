<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideogameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videojuego', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 30);
            $table->string('desarrolladora', 30);
            $table->string('publicadora', 30);
            $table->date('fecha_estreno');
            $table->string('descripcion');
            $table->string('codigo', 20);
            $table->integer('stock');
            $table->float('precio', 6, 2);
            $table->unsignedBigInteger('id_clasificacion');
            $table->unsignedBigInteger('id_region');
            $table->unsignedBigInteger('id_genero');
            $table->unsignedBigInteger('id_consola');
            $table->timestamps();

            $table->foreign('id_clasificacion')->references('id')->on('clasificacion');
            $table->foreign('id_region')->references('id')->on('region');
            $table->foreign('id_genero')->references('id')->on('genero');
            $table->foreign('id_consola')->references('id')->on('consola');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videojuego');
    }
}
