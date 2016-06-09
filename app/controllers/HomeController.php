<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function showTest()
	{
		return View::make('test');
	}

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showWhackamole()
	{
		return View::make('projects.whackamole');
	}
	
	public function showResume()
	{
		return View::make('resume');
	}
	
	public function showPortfolio()
	{
		return View::make('portfolio');
	}
	
	public function showrollDice($guess = 1)
	{
		$roll = mt_rand(1,6);
    
	    if($guess == $roll){
	       $message = "You guessed {$guess}, that was correct!"; 
	    }else{
	       $message = "You guessed {$guess}, close but incorrect!";
	    }

	    $data = [
	        'guess' => $guess,
	        'roll' => $roll,
	        'message' => $message
	    ];
	    return View::make('roll-dice')->with($data);
	}

	public function loginForm()
	{
		// get is the routes.php  it gets loginForm
		// go to posts/login
		return View::make('posts.login');
	}

	public function doLogin()
	{
		// validator checks all the fields against the rules set up in User class
		// (making sure email is unique)

		$rules = [
			'email' => 'required',
			'password' => 'required'
		];

		$validator = Validator::make(Input::all(), $rules);

		// attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the login page with validation errors and old inputs	        
			Session::flash('errorMessage', 'Login failed due to inccorect credentials' );
	        return Redirect::back()->withErrors($validator);
	    } else {
			// if there are no validation errors continue on.
			// get the email and password from the form
			$data = [
				'email' => Input::get('email'),
				'password' => Input::get('password'),
			];
	
			// if email and password match send user to the posts page
			if (Auth::attempt($data)) {
	    		return Redirect::action('PostsController@index');
			} else {
			    // login failed, go back to the login screen
				Session::flash('errorMessage', 'Login failed, please try again' );
				return Redirect::back()->withInput();
			}
	    }


	}

	public function doLogout()
	{
		Auth::logout();
		return Redirect::action('PostsController@index');
	}

	public function makeNewUserPage()
	{
		return View::make('posts.newUser');
	}

}
