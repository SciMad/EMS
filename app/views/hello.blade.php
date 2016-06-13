<?php
	$title="Please Login";
?>

@extends ('layout.new')
@section ('content')
	<div class="row">
		<div class="col-md-6">
			<div class="splash">
				<form class="form-horizontal" method="post" action="/">
					<div class="form-group">
						<label for="username" class="col-sm-2 control-label">Username</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="username" placeholder="Enter EMS username" value="{{Request::old('username')}}">
							<span style="color:red">{{ $errors->first('username')}}</span>
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" name="password" placeholder="Enter password">
							<span style="color:red">{{ $errors->first('password')}}</span>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-primary">Sign in</button>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<div class="checkbox">
							<label>
								<input type="checkbox" name="remember"> Remember me
							</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2 control-label"></div>
						<div class="col-sm-10">
							<a class="form control" href="/users/create">New on EMS? Create your account here.</a>
						</div>
					</div>
				</form>
			</div>
		</div>	
		<div class="col-md-6">
			<h1>Welcome to EMS</h1>
		</div>
	</div>
	<div class="row slide">
		<ul>
			<li>Add Events</li>
			<li>Create Events</li>
			<li>View Events</li>
			<li>Enjoy events</li>
			<li>Request for help</li>
		</ul>
	</div>
@stop
