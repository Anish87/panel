<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request;
});

Route::post('/discord', function(Request $request){
    Http::post('https://discord.com/api/webhooks/849538763557175306/UadDmEIiTMeOwnATk4OwevDsgGWbDjCU50qnUYhe5SQnE9tPHEqszGqGYpef0yY9wSRc', [
        'content' => "**".$request->author."**: ".$request->content.""
    ]);
});

Route::get('/discord2', function(Request $request){
    return $request;
});