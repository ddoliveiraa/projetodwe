<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCadeirasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user__cadeiras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_cadeira')->references('id')->on('cadeiras')->onDelete('cascade');
            $table->foreignId('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('isAdmin');
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
        Schema::dropIfExists('user__cadeiras');
    }
}
