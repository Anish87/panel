<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\UserDef;
use Illuminate\Support\Facades\DB;

class Login extends Controller
{
    public function pageView()
    {
        $userDef = new UserDef;
        $user = $userDef->checkLogin();
        if($user !== "Panel Guest")
        {
            return redirect('/');
        }
        else return view('login')->with('sessionUser', $user);
    }

    public function MainFunc(Request $request)
    {
        $dbQuery = DB::table('accounts')->where('Name', $request->userName)->first();
        if($dbQuery)
        {
            $subPass = strtolower(hash('SHA256', $request->userPass));
            $dbPass  = strtolower($dbQuery->Password);
            $jsonAuth = json_decode($dbQuery->Auth);
            if($subPass === $dbPass)
            {
                $dbID = $dbQuery->ID;
                $request->session()->put('userName', $request->userName);
                $request->session()->put('userID', $dbID);
                $request->session()->put('userLvl', $jsonAuth->Level);
                return redirect('/');
            }
            else return view('login')->with('authErr', 'Invalid password, please try again.');
        }
        else return view('login')->with('authErr', 'Unknown username, please try again.');
    }
}