<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Beauté - Soins esthétique',
            'color' => '#68BC00',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('products')->insert([
            'name' => 'Loisirs - Cadeaux maison',
            'color' => '#0062B1',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('products')->insert([
            'name' => 'Mode',
            'color' => '#604FE9',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('products')->insert([
            'name' => 'Services',
            'color' => '#50F5ED',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('products')->insert([
            'name' => 'Restauration',
            'color' => '#F44E3B',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('products')->insert([
            'name' => 'Autres',
            'color' => '#808080',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
