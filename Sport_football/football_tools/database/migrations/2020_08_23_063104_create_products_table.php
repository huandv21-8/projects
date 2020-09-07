<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user');
            $table->id('id_product');
            $table->unsignedBigInteger('id_category');
            $table->string('name_product', 100);
            $table->integer('inventory_number')->unique(); // so luong ton kho
            $table->integer('quantity_sold')->unique(); // so luong da ban
            $table->longText('describe');
            $table->double('price');
            $table->text('image');
            $table->integer('status');
            $table->integer('sale')->unique();
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_category')->references('id_category')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
