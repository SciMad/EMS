<?php
	$title = "Sign Up";
?>
@extends ('layout.new')
@section('content')
	<div class="row">
		<div class="col-md-6">
			<div class="splash">
				<form class="form-horizontal" method="post" action="/users" >
					<h3><img src="/images/signup.png">Sign Up</h3>
					<div class="form-group">
						<label for="first_name" class="col-sm-3 control-label">First Name</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="first_name" placeholder="Your First Name" value="{{Request::old('first_name')}}">
							<span style="color:blue">{{ $errors->first('first_name')}}</span>
						</div>
					</div>
					<div class="form-group">
						<label for="last_name" class="col-sm-3 control-label">Last Name</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="last_name" placeholder="Your Last Name" value="{{Request::old('last_name')}}">
							<span style="color:blue">{{ $errors->first('last_name')}}</span>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-3 control-label">Emain ID</label>
						<div class="col-sm-9">
							<input type="email" class="form-control" name="email" placeholder="Your Email" value="{{Request::old('email')}}">
							<span style="color:red">{{ $errors->first('email')}}</span>
						</div>
					</div>
					<div class="form-group">
						<label for="username" class="col-sm-3 control-label">Username</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="username" placeholder="Desired Username" value="{{Request::old('username')}}">
							<span style="color:red">{{ $errors->first('username')}}</span>
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-sm-3 control-label">Password</label>
						<div class="col-sm-9">
							<input type="password" class="form-control" name="password" placeholder="Enter password">
							<span style="color:red">{{ $errors->first('password')}}</span>
						</div>
					</div>
					<div class="form-group">
						<label for="confirm_password" class="col-sm-3 control-label">Confirm Password</label>
						<div class="col-sm-9">
							<input type="password" class="form-control" name="password_confirmation" placeholder="Confirm your password">
							<span style="color:red">{{ $errors->first('password_confirmation')}}</span>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-9">
							<button type="submit" class="btn btn-primary">Register</button>
						</div>
					</div>
				</form>
			</div>	
		</div>
		<div class="col-md-6">
			<h1>Create an Account on EMS.</h1>
		</div>
	</div>
@stop