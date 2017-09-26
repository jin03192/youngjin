<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OtovenVideos extends Model
{
     protected $fillable = [
   'id', 'subject', 'contents', 'instruments', 'first_musician_id','writer_id','goods'
   ];
}
