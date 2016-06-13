<?php

use Models\Event;
use Models\Organiser;

class EventsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{ 
		if (Auth::check())
		{
			//TODO: CurrentUser is not working , check it later
			//$currentUser = Auth::user()->first_name;
			return View::make("events/index");//->with('ceventsurrentUser',$currentUser);
		}
		else
		{
			return Redirect::to("/");
		}
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		if (Auth::check())
		{
			$user1 = Auth::user();
			return View::make('events/create');
		}
		else{
			 return Redirect::to("/");			
		}
			
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$postInput=Input::all();
		$event1 = new MyEvent;

		//Validation of $postInput to be done if necessary

		$event1->title = $postInput['title'];
		$event1->description = $postInput['description'];
		$event1->venue = $postInput['venue'];
		$event1->organiser = $postInput['organiser'];
		$event1->event_date = $postInput['date'];
		
		//TODO: Time parsing and storing to be done later
		//if (($postInput['hour']) ==12) $postInput['hour'] =0;
		//if ($postInput['ampm'])='PM' $postInput['hour'] = $postInput['hour']+12; 
		//working with a random time now
		$event1->event_time = '09:00:00';				
		$event1->save();

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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

}

