<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProcessesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('processes', function(Blueprint $table)
		{
			$table->integer('device_id')->index('device_id');
			$table->integer('pid');
			$table->integer('vsz');
			$table->integer('rss');
			$table->string('cputime', 12);
			$table->string('user', 50);
			$table->string('command');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('processes');
	}

}
