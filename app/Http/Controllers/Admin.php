<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin extends Controller
{
    public function staffIndex()
    {
        if(session('userName') !== "Panel Guest")
        {
            if(session('userLvl') > 1)
            {
                return view('admin.staff')->with('sessionUser', session('userName'));
            }
            else return response()->view('errors.403', [], 403);
        }
        else return redirect('/login');
    }
}