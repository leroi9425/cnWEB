<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class B4TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('cinemas')->insert([
            'id' => 601,
            'name' => 'CGV Vincom',
            'location' => 'Vincom Center, Hà Nội',
            'total_seats' => 300
        ]);

        DB::table('movies')->insert([
            'id' => 5001,
            'title' => 'Avengers: Endgame',
            'director' => 'Anthony và Joe Russo',
            'release_date' => '2019-04-26',
            'duration' => 181,
            'cinema_id' => 601
        ]);
    }
}
