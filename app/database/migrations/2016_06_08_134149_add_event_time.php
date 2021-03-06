<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEventTime extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('events',function(Blueprint $table)
		{
			$table->date('event_date');
			$table->time('event_time');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('events',function(Blueprint $table)
		{
			$table->dropColumn('event_date');
			$table->dropColumn('event_time');
		});
	}

}
