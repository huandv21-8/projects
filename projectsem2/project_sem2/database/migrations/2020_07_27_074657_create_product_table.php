<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user');
            $table->id('id_product');
            $table->unsignedBigInteger('id_category');
            $table->string('name_product', 100);
            $table->integer('Inventory_number'); // so luong ton kho
            $table->integer('Inventory_sold'); // so luong da ban
            $table->longText('describe');
            $table->double('price');
            $table->text('image');
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_category')->references('id_category')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
