<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'     => 'Shajib Hasan',
                'email'    => 'mdshajib1@gmail.com',
                'phone'    => '01781557594',
                'status'   => 1,
                'password' => 'shajib',
                'role'     => 'Super Admin'
            ],
            [
                'name'     => 'Dina Hasan',
                'email'    => 'dina@gmail.com',
                'phone'    => '01781557593',
                'status'   => 1,
                'password' => 'dina',
                'role'     => 'Admin'
            ],
            [
                'name'     => 'Diba Hasan',
                'email'    => 'dina@gmail.com',
                'phone'    => '01781557596',
                'status'   => 1,
                'password' => 'diba',
                'role'     => 'Stuff'
            ],
            [
                'name'     => 'Viewer',
                'email'    => 'viewer@gmail.com',
                'phone'    => '01781557597',
                'status'   => 1,
                'password' => 'viewer',
                'role'     => 'Viewer'
            ]
        ];

        foreach ($users as $user){
            $role = $user['role'];
            unset($user['role']);
            $user = User::updateOrCreate(['email' => $user['email']], $user );
            $user->assignRole($role);
        }
    }
}
