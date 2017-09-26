<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OtovenAudios extends Model
{
    protected $fillable = [
        'subject','first_musician_id', 'writer_id','goods',
    ];
    public $timestamps = true;
}
