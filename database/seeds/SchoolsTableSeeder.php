<?php

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->insert([
            'id' => '1',
            'name' => 'Mercer Area Jr. Sr.',
            'email' => 'test@gmail.com',
        ]);

        DB::table('schools')->insert([
            'id' => '1',
            'name' => 'Mercer Area Jr. Sr.',
            'email' => 'somewhere@gmail.com',
        ]);

        DB::table('schools')->insert([
            'id' => '2',
            'name' => 'Another Place',
            'email' => 'whowhat@gmail.com',
        ]);
    }
}
