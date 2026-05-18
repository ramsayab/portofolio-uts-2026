<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = Role::firstOrCreate(['name' => 'super_admin']);
        Role::firstOrCreate(['name' => 'user']);

        $permissions = [
            'view_laporan',
            'view_any_laporan',
            'create_laporan',
            'update_laporan',
            'delete_laporan',
            'delete_any_laporan',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $superAdmin->givePermissionTo($permissions);
    }
}
