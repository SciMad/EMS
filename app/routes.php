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

Route::get('/', function()
{
	if (Auth::check()){
		return Redirect::to("/users");
	}else
	{
		return View::make('hello');
	}
});

Route::get('logout','UsersController@logout');


Route::post('/','UsersController@login');


Route::get('/me','UsersController@me');

/*Route::post('/',function(){
	return  Input::all();
	//var_dump(Illuminate\Support\Facades\Input::all());
	//var_dump(Input::get('username'));
	//return View::make('hello');

	//echo "string";
	//For Now I have redirected it to users page
	//return Redirect::to('/users')->with('attempt','login');//->with('loginInput',Input::all());
});*/

Route::resource('users','UsersController');
Route::resource('events','EventsController');