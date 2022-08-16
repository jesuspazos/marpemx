<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelProductoImagen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rel_producto_imagen', function (Blueprint $table) {
            $table->increments('idProductoImagen');
            $table->integer('idProducto')->unsigned();
            $table->integer('idImagen')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('Rel_producto_imagen');
    }
}
