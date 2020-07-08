<?php

use Illuminate\Database\Seeder;

class ShoppingMallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shopping_malls')->insert([
            'name' => 'Centre Commercial LECLERC OCEANE',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
