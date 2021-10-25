<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim' => '2031710068',
            'name' => 'Faiza Nur Abida',
            'class' => 'MI 2F',
            'department' => 'JTI-MI',
            'phone_number' => '085853957585',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710177',
            'name' => 'Ghulam Al-Fakhri',
            'class' => 'MI 2F',
            'department' => 'JTI-MI',
            'phone_number' => '085774639273',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710034',
            'name' => 'Jihan Rahadatul Aisy',
            'class' => 'MI 2F',
            'department' => 'JTI-MI',
            'phone_number' => '082738461946',
        ]);
    }
}