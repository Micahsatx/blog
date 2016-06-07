<?php

class PostsController extends \BaseController {

// filter that runs before the page displays to decide what a user can and cant do
	public function __construct()
	{
		// $this->beforeFilter('auth', array(
		// 	'except' => array(
		// 		'index',
		// 		'show'
		// 	)
		// ));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::paginate(4);
		return View::make('posts.index')->with('posts', $posts);
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
	    $validator = Validator::make(Input::all(), Post::$rules);

	    if(Input::hasFile('img')){
	    	$img = Input::file('img');
	    	$imgName = $post->id . '.' . $img->getClientOrigincalExtension();
	    	$systemPath = public_path() . '/uploads/';
	    	$img->move($systemPath, $imgName);
	    	$post->img = '/uploads/' . $imgName;
	    	$post->save();
	    }
		// attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs	        
			Session::flash('errorMessage', 'Post has failed' );
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
			$post = new Post();
			$post->title = Input::get('title');
			$post->content = Input::get('content');
	// generic code to get the first id from the database
			$post->user_id = Auth::id();
	    	$post->save();
			Session::flash('successMessage', 'Post has been saved' );
			return Redirect::action('PostsController@show', $post->id);
	    }
	}

	public function newUser()
	{
		// View::make('posts.newUser');
		$user = new User();
		$user->user = Input::get('user');
		$user->email = Input::get('email');
// generic code to get the first id from the database
		$user->password = Input::get('password');
    	$user->save();
    	return Redirect::action('PostsController@index');
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
            return View::make('posts.show')->with(['post' => $post]);
        } catch(Exception $e) {
            App::abort(404);
        }
		// $post = Post::find($id);
		// return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Post::$rules);
		
		

		if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs	        
			Session::flash('errorMessage', 'Post has failed' );
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
	    	$post = Post::find($id);
			$post->title = Input::get('title');
			$post->content = Input::get('content');
		// generic code to get the first id from the database
			$post->user_id = User::first()->id;
			// $post->user_id = Auth::id();
			$post->save();
			Session::flash('successMessage', 'Post has been saved' );
			return Redirect::action('PostsController@show', $post->id);
		}
		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();
		return Redirect::action('PostsController@index');

	}


}
