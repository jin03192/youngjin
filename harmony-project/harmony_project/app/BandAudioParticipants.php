<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BandAudioParticipants extends Model
{
    protected $fillable = [
        'user_id', 'band_audio_id','file_name',
    ];
    public $timestamps = false;
}
