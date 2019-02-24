<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineas', function (Blueprint $table) {
            $table->increments('id');
            //$table->timestamps();

            $table->integer('cantidad')->unsigned();
            $table->float('precio',8,2);

            $table -> integer('pedido_id')->unsigned();
            $table -> foreign('pedido_id')->references('id')->on('pedidos');

            $table -> integer('producto_id')->unsigned();
            $table -> foreign('producto_id')->references('id')->on('productos');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lineas');
    }
}
