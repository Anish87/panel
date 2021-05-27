<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserDef;
use Illuminate\Support\Facades\DB;

class Profile extends Controller
{
    public function returnDB()
    {
        $mainCon = new UserDef;
        if($mainCon->checkLogin() !== "Panel Guest")
        {
            $plrID = session('userID');
            $query = DB::table('accounts')->where('accounts.ID', $plrID)->first();
            if($query)
            {
                $plrData = array();
                $jsonStats = json_decode($query->Skills);
                $jsonRoles = json_decode($query->Roles);
                $jsonAuth  = json_decode($query->Auth);
                array_push($plrData, [
                    'robs' => $jsonStats->Robs,
                    'cops' => $jsonStats->Cops,
                    'bank' => $jsonStats->Bank,
                    'cash' => $jsonStats->Cash,
                    'rPlr' => $jsonRoles->Player,
                    'rDon' => $jsonRoles->Donator,
                    'rCon' => $jsonRoles->Contributor,
                    'pLvl' => $jsonAuth->Level
                ]);
                return view('profile')->with('sessionUser', $mainCon->checkLogin())->with('playerStats', $plrData);
            }
        }
        return redirect('login');
    }
}