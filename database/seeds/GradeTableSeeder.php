<?php

use Illuminate\Database\Seeder;

class GradeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=7;$i<=12; $i++){
            DB::table('grades')->insert([
                'grade' => $i,
            ]);
        }
    }
}
