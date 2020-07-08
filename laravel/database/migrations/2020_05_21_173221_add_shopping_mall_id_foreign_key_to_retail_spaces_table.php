<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddShoppingMallIdForeignKeyToRetailSpacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('retail_spaces', function (Blueprint $table) {
            $table->integer('shopping_mall_id')->unsigned()->nullable();
            $table->foreign('shopping_mall_id')->references('id')->on('shopping_malls');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('retail_spaces', function (Blueprint $table) {
            $table->dropForeign('retail_spaces_shopping_mall_id_foreign');
            $table->dropColumn('shopping_mall_id');
        });
    }
}
