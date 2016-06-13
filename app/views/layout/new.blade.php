<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css">

	<title>{{$title}}</title>
	<style type="text/css">
		body{
			background:rgba(205,195,200,0.2);
		}

		.splash{
			margin: 10px;
			background:rgba(205,195,200,0.3);
			border-radius: 15px;	
			border: thin;
			border-style: solid;
			padding: 10px;
			min-width: 400px;
			height: auto;
			text-align: left;
			box-shadow: 15px 5px 20px 10px;
		}
		.slide{
			margin-top: 20px;
			box-shadow: -15px 15px 20px 10px;
			height:fill;
			padding: 15px;
			background: rgba(205,195,230,0.3);
		}
	</style>
</head>
<body>
	<div class="container">
		@yield('content')
	</div>
</body>
</html>