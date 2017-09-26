<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        "blobTest","recordupload","otoven_in_one_video_upload","otoven_blobTest","modifyAlbumAction","volumeTest","home","sendmessage",
        'guild/*', '/chatbox/Information','guild/myguild','bandChallenge_video_upload','gakuhu_modi','gakuhu_loading',
    ];
}
