<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request ;

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

Route::get('/', function ()         { return view('welcome'); });

Route::get('/connect', function ()  { return view('connexion'); });

Route::get('/home', function ()     { return view('dos1.index'); });

Route::get('/dash', function ()     { return view('dos1.dashbord'); });

Route::get('/compte', function ()   { return view('dos1.compte_person'); });

Route::get('/info', function ()     { return view('dos1.info_perso'); });

Route::get('/admin1', function ()   { return view('dos1.dashbord_admin');});

Route::get('/dashbord', function () { return view('dos1.dashbord_dashbord'); });

Route::get('/update', function () { return view('dos1.update'); });

Route::get('/create', function () { return view('dos1.create'); });

Route::post('/mode', function(Request $request) {
    session(['mode' => $request->input('mode')]);

    return response()->json(['mode' => session('mode')]);
});


Route::post('inscription', [AuthController::class,'postinscription']);