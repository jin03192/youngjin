<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BandAudios extends Model
{
    protected $fillable = [
        'subject','selected_instruments','first_musician_id', 'writer_id','goods','midi_id',
    ];
    public $timestamps = true;
}
