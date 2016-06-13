<?php
	$title = "Create New Event";
?>
@extends ('layout.default')
@section('content')
	<div class="row">
		<div class="col-md-6">
			<div class="splash">
				<form class="form-horizontal" method="post" action="/events/" >
					<h3><img src="/images/signup.png">Add Events</h3>
					<div class="form-group">
						<label for="title" class="col-sm-3 control-label">Event Title</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="title" placeholder="Title for your event" value="{{Request::old('event_title')}}">
							<span style="color:blue">{{ $errors->first('event_title')}}</span>
						</div>
					</div>
					<div class="form-group">
						<label for="organiser" class="col-sm-3 control-label">Organiser</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="organiser" placeholder="Event Organiser" value="{{Request::old('organiser')}}">
							<span style="color:blue">{{ $errors->first('organiser')}}</span>
						</div>
					</div>
					<div class="form-group">
						<label for="contact_number" class="col-sm-3 control-label">Contact Number</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="contact" placeholder="Contact" value="{{Request::old('contact')}}">
							<span style="color:red">{{ $errors->first('contact')}}</span>
						</div>
					</div>
					<div class="form-group">
						<label for="venue" class="col-sm-3 control-label">Venue</label>
						<div class="col-sm-9">
							<!-- <text type="text" class="form-control" name="venue" placeholder="Event Location / Add google map later"> -->
							<textarea class="form-control" name="venue" placeholder="Venue				Address				Add google map later"></textarea>
							<span style="color:red">{{ $errors->first('venue')}}</span>
						</div>
					</div>
					<div class="form-group">
						<label for="date" class="col-sm-3 control-label">Date</label>
						<div class="col-sm-9">
							<input type="date" class="form-control" name="date" placeholder="YYYY/MM/DD">
							<span style="color:red">{{ $errors->first('date')}}</span>
						</div>
					</div>

					<div class="form-group">
						<label  class="col-sm-3 control-label">Time</label>
						<div class="col-sm-9">
							<select name="hour" style="width:75px">
								<option value="hour12">12</option>
								<?php
								for ($i=1; $i<=11; $i++){

									echo "\n\t\t\t\t\t\t\t\t".'<option value="'.$i.'">'.$i.'</option>';
								}
								?>
							</select>
							<select name="minute" style="width:100px">
								<?php
								for ($i=1; $i<=60; $i++){
									echo "\n\t\t\t\t\t\t\t\t".'<option value="'.$i.'">'.$i.'</option>';
								}
								?>
							</select>
							<select name="ampm" style="width:75px">
								<option value="am">AM</option>
								<option value="pm">PM</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="description" class="col-sm-3 control-label">Description</label>
						<div class="col-sm-9">
							<textarea placeholder="Add your event description." class="form-control" name="description" style="min-height:150px;"></textarea>
							<span style="color:red">{{ $errors->first('venue')}}</span>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-9">
							<button type="submit" class="btn btn-primary">Add Event</button>
						</div>
					</div>
				</form>
			</div>	
		</div>
		<div class="col-md-6">
			<h1>Do something here.</h1>
		</div>
	</div>
@stop