<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\RoleUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //
    public function Register(){
        return view('register');
    }
    

    public function store(Request $request)
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'max:8'],

        ]);
        $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'city_id'  => $request -> city_id,
        ]);
        
        RoleUser::create([
            'role_id'  => 1,
            'user_id'  => $user -> id,
            'user_type'=> 'user',
              
          ]);

        $request->session()->put('user', $user);

        Auth::login($user);

        return view('user/showposts');
    }
}
