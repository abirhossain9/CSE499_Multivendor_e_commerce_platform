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
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('ip_address')->nullable();
            $table->string('name');
            $table->string('phone_no');
            $table->string('email')->nullable();
            $table->string('shipping_address');
            $table->text('message')->nullable();
            $table->boolean('is_paid')->default(0);
            $table->boolean('is_complete')->default(0);
            $table->boolean('seen_by_admin')->default(0);

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
