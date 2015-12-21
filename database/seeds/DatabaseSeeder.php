<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        //$this->call(SchoolsTableSeeder::class);
        //$this->call(UserTableSeeder::class);

        factory(App\Student::class, 8)->create();
        //$this->call(GradeTableSeeder::class);
        //$this->call(CategoriesTableSeeder::class);
        Model::reguard();
    }
}
