<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOspfInstancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ospf_instances', function(Blueprint $table)
		{
			$table->integer('device_id');
			$table->integer('ospf_instance_id');
			$table->string('ospfRouterId', 32);
			$table->string('ospfAdminStat', 32);
			$table->string('ospfVersionNumber', 32);
			$table->string('ospfAreaBdrRtrStatus', 32);
			$table->string('ospfASBdrRtrStatus', 32);
			$table->integer('ospfExternLsaCount');
			$table->integer('ospfExternLsaCksumSum');
			$table->string('ospfTOSSupport', 32);
			$table->integer('ospfOriginateNewLsas');
			$table->integer('ospfRxNewLsas');
			$table->integer('ospfExtLsdbLimit')->nullable();
			$table->integer('ospfMulticastExtensions')->nullable();
			$table->integer('ospfExitOverflowInterval')->nullable();
			$table->string('ospfDemandExtensions', 32)->nullable();
			$table->unique(['device_id','ospf_instance_id'], 'device_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ospf_instances');
	}

}
