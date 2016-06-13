<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$currentUser = "MAD";
		if (Auth::check())
			//$currentUser = Auth::user()->first_name;
			return View::make("users/index")->with('currentUser',$currentUser);
		else
			return Redirect::to("/");
	}


	public function login(){

		$postInput = Input::all();
		$loginValidation = Validator::make($postInput,User::$loginRule);
		if ($loginValidation->passes())
		{	
			if (Auth::attempt(Input::only('username','password')))
			{
				$user1 = Auth::user();
				$username = $user1->username;
				return Redirect::to("/users/$username"); 
			}
			else
			{
				Input::flash();
				$errors = ['password'=>'Invalid password. Try Again.'];
				return Redirect::back()->withErrors($errors);
			}

		}
		else
		{	//With Input not working on controller..
			Input::flash();
			return Redirect::back()->withErrors($loginValidation->messages());
		}

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$currentUser = "MAD";
		if (Auth::check())
		{
			$user1 = Auth::user();
			return Redirect::to("/users/$user1->username");
		}
		else
			return View::make('users/create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$postInput = Input::all();
		//$postInput['terms'] = Input::has('terms') ? true:false ;		//If terms is present in the post data, it means, it is checked
		//return $postInput;

		$signUpValidation = Validator::make($postInput,User::$signUpRule);

		if ($signUpValidation->passes()){
			//echo "Passed the validation";
			$user1 = new User;
			$user1->first_name = $postInput["first_name"];
			$user1->last_name = $postInput["last_name"];
			$user1->username = $postInput["username"];
			$user1->password = Hash::make($postInput["password"]);
			
			if ($user1->save()){
				//give a flash message, signed up succesfully
				Auth::attempt($user1);
				return Redirect::to("/users/$user1->username");
			}
		}
		else
		{

			Input::flash();
			//echo "Could not pass the validation\n";
			//return var_dump($signUpValidation->messages());
			//withInput method not working in Controller (??), so done using View
			return Redirect::back()->withErrors($signUpValidation->messages());
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
		return $id;
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	/**
	* @param empty 
	* @return Response
	*
	*/
	public function logout(){
		Auth::logout();
		return Redirect::to("/");
		//Show one-time you have been logged out message
	}

	public function me(){
		if (Auth::check()){
			$user1 = Auth::user();
			$username = $user1->username;
			return Redirect::to("/users/$username"); 
		}
		else
		{
			return Redirect::to("/");
			//Show one time login message
		}

	}

}
