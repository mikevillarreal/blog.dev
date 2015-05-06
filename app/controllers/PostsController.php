<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		$posts = Post::paginate(4);
    	$data = array(
			'posts' => $posts
			);
    	
		return View::make('posts.index')->with($data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{	 
		// create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        Log::info('Invalid user inputs from create view. Logged below:');
	    	Log::info(Input::all());
	        // Session::flash('errorMessage', 'Post not saved. See errors below.');
	        
	        return Redirect::back()->withInput()->withErrors($validator)->with('errorMessage', 'Post not saved. See errors below');
	    } else {
	        // validation succeeded, create and save the post
	        // Adding a new Post (populating)
		    $post = new Post;
			$post->title =  Input::get('title');
			$post->body =  Input::get('body');
			$post->save();
			// Session::flash('successMessage', 'Post successfully saved.');
			return Redirect::to('/posts')->with('successMessage', 'Post Successfully Save');
	    }
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		try {
			$post = Post::findOrFail($id);
			
			return View::make('posts.show')->with('post', $post);
		}catch(Exception $e) {
	    	Log::info('Page not found. See below:');
	    	Log::error($e);
	    	App::abort(404);
	    }
	    
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		try {
			$post = Post::findOrFail($id);
			return View::make('posts.edit')->with('post', $post);
		}catch(Exception $e) {
	    	Log::info('Page not found. See below:');
	    	Log::error($e);
	    	App::abort(404);
	    }
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);
		$post->title =  Input::get('title');
		$post->body =  Input::get('body');
		$post->save();
		Session::flash('successMessage', 'Post successfully updated.');
		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return "deleted post $id";
	}


}
