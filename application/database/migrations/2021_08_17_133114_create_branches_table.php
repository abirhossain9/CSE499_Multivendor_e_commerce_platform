<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('bangla_name')->nullable();
            $table->string('slug');
            $table->string('address_line1')->nullable();
            $table->string('address_line2')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();

            $table->string('status')->default(1)->comment('1 = Active, 2 = Inactive');

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
        Schema::dropIfExists('branches');
    }
}
