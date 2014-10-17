<?php

class UserController extends BaseController {


	public function __construct() {
        $this->beforeFilter('guest', array('only' => array('getLogin','getSignup')));	
    }

	
	
	/*public function getSignup() {
		
		return View::make('user_signup');
		
	}*/
	
	public function postSignup() {
		
		# Step 1) Define the rules			
		$rules = array(
			'first_name' => 'required',
			'last_name' => 'required',
			'email' => 'required|email|unique:users,email',
			'password' => 'required|min:6'	
		);			
			
		# Step 2) 		
		$validator = Validator::make(Input::all(), $rules);
		
		# Step 3
		if($validator->fails()) {
			
			return Redirect::to('/')
				->with('flash_message', 'Sign up failed; Please fix the errors listed below.')
				->withInput()
				->withErrors($validator);
		}
					
		$user = new User;
		$user->Fname = Input::get('first_name');
        $user->Lname = Input::get('last_name');
		$user->email    = Input::get('email');
		$user->password = Hash::make(Input::get('password'));
		
		try {
			$user->save();
		}
		catch (Exception $e) {
			return Redirect::to('/')
				->with('flash_message', 'Sign up failed; please try again.')
				->withInput();
		}
		
		# Log in
		Auth::login($user);
		
		return Redirect::to('/task/all')->with('flash_message', 'welcome to TaskManager!');
				
	}
	
	/*public function getLogin() {
		

		return View::make('user_login');
		
	}*/
	
	/*public function getLogin() {
		
		$credentials = Input::only('email', 'password');

	
		if (Auth::attempt($credentials, $remember = true)) {
			return Redirect::intended('/task/all')->with('flash_message', Auth::user()->fname.', welcome Back!');
		}
		else {
			return Redirect::to('/login')
				->with('flash_message', 'Log in failed; please try again.')
				->withInput();
		}
		
		return Redirect::to('login');
				
	}*/


	public function postLogin() {
		
		$credentials = Input::only('email', 'password');

	
		if (Auth::attempt($credentials, $remember = true)) {
			return Redirect::intended('/task/all')->with('flash_message', Auth::user()->fname.', welcome Back!');
		}
		else {
			return Redirect::to('/')
				->with('flash_message', 'Log in failed; Please try again.')
				->withInput();
		}
		
		return Redirect::to('login');
				
	}
	
	
	public function getLogout() {
		
		# Log out
		Auth::logout();
	
		# Send them to the homepage
		return Redirect::to('/');

	}
		
}