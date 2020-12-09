<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drivers')->insert([
            'name' => 'user driver' . Str::random(3),
            'driver_license' => rand(),
        ]);
        DB::table('drivers')->insert([
            'name' => 'user driver' . Str::random(3),
            'driver_license' => rand(),
        ]);
    }
}
