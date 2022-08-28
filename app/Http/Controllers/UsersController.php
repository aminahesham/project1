<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;


class UsersController extends Controller
{
    //
    public function showUsers(){
        $users=User::all();
        return view('allusers' ,['users' => $users]);

    }

    public function userPosts($id){

        $user = User::where('id', $id)->first();
        $posts = Post::where('user_id', $user->id)->get();
        
        return view('userposts',compact('user','posts'));
    }

    public function showPosts(){
        $posts = Post ::all() ;
        return view('user/ShowPosts' , ['posts' => $posts]);
    }

public function createPostView(){
    return view('user/addpost');
    }

public function createPost(Request $request){ 
   
    $validated = $request->validate([
        'title'   => 'required | max:50 ',
        'content' => 'required',
    ]);
   

    Post::create([
    'title'         => $request -> title,
    'content'       => $request -> content,
    'user_id'       => $request -> user_id,
    
    ]);
    return view('user/showposts');
    }

    public function deletePost($id){

        Post::destroy($id);
        return redirect()->back();
    }

    public function getPost($id){

        $posts= Post::find($id);
        if(!$posts)
        return redirect()->back();
        $posts=Post::select('title' ,'content')->find($id);
        return view('user/updatepost',compact('posts'));
       }

    public function updatePost(Request $request,$id){

        $posts =Post::find($id);
        if (!$posts)
        return redirect()->back();
        $posts->update($request->all());
        return redirect('userallposts'); 
      }

    
}
