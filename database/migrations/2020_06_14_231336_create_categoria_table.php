<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Categoria', function (Blueprint $table) {
            $table->increments('idCategoria');
            $table->string('nombre',250);
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
        Schema::table('Categoria', function (Blueprint $table) {
            Schema::dropIfExists('users');
        });
    }
}
