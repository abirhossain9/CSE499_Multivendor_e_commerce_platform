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
            $table->id();
            $table->string('product_name');
            $table->integer('product_price');
            $table->text('product_description_short');
            $table->text('product_description_long');
            $table->string('slug');
            $table->integer('shop_id');
            $table->string('product_category');
            $table->text('product_image')->nullable();
            $table->integer('product_status')->default(1)->comment('1 = Active, 2 = Inactive');
            $table->integer('product_rating')->nullable();
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
        Schema::dropIfExists('products');
    }
}
