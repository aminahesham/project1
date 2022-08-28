<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

use Session;

class PostController extends Controller
{
    //
    public function showPosts(){
        $posts = Post ::all() ;
        return view('ShowPosts' , ['posts' => $posts]);
    }

public function createPostView(){
    return view('addpost');
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
    return view('showposts');
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
        return view('updatepost',compact('posts'));
       }

    public function updatePost(Request $request,$id){

        $posts =Post::find($id);
        if (!$posts)
        return redirect()->back();
        $posts->update($request->all());
        return redirect('allposts'); 
      }

     
}
