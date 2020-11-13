<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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

        DB::table('users')->insert([
            'email' => Str::random(4).'@gmail.com',
            'name' => 'user name' . Str::random(3),
            'role' => 'USER',
            'password' => Hash::make('123456'),
        ]);

        DB::table('users')->insert([
            'email' => Str::random(4).'@gmail.com',
            'name' => 'user name' . Str::random(3),
            'role' => 'USER',
            'password' => Hash::make('123456'),
        ]);

        DB::table('users')->insert([
            'email' => Str::random(4).'@gmail.com',
            'name' => 'user name' . Str::random(3),
            'role' => 'USER',
            'password' => Hash::make('123456'),
        ]);

        DB::table('users')->insert([
            'email' => Str::random(4).'@gmail.com',
            'name' => 'user name' . Str::random(3),
            'role' => 'USER',
            'password' => Hash::make('123456'),
        ]);

        DB::table('users')->insert([
            'email' => Str::random(4).'@gmail.com',
            'name' => 'user name' . Str::random(3),
            'role' => 'USER',
            'password' => Hash::make('123456'),
        ]);

//        $user1 = new \App\Models\User();
//        $user1->email = Str::random(10).'@gmail.com';
//        $user1->name = Str::random(10);
//        $user1->role = 'USER';
//        $user1->password = \Illuminate\Support\Facades\Hash::make('123456');
//        $user1->save();


    }
}
