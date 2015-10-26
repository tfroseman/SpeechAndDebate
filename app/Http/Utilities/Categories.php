<?php

namespace App\Http\Utilities;

class Categories
{
    protected static $categories = [
        "Extemporaneous Debate" => "extemp",
        "Congressional Debate (House and Senate)" => "congress",
        "Public Forum Debate" => "pfd",
        "Policy Debate"=> "policy",
        "Lincoln-Douglas Debate"=> "ld",
        "United States Extemporaneous Speaking"=> "usextemp",
        "Storytelling (Middle School)"=> "story",
        "Prose (Middle School)"=> "prose",
        "Program Oral Interpretation"=> "prosepoetry",
        "Poetry (Middle School)"=> "poet",
        "Original Oratory"=> "oo",
        "Mixed Extemporaneous Speaking (Middle School)"=> "mixedextemp",
        "International Extemporaneous Speaking"=> "intextemp",
        "Informative Speaking"=> "informative",
        "Impromptu (Middle School)"=> "improv",
        "Humorous Interpretation"=> "hi",
        "Duo Interpretation"=> "duo",
        "Dramatic Interpretation"=> "di"
    ];

    public static function all()
    {
        return static::$categories;
    }
}