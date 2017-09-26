<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MidiInstruments extends Model
{
    protected $fillable = [
        'midi_id', 'inst_name',
    ];
}
