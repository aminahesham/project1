<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UsersController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//update post
Route::get('updatepost/{id}', [PostController::class ,'updatePost'])->name('update');

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






Route::get('allusers'        , [UsersController::class ,'showUsers']);

Route::get('userposts/{id}'  , [UsersController::class ,'userPosts']);

