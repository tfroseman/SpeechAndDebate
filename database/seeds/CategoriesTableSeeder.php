<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category' => 'Extemporaneous Debate',
        ]);
        DB::table('categories')->insert([
            'category' => 'Congressional Debate (House and Senate)',
        ]);
        DB::table('categories')->insert([
            'category' => 'Public Forum Debate',
        ]);
        DB::table('categories')->insert([
            'category' => 'Policy Debate',
        ]);
        DB::table('categories')->insert([
            'category' => 'Lincoln-Douglas Debate',
        ]);
        DB::table('categories')->insert([
            'category' => 'United States Extemporaneous Speaking',
        ]);
        DB::table('categories')->insert([
            'category' => 'Storytelling (Middle School)',
        ]);
        DB::table('categories')->insert([
            'category' => 'Prose (Middle School)',
        ]);
        DB::table('categories')->insert([
            'category' => 'Program Oral Interpretation',
        ]);
        DB::table('categories')->insert([
            'category' => 'Poetry (Middle School)',
        ]);
        DB::table('categories')->insert([
            'category' => 'Original Oratory',
        ]);
        DB::table('categories')->insert([
            'category' => 'Mixed Extemporaneous Speaking (Middle School)',
        ]);
        DB::table('categories')->insert([
            'category' => 'International Extemporaneous Speaking',
        ]);
        DB::table('categories')->insert([
            'category' => 'Informative Speaking',
        ]);
        DB::table('categories')->insert([
            'category' => 'Impromptu (Middle School)',
        ]);
        DB::table('categories')->insert([
            'category' => 'Impromptu (Middle School)',
        ]);
        DB::table('categories')->insert([
            'category' => 'Humorous Interpretation',
        ]);
        DB::table('categories')->insert([
            'category' => 'Duo Interpretation',
        ]);
        DB::table('categories')->insert([
            'category' => 'Dramatic Interpretation',
        ]);

    }
}
