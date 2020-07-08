<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Edouard UZNANSKI',
            'email' => 'edouard.uznanski2019@campus-eni.fr',
            'password' => bcrypt('stages'),
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('users')->insert([
            'name' => 'Sylvain LANGER',
            'email' => 'sylvain.langer2019@campus-eni.fr',
            'password' => bcrypt('stages'),
            'created_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
