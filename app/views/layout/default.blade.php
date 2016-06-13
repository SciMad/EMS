<?php 
	$me="events";
	$usersCount = 120;
	$organisersCount = 20;
	$eventsCount = 10;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
	<title>EMS</title>
	<style type="text/css">
		body{
			background:rgba(205,195,200,0.2);
		}
		.navbar{
			background:rgba(180,115,150,0.4);
			box-shadow: 10px 5px 15px 5px;
			text-shadow: 0px 1px 0px;
		}	
		div.mainContent{
			min-height: 480px;
		}
		div.left-tab{
			background:rgba(180,115,150,0.1);		
		}
	</style>
</head>


<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

		<a class="navbar-brand" href="/">Events Management System</a>
	</div>
	<div class="collapse navbar-collapse" id="example-navbar-collapse">
		<ul class="nav navbar-nav active">
			<li id ="users" class=""><a href="/users">Users<span class="badge"> {{$usersCount}}+</span></a></li>
			<li id = "organisers" class=""><a href="/organisers">Organisers<span class="badge"> {{$organisersCount}}+</span></a></li>	
			<li class="dropdown" id ="events">
				<a href="#" clargba(180,115,150,0.4)ss="dropdown-toggle" data-toggle="dropdown">Events<span class="badge"> {{$eventsCount}}+</span><b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="/events/create">Create</a></li>
					<li><a href="#">Modify</a></li>
					<li><a href="#">Blah Blah</a></li>
					<li><a href="#">Something</a></li>
					<li class="divider"></li>
					<li><a href="/events">View All</a></li>
					<li class="divider"></li>
					<li><a href="#">NOTHING</a></li>
				</ul>
			</li>
			<li id ="gallery" class=""><a href="/gallery">Gallery</a></li>
			<li id ="aboutus" class=""><a href="/aboutus">About Us</a></li>
		</ul>
		<div align="right">
			<p style="color:blue;" class="navbar-text">Signed in as {{"currentUser"}}</p>
			<a  href = "/logout" class="navbar-link">Logout</a>
		</div>
	</div>
</nav>

@yield ('content')

<script type="text/javascript" src="/jQuery/jquery-2.2.3.js"></script>
	<script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		window.onload = function() {
			$("#{{$me}}").addClass("active");
		};
</script>




@yield('footer')

</body>
</html>