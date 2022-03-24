<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        $roles = [
            'Super Admin',
            'Admin',
            'Stuff',
            'Viewer'
        ];

        foreach ($roles as $role){
            Role::updateOrCreate(['name' => $role],['name' => $role]);
        }
    }
}
