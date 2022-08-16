<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContenidoPagina extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Contenido_Pagina', function (Blueprint $table) {
            $table->string('menu',100);
            $table->string('seccion',100);
            $table->string('titulo',150)->nullable();
            $table->mediumText('descripcion')->nullable();
            $table->string('texto',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
