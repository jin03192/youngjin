<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BandVideos extends Model
{
    protected $fillable = [
      'id', 'subject', 'selected_instruments','first_musician_id','writer_id','goods','midi_id'

    ];
}
