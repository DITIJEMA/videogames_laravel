<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderMTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_m', function(Blueprint $table){
            $table->unsignedBigInteger('id_pedido');
            $table->unsignedBigInteger('id_videojuego');
            $table->timestamps();

            $table->foreign('id_pedido')->references('id')->on('pedido');
            $table->foreign('id_videojuego')->references('id')->on('videogame');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_m');
    }
}
