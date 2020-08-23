<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->integer('age')->nullable();
            $table->string('gender',10)->nullable();
            $table->string('phone',10)->nullable();
            $table->string('identity_cart')->nullable();
            $table->string('wards')->nullable();
            $table->string('district')->nullable();;
            $table->string('city')->nullable();;
            $table->string('email',100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->longText('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
