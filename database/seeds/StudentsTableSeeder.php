<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' => 'Thomas R',
            'grade' => '8',
            'category'=>'Prose'
        ]);

        DB::table('students')->insert([
            'name' => 'Andy R',
            'grade' => '12',
            'category' => 'Duo Interp',
        ]);
    }
}
