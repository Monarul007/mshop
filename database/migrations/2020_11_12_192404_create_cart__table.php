<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pid');
            $table->foreign('pid')->references('id')->on('products');
            $table->string('pname');
            $table->string('image')->nullable();
            $table->string('code')->nullable();
            $table->string('color')->nullable();
            $table->string('weight')->nullable();
            $table->decimal('price', 8, 2);
            $table->integer('quantity');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('user_email')->nullable();
            $table->string('user_phone')->nullable();
            $table->string('session_id');
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
        Schema::dropIfExists('cart_');
    }
}
