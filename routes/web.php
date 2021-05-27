<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexPage;
use App\Http\Controllers\Login;
use App\Http\Controllers\Logout;
use App\Http\Controllers\Profile;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* GET */
Route::get('/', [IndexPage::class, 'returnIndex']);
Route::get('/tops', [IndexPage::class, 'returnIndex']);
Route::get('/user/profile', [Profile::class, 'returnDB']);
Route::get('/login', [Login::class, 'pageView']);
Route::get('/logout', [Logout::class, 'MainFunc']);
Route::get('/discord', function(){
    return redirect('https://discord.gg/NPNHemw3eM');
});

/* POST */
Route::post('/login', [Login::class, 'MainFunc']);