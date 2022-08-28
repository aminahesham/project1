<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Role;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function Login(){
        return view('login');
    }

    public function store(LoginRequest $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = $request->only('email', 'password');
        if (Auth::attempt($user)) {
        $request->session()->put('user', $user);

        return route('redirect');
        }
        return redirect()->back();
    }
   

    public function redirect(){

        $user = Auth :: user();
        if(User::where('role', 'admin')){
            return view('showposts');
            }
        else{
            return view('user/showposts');
            }
        }
}
