@extends ('layout.default')

@section ('content')
<div class="container">
	<div class="row mainContent">
		<div class="col-md-3 left-tab">
			<div class="splash">
				Hello
			</div>
		</div>
		<div class="col-md-6 middle-content">
			@yield ('panel')
		</div>
		<div class="col-md-3 right-tab">
			<div class="splash">
				Hello
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<ul class="pagination pagination-lg">
			<li class="disabled"><a href="#">&laquo;</a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">&raquo;</a></li>
		</ul>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
@stop


@section ('footer')
	
@stop
