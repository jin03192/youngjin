<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OtovenAudioParticipants extends Model
{
    protected $fillable = [
        'user_id', 'otoven_audio_id','file_name',
    ];
    public $timestamps = false;
}
