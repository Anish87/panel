<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserDef;

class IndexPage extends Controller
{
    public function returnIndex()
    {
        $mainCon = new UserDef;
        if($mainCon->checkLogin() !== "Panel Guest")
        {
            return view('index')->with('sessionUser', $mainCon->checkLogin());
        }
        return view('index')->with('sessionUser', $mainCon->checkLogin());
    }
}