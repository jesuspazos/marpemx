<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Imagenes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Imagen', function (Blueprint $table) {
            $table->increments('idImagen');
            $table->string('nombre',250);
            $table->string('descripcion',255);
            $table->string('rutaImagen',255);            
            $table->string('tipo_user');
            $table->boolean('activo')->default(0);             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('Imagen');
    }
}
