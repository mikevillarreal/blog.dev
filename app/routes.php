<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', 'HomeController@showWelcome');

Route::get('/resume', 'HomeController@showResume');

Route::get('/porfolio', 'HomeController@showPorfolio');

Route::get('/contact', 'HomeController@showContact');

Route::resource('posts', 'PostsController');

Route::get('orm-test', function ()
{
    // Adding a new Post (populating)
    // $post= new Post();
    // $post->title = 'Eloquent is awesome!';
    // $post->body  = 'It is super easy to create a new post.';
    // $post->save();
    
    // Find and Display all Posts
    // $posts = Post::all();
    // return $posts;
    
    // Find and Display only 1 Post
    // $post = Post::find(1);
    // return $post->title;
    
    // Update a Post
    // $post = Post::find(1);
    // $post->title = "New Title Goes Here.";
    // $post->save();
    // return $post;
    
    // Delete a Post
    // $post = Post::find(1);
    // $post->delete();
});
