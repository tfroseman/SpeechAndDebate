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
            'name' => str_random(7),
            'grade' => rand(1,6),
            'category' => rand(1,19),
            'accountID' => rand(1,2),
        ]);
}
}
