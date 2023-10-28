<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
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
        $roles = ['admin', 'manager', 'staff', 'residents'];
        foreach ($roles as $key => $value) {
            Role::create(['name' => $value, 'guard_name' => $value = 'admin' ? 'admin' : ($value = 'staff' ? 'staff' : 'web')]);
        }
    }
}
