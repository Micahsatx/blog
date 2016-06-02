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

}
