<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ShoppingMallSeeder::class,
            ProductSeeder::class,
            RetailSpaceSeeder::class,
            StoreSeeder::class,
            EmployeeSeeder::class,
            EmployeeStoreSeeder::class,
            RolesAndPermissionsSeeder::class,
        ]);
    }
}
