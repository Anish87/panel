<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\UserDef;
use Illuminate\Support\Facades\DB;

class Admin extends Controller
{
    public function staffIndex()
    {
        $userDef = new UserDef;
        if($userDef->checkLogin()[0] !== "Panel Guest")
        {
            if($userDef->checkLogin()[1] > 1)
            {
                return view('admin.staff')->with('sessionUser', $userDef->checkLogin()[0]);
            }
            else return response('Error', 403);
        }
        else return redirect('/login');
    }
}