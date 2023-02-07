<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states_sql = realpath(__DIR__.'../catalogs/states.sql');
        DB::unprepared(file_get_contents($states_sql));
    }
}
