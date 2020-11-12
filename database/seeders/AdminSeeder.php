<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\Models\User();
        $admin->email = 'admin@admin.com';
        $admin->name = 'admin';
        $admin->role = 'ADMIN';
        $admin->password = \Illuminate\Support\Facades\Hash::make('123456');
        $admin->save();

        $user = new \App\Models\User();
        $user->email = 'user@user.com';
        $user->name = 'user';
        $user->role = 'USER';
        $user->password = \Illuminate\Support\Facades\Hash::make('123456');
        $user->save();


    }
}