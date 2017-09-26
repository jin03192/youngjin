<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'receiver_id','sender_id','is_read','path','is_realtime',
    ];
    public $timestamps = true;
}
