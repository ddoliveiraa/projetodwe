<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoaulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videoaulas', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->bigInteger('id_disciplina');
            $table->String('nome');
            $table->String('descricao');
            $table->String('url');
            $table->foreignId('id_cadeira');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videoaulas');
    }
}
