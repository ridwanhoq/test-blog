<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities_sql = realpath(__DIR__.'../catalogs/cities.sql');
        DB::unprepared(file_get_contents($cities_sql));
    }
}
