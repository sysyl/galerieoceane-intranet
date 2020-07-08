<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        Permission::create(['name' => 'all access granted on shopping malls']);
        Permission::create(['name' => 'all access granted on products']);
        Permission::create(['name' => 'all access granted on retail spaces']);
        Permission::create(['name' => 'all access granted on employees']);
        Permission::create(['name' => 'all access granted on store revenues']);
        Permission::create(['name' => 'all access granted on store notes']);
        Permission::create(['name' => 'all access granted on stores']);

        Permission::create(['name' => 'view any shopping malls']);
        Permission::create(['name' => 'view shopping malls']);
        Permission::create(['name' => 'view any products']);
        Permission::create(['name' => 'view products']);
        Permission::create(['name' => 'view any retail spaces']);
        Permission::create(['name' => 'view retail spaces']);
        Permission::create(['name' => 'view any stores']);
        Permission::create(['name' => 'view stores']);
        Permission::create(['name' => 'view any store revenues']);
        Permission::create(['name' => 'view store revenues']);
        Permission::create(['name' => 'view any store notes']);
        Permission::create(['name' => 'view store notes']);
        Permission::create(['name' => 'view any employees']);
        Permission::create(['name' => 'view employees']);

        Permission::create(['name' => 'view TotalRevenuesLastYear']);
        Permission::create(['name' => 'view TotalRevenuesForTheLastTwelveMonths']);
        Permission::create(['name' => 'view TotalRevenuesPerProductForTheLastTwelveMonths']);
        Permission::create(['name' => 'view StoreRevenues']);

        // Create roles and assign created permissions
        $role1 = Role::create(['name' => 'reception-staff'])->givePermissionTo([
            'view any shopping malls',
            'view shopping malls',
            'view any stores',
            'view stores',
            'view any store notes',
            'view store notes',
            'view any employees',
            'view employees',
        ]);

        $role2 = Role::create(['name' => 'business'])->givePermissionTo([
            'all access granted on store revenues',
            'all access granted on store notes',
            'view any shopping malls',
            'view shopping malls',
            'view any retail spaces',
            'view retail spaces',
            'view any products',
            'view products',
            'view any stores',
            'view stores',
            'view any employees',
            'view employees',
            'view TotalRevenuesLastYear',
            'view TotalRevenuesForTheLastTwelveMonths',
            'view TotalRevenuesPerProductForTheLastTwelveMonths',
            'view StoreRevenues',
        ]);

        $role3 = Role::create(['name' => 'data-manager'])->givePermissionTo([
            'all access granted on shopping malls',
            'all access granted on products',
            'all access granted on retail spaces',
            'all access granted on stores',
            'all access granted on store revenues',
            'all access granted on store notes',
            'all access granted on employees',
            'view TotalRevenuesLastYear',
            'view TotalRevenuesForTheLastTwelveMonths',
            'view TotalRevenuesPerProductForTheLastTwelveMonths',
            'view StoreRevenues',
        ]);

        $role4 = Role::create(['name' => 'super-admin']);

        // Create users and assign created roles
        $user = Factory(App\User::class)->create([
            'name' => 'Super Admin',
            'email' => 'infraprod@groupe-dlj.com',
            'password' => bcrypt('secret'),
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        $user->assignRole($role4);

        $user = Factory(App\User::class)->create([
            'name' => 'Anh DAO-DUY',
            'email' => 'a.dao-duy@groupe-dlj.com',
            'password' => bcrypt('password'),
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        $user->assignRole($role2);

        $user = Factory(App\User::class)->create([
            'name' => 'Nathalie ORVETTI',
            'email' => 'n.orvetti@groupe-dlj.com',
            'password' => bcrypt('password'),
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        $user->assignRole($role3);

        $user = Factory(App\User::class)->create([
            'name' => 'Edouard UZNANSKI',
            'email' => 'edouard.uznanski2019@campus-eni.fr',
            'password' => bcrypt('stages'),
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        $user->assignRole($role4);

        $user = Factory(App\User::class)->create([
            'name' => 'Sylvain LANGER',
            'email' => 'sylvain.langer2019@campus-eni.fr',
            'password' => bcrypt('stages'),
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        $user->assignRole($role4);
    }
}
