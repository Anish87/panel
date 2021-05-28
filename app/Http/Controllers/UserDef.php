<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDef extends Controller
{
    public function checkLogin()
    {
        if (session('userName'))
        {
            $sessionUser = session('userName');
            $userLevel   = session('userLvl');
        }
        else {$sessionUser = "Panel Guest"; $userLevel = 0}
        return [$sessionUser, $userLevel];
    }
}