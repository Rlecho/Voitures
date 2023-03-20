<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DarkMode extends Controller
{

    function mode(){
        $mode = session('mode', 'light');
        return view('update', ['mode'=> $mode] );
    }
}
