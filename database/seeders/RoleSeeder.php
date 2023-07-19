<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /* $admin = Role::create(['name' => 'Admin']);
        $cliente = Role::create(['name' => 'Cliente']);

        Permission::create(['name' => 'login'])->syncRoles([$admin, $cliente]);

        Permission::create(['name' => 'users.index'])->syncRoles([$admin]); */

    }
}
