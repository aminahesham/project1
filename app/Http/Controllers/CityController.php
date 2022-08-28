<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\User;
use App\Models\Post;


class CityController extends Controller
{
    //
    public function showCity(){
        $city=City::all();
        return view('showcity' ,['city' => $city]);

    }

    public function userCity($id){

        $city = City::where('id', $id)->first();
        $user = User::where('city_id', $city->id)->get();
        
        return view('usercity',compact('city','user'));
    }

    public function cityPosts($id){
        $city  = City::where('id', $id)->first();
        $user  = User::where('city_id', $city->id)->first();
        $post = Post::where('user_id', $user->id)->get();


        return view('cityposts',compact('user','city', 'post'));


    }

    public function addCity(){
        $city=City::all();
        return view('addcity' ,['city' => $city]);

    }
   
    public function insertCity(Request $request){
        City::create([
            'name'         => $request -> name,
            
            ]);
            return redirect()->back();
    }
}
