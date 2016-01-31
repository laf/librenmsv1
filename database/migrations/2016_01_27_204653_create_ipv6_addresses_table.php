<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIpv6AddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ipv6_addresses', function(Blueprint $table)
		{
			$table->integer('ipv6_address_id', true);
			$table->string('ipv6_address', 128);
			$table->string('ipv6_compressed', 128);
			$table->integer('ipv6_prefixlen');
			$table->string('ipv6_origin', 16);
			$table->string('ipv6_network_id', 128);
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
		Schema::drop('ipv6_addresses');
	}

}
