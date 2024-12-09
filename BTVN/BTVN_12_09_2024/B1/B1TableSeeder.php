<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class B1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('libraries')->insert([
            'name' => 'Thư viện IT Đại học ABC 2',
            'addtess'=> '123 Đường X, Hà Nội 2',
            'contect_number' => '01234567891'
        ]);

        DB::table('books')->insert([
            'title' => 'Clean code 2',
            'author' => 'Robert C.Martin',
            'publication_year' => 2008,
            'genre' => 'Programming',
            'library_id' => 1
        ]);
    }
}
