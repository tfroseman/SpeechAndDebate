<?php

use Illuminate\Database\Seeder;
use App\Http\Utilities;

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
            'grade' => Utilities\Grade::all()[rand(0,6)],
            'category' => Utilities\Categories::all()[rand(0,18)],
            'accountID' => 1,
        ]);
}
}
