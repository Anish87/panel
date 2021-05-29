<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexPage;
use App\Http\Controllers\Login;
use App\Http\Controllers\Logout;
use App\Http\Controllers\Profile;
use App\Http\Controllers\Admin;

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
// General
Route::get('/', [IndexPage::class, 'returnIndex']);
Route::get('/tops', [IndexPage::class, 'returnIndex']);
Route::get('/login', [Login::class, 'pageView']);
Route::get('/discord', function(){
    return redirect('https://discord.gg/NPNHemw3eM');
});
// Important
Route::get('/user/profile', [Profile::class, 'returnDB']);
Route::get('/logout', [Logout::class, 'MainFunc']);
// Staff
Route::get('/admin/home', [Admin::class, 'staffIndex']);

/* POST */
Route::post('/login', [Login::class, 'MainFunc']);