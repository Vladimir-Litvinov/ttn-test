<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->insert([
            'firm' => 'Enot Company',
            'code' => '123',
            'responsible_person' => 'Enot'
        ]);
        DB::table('partners')->insert([
            'firm' => 'Ron Company',
            'code' => '123',
            'responsible_person' => 'Ron'
        ]);
        DB::table('partners')->insert([
            'firm' => 'Kort Company',
            'code' => '123',
            'responsible_person' => 'Kort'
        ]);
    }
}
