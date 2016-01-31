<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePortsVlansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ports_vlans', function(Blueprint $table)
		{
			$table->integer('port_vlan_id', true);
			$table->integer('device_id');
			$table->integer('port_id');
			$table->integer('vlan');
			$table->integer('baseport');
			$table->bigInteger('priority');
			$table->string('state', 16);
			$table->integer('cost');
			$table->unique(['device_id','port_id','vlan'], 'unique');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ports_vlans');
	}

}
