<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\UserDef;
use Illuminate\Support\Facades\Auth;

class Logout extends Controller
{
    public function MainFunc(Request $request)
    {
        $userDef = new UserDef;
        if($userDef->checkLogin() !== "Panel Guest")
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/')->with(['success'=>'Successfully logged out.', 'sessionUser'=>'Panel Guest']);
        }
        else return redirect('/')->with('unksess', 'Unknown session.');
    }
}