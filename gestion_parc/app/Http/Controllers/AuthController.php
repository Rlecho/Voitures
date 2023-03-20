<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   public function postinscription(Request $request)
   {

    $request->validate(
        [
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:user,email'],
            'password' => ['required']
        ]
        );

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'status' =>0,
            'password' =>Hash::make($request->password),
        ]);
        return redirect()->route('connexion');
   }

}
