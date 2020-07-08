<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetailSpacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retail_spaces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 10);
            $table->string('area', 20)->nullable();
            $table->integer('area_in_squared_meters')->nullable();
            $table->boolean('rented');
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
        Schema::dropIfExists('retail_spaces');
    }
}
