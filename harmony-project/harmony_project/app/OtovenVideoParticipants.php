<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OtovenVideoParticipants extends Model
{
   protected $fillable = [
        'user_id', 'otoven_video_id', 'file_name'
    ];
    public $timestamps = false;
}
