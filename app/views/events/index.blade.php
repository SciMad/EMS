@extends ('layout.default')

@section ('content')
	<div class="container">
	<div class="row mainContent">
		<div class="col-md-3 left-tab">
				Hello
		</div>
		<div class="col-md-6 middle-tab">
			Show Events Detail Here
		</div>
		<div class="col-md-3 right-tab">
			
		</div>
	</div>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<ul class="pager">
				<input type="text" hidden name="currentEventNum" value="1">
				<li class="previous"><a href="#">&larr; Previous</a></li>
				<li class="next"><a href="#">Next &rarr;</a></li>
			</ul>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
@stop

