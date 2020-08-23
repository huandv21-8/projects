<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id('id_order');
            $table->unsignedBigInteger('id_employee');
            $table->unsignedBigInteger('id_customer');
            $table->double('total_money');
            $table->string('status', 20);
            $table->string('wards', 30);
            $table->string('district', 30);
            $table->string('city', 30);
            $table->timestamps();

            $table->foreign('id_employee')->references('id')->on('users');
            $table->foreign('id_customer')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
