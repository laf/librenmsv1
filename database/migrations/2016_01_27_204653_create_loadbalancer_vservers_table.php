<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLoadbalancerVserversTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('loadbalancer_vservers', function(Blueprint $table)
		{
			$table->integer('classmap_id');
			$table->string('classmap', 128);
			$table->string('serverstate', 64);
			$table->integer('device_id')->index('device_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('loadbalancer_vservers');
	}

}
