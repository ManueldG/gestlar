<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert(['name' => 'Tecnologie']);

        DB::table('tags')->insert(['name' => 'News']);

        DB::table('tags')->insert(['name' => 'Meteo']);

        DB::table('tags')->insert(['name' => 'Foto']);

    }
}
