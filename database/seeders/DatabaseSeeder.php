<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\Admin;
use App\Models\Staff;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(150)->create();
        Staff::factory(50)->create();
        Admin::factory(20)->create();

        $admins = Admin::all('id');
        $staffs = Staff::all('id');
        $users = User::all('id');

        $role_admin = Role::where('name', 'admin')->first();
        $role_staff = Role::where('id', 3)->first();
        $resident = Role::where('name', 'residents')->first();

        foreach ($admins as $key => $admin) {
            $admin->assignRole($role_admin->name);
        }
        foreach ($staffs as $key => $staff) {
            $staff->assignRole($role_staff->id);
        }
        foreach ($users as $key => $user) {
            $user->assignRole($resident->name);
        }
    }
}
