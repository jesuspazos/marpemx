<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Producto', function (Blueprint $table) {
            $table->increments('idProducto');
            $table->string('nombre',250);
            $table->string('descripcion',255);
            $table->integer('categoria')->unsigned();
            $table->boolean('activo')->default(0);


             /*$table->foreign('categoria')->references('idCategoria')->on('Categorias')
                ->onDelete('cascade')
                ->onUpdate('cascade');*/

            /*$table->foreign('idImagen')->references('idImagen')->on('Imagenes')
                ->onDelete('cascade')
                ->onUpdate('cascade');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Producto');
    }
}
