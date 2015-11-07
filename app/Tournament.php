<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $table = 'tournament';

    protected $fillable = ['host_id','round_count'];
}
