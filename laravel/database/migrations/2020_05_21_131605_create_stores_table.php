<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 60);
            $table->text('description')->nullable();
            $table->tinyInteger('unit_size');
            $table->boolean('active');
            $table->date('termination_date')->nullable();
            $table->string('phonenumber_1', 20)->nullable();
            $table->string('phonenumber_2', 20)->nullable();
            $table->string('emergency_phonenumber_1', 20)->nullable();
            $table->string('emergency_phonenumber_2', 20)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
