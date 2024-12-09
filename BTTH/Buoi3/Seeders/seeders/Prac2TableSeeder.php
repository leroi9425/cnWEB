<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Prac2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $arrclass = [
            ['grade' => 'Pre-k', 'room' => 'aaa'],
            ['grade' => 'Kindergarten', 'room' => 'bbb']
        ];
        //
        $arrstudent = [
            [
                'fname' => 'Nguyen',
                'lname'=> 'Hau',
                'birthday'=> '2000-2-2',
                'paphone' => '0394828',
                'classid' => 1
            ],
            [
                'fname' => 'Nguyen',
                'lname'=> 'Hoa',
                'birthday'=> '2005-2-3',
                'paphone' => '01293283',
                'classid' => 2
            ]
        ];
        
        foreach($arrclass as $value){
            DB::table('classes')->insert([
                'grade_level' => $value['grade'],
                'room_number' => $value['room']
            ]);
        }
        foreach($arrstudent as $value){
            DB::table('students')->insert([
                'first_name' => $value['fname'],
                'last_name' => $value['lname'],
                'date_of_birth'=> $value['birthday'],
                'parent_phone' => $value['paphone'],
                'class_id' => $value['classid']
            ]);
        }   
    }
}
