<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

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
    Post::create([
    'title'         => $request -> title,
    'content'       => $request -> content,
    
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
        return view('getpost',compact('posts'));
       }

    public function updatePost(Request $request,$id){

        $posts =Post::find($id);
        if (!$posts)
        return redirect()->back();
        $posts->update($request->all());
        return redirect('allposts'); 
      }
}
