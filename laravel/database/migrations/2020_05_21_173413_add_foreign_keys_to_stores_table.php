<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stores', function (Blueprint $table) {
            $table->integer('shopping_mall_id')->unsigned();
            $table->integer('retail_space_id')->unsigned()->nullable();
            $table->integer('product_id')->unsigned()->nullable();
            $table->foreign('shopping_mall_id')->references('id')->on('shopping_malls');
            $table->foreign('retail_space_id')->references('id')->on('retail_spaces');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stores', function (Blueprint $table) {
            $table->dropForeign('stores_shopping_mall_id_foreign');
            $table->dropForeign('stores_retail_space_id_foreign');
            $table->dropForeign('stores_product_id_foreign');
            $table->dropColumn('shopping_mall_id');
            $table->dropColumn('retail_space_id');
            $table->dropColumn('product_id');
        });
    }
}
