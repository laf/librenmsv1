<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIpv4AddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ipv4_addresses', function(Blueprint $table)
		{
			$table->integer('ipv4_address_id', true);
			$table->string('ipv4_address', 32);
			$table->integer('ipv4_prefixlen');
			$table->string('ipv4_network_id', 32);
			$table->integer('port_id')->index('interface_id_2');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ipv4_addresses');
	}

}
