@extends ('layout.users')

@section ('panel')
		<?php
			$users = User::all();
			foreach ($users as $user) {
				echo '<div class="panel panel-primary">
				<div class="panel-heading">
					<h1 class="panel-title">';echo $user->first_name; echo'</h1>
				</div>
				<div class="panel-body">
					<div class="col-sm-3">
						<a href="#" class="thumbnail"> <img src="/images/fb.jpg" alt="Generic placeholder thumbnail"> </a>
					</div>
					<div class="col-sm-9">';
						echo "<strong>".$user->first_name." ".$user->last_name."</strong>";
						echo "<br/>";
						echo $user->username;
						echo "<br/>";
						echo $user->email;
					echo '</div>
				</div>
			</div>';
			}
		?>
@stop