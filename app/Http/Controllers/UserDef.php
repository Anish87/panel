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
        }
        else $sessionUser = "Panel Guest";
        return $sessionUser;
    }
}