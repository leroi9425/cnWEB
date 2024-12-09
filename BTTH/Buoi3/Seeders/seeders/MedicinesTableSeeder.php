<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('medicines')->insert([
            'name' => 'diamond',
            'brand' => 'WHO',
            'dosage' => '10mg',
            'form' => 'viên nén',
            'price' => 10000,
            'stock' => 10
        ]);
        DB::table('sales')->insert([
            'medicine_id' => 1,
            'quantity' => 10,
            'sale_date' => '2024-1-2',
            'customer_phone' => '03414224'
        ]);
    }
}
