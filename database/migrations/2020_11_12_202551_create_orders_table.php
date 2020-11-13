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
            $table->id();
            $table->string('order_no')->unique();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->string('order_note')->nullable();
            $table->decimal('total', 8, 2);
            $table->decimal('delivery_charge', 8, 2);
            $table->decimal('vat', 8, 2)->nullable();
            $table->decimal('tax', 8, 2)->nullable();
            $table->decimal('discount', 8, 2)->nullable();
            $table->decimal('grand_total', 11, 2);
            $table->string('shipping_name')->nullable();
            $table->string('shipping_address')->nullable();
            $table->string('shipping_email')->nullable();
            $table->string('shipping_phone')->nullable();
            $table->string('pay_method');
            $table->string('pay_status')->nullable();
            $table->string('ship_method');
            $table->date('order_date');
            $table->date('confirm_date')->nullable();
            $table->date('retured_date')->nullable();
            $table->date('shipped_date')->nullable();
            $table->date('delivered_date')->nullable();
            $table->date('cancel_date')->nullable();
            $table->tinyInteger('status');
            $table->tinyInteger('is_paid')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
