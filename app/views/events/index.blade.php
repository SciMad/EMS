@extends ('layout.events')


@section ('panel')
		<?php
			$events = MyEvent::all();
			foreach ($events as $event) {
				echo '<div class="panel panel-primary">
				<div class="panel-heading">
					<h1 class="panel-title">';echo $event->title; echo'</h1>
				</div>
				<div class="panel-body">
					<div class="col-sm-3">
						<a href="#" class="thumbnail"> <img src="/images/fb.jpg" alt="Generic placeholder thumbnail"> </a>
					</div>
					<div class="col-sm-9">';
						echo "<strong>".$event->title."</strong>";
						echo "<br/>";
						echo $event->description;
						echo "<br/>";
						echo $event->event_time;
						echo "<br/>";
						echo $event->event_date;
						echo "<br/>";
						echo $event->venue;

					echo '
						<div class ="row">
							
							<div class="col-sm-5"><a href="/events/"><button type="button" class="btn btn-warning">Modify Event</button></a>
							</div>
							<div class="col-sm-5"><a href="/events/"><button type="button" class="btn btn-danger">Delete Event</button></a>
							</div>
						</div>
					</div>
					
				</div>
			</div>';
			}
		?>
@stop

