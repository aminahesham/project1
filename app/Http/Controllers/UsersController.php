<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

use Illuminate\Support\Facades\DB;


class UsersController extends Controller
{
    //
    public function showUsers(){
        $users=User::all();
        return view('allusers' ,['users' => $users]);

    }

    public function userPosts($id){
       // $users =User::find($id);

        $user = User::where('id', $id)->first();
        $posts = Post::where('user_id', $user->id)->get();

       // $posts = Post:: where ('user_id', $id )->get();

       // $posts=Post::where('user_id' ,'=', $id)->get();

        return view('userposts',compact('user','posts'));
    }

   
}
