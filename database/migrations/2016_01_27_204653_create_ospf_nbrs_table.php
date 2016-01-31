<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOspfNbrsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ospf_nbrs', function(Blueprint $table)
		{
			$table->integer('device_id');
			$table->integer('port_id');
			$table->string('ospf_nbr_id', 32);
			$table->string('ospfNbrIpAddr', 32);
			$table->integer('ospfNbrAddressLessIndex');
			$table->string('ospfNbrRtrId', 32);
			$table->integer('ospfNbrOptions');
			$table->integer('ospfNbrPriority');
			$table->string('ospfNbrState', 32);
			$table->integer('ospfNbrEvents');
			$table->integer('ospfNbrLsRetransQLen');
			$table->string('ospfNbmaNbrStatus', 32);
			$table->string('ospfNbmaNbrPermanence', 32);
			$table->string('ospfNbrHelloSuppressed', 32);
			$table->unique(['device_id','ospf_nbr_id'], 'device_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ospf_nbrs');
	}

}
