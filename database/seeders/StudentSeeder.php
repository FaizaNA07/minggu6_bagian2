<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            'phone_number' => '0858-5395-7585',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710177',
            'name' => 'Ghulam Al Fakhri',
            'class' => 'MI 2F',
            'department' => 'JTI-MI',
            'phone_number' => '0857-4556-9538',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710034',
            'name' => 'Jihan Rahadatul Aisy',
            'class' => 'MI 2F',
            'department' => 'JTI-MI',
            'phone_number' => '0813-8425-6211',
        ]);
    }
}
