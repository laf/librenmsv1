<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVrfsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vrfs', function(Blueprint $table)
		{
			$table->integer('vrf_id', true);
			$table->string('vrf_oid', 256);
			$table->string('vrf_name', 128)->nullable();
			$table->string('mplsVpnVrfRouteDistinguisher', 128)->nullable();
			$table->text('mplsVpnVrfDescription', 65535);
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
		Schema::drop('vrfs');
	}

}
