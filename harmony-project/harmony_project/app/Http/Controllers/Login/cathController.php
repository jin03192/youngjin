<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Session

class cathController extends Controller
{
    //
    public function showProfile(Request $request, $id)
    {
        //
        if ($request->session()->has('users')) {
            $request->session()->put('key', 'value');
            
            $session = new Session;
            $guilds->guild_name = $guild_name;
            $guilds->guild_mark = $f_name;
            $guilds->guild_master = $guild_master;
            
            $guilds->save();
        }
        
        
        
    }

}
