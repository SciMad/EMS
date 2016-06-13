<?php


use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;


class User extends Eloquent implements UserInterface, RemindableInterface {

	public static $signUpRule = [
		'username' => 'required|min:4|unique:users|alpha_dash',
		'first_name' => 'required',
		'last_name' => 'required',
		'email' => 'required',
		'password' => 'required|min:5|confirmed',
		'password_confirmation' => 'required'
	];

	public static $loginRule = [
		'username' => 'required|min:4|alpha_dash|exists:users',
		'password' => 'required|min:5',
	];

	/*public static $errorMessages = [
		'terms'	=> 'Terms must be agreed.'
	];*/

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

}
