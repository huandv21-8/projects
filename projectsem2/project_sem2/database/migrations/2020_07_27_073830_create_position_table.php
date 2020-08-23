<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('position', function (Blueprint $table) {
            $table->id('id_position');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_roles',);

            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_roles')->references('id_roles')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('position');
    }
}
