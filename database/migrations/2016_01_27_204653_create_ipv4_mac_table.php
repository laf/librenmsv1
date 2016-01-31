<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIpv4MacTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ipv4_mac', function(Blueprint $table)
		{
			$table->integer('port_id')->index('port_id');
			$table->string('mac_address', 32)->index('mac_address');
			$table->string('ipv4_address', 32);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ipv4_mac');
	}

}
