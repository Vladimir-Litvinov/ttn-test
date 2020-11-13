<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FailedJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('failed_jobs')->insert([
            'id' => 1,
            'connection' => 'связь',
            'queue' => 'очередь',
            'payload' => 'полезная нагрузка',
            'exception' => 'исключение',
        ]);
        DB::table('failed_jobs')->insert([
            'id' => 2,
            'connection' => 'связь1',
            'queue' => 'очередь1',
            'payload' => 'полезная нагрузка1',
            'exception' => 'исключение1',
        ]);
    }
}
