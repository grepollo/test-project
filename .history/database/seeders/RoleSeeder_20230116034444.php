<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'edit media']);
        Permission::create(['name' => 'delete media']);
        Permission::create(['name' => 'create media']);
        Permission::create(['name' => 'view media']);

        Permission::create(['name' => 'edit user']);
        Permission::create(['name' => 'delete user']);
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'view user']);
        
        $role = Role::create(['name' => 'Standard'])
            ->givePermissionTo(['create media']);
        
        $role = Role::create(['name' => 'Admin'])
            ->givePermissionTo(Permission::all());
        

    }
}
