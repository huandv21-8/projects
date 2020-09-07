<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('id_order');
            $table->unsignedBigInteger('id_employee');
            $table->unsignedBigInteger('id_customer');
            $table->double('total_money');
            $table->string('status', 20);
            $table->string('commune', 30)->unique();
            $table->string('district', 30)->unique();
            $table->string('city', 30)->unique();
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
        Schema::dropIfExists('orders');
    }
}
