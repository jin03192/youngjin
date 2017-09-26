<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Midis extends Model
{
    protected $fillable = [
        'music_name', 'composer','genre',
    ];
}
