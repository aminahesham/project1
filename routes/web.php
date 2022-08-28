<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CityController;




//register form
Route::get('/register'      , [RegisterController::class ,'register'])->name('register');

//store register data in the database 
Route::post('/storedata'        , [RegisterController::class, 'store']);

//login form
Route::get('/login'         , [LoginController::class ,'login'])->name('login');

Route::post('/store'        , [LoginController::class, 'store']);

//redirect admin to the dashboard and the user to home
Route::post('/redirect'     , [LoginController::class,'redirect'])->name('redirect');


////////////////////////////////////////////////////admin routes/////////////////////////////////////////////////////////////////////////



//display all posts 
Route::get('allposts'        , [PostController::class  ,'showPosts']);


//return view to create new post
Route::get('/createpost'     , [PostController::class ,'createPostView']);


//create new post in database 
Route::post('insertpost'     , [PostController::class  ,'createPost']);


//delete post from database 
Route::get('deletepost/{id}' , [PostController::class ,'deletePost']);

//return spicefic post by its id 
Route::get('getpost/{id}'    , [PostController::class ,'getPost']);

//update post
Route::post('updatepost/{id}', [PostController::class ,'updatePost'])->name('update');



//display all users 
Route::get('allusers'        , [UsersController::class ,'showUsers']);

//display users posts by user's id 
Route::get('userposts/{id}'  , [UsersController::class ,'userPosts']);


//show city table
Route::get('showcity'        , [CityController::class ,'showCity']);

//show users in this city 
Route::get('cityuser/{id}'   , [CityController::class ,'userCity']);

//show posts in this city
Route::get('cityposts/{id}'  , [CityController::class ,'cityPosts']);


//admin add new city in city table
Route::get('addcity'        , [CityController::class ,'addCity']);

Route::post('insertcity'    , [CityController::class ,'insertCity']);

//////////////////////////////////////////////////user routes ////////////////////////////////////////////////////////////

//display all posts 
Route::get('userallposts'        , [usersController::class  ,'showPosts']);


//return view to create new post
Route::get('usercreatepost'      , [usersController::class ,'createPostView']);


//create new post in database 
Route::post('userinsertpost'     , [usersController::class  ,'createPost']);


//delete post from database 
Route::get('userdeletepost/{id}' , [usersController::class ,'deletePost']);

//return spicefic post by its id 
Route::get('usergetpost/{id}'    , [usersController::class ,'getPost']);

//update post
Route::post('userupdatepost/{id}', [usersController::class ,'updatePost'])->name('update');