<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOspfAreasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ospf_areas', function(Blueprint $table)
		{
			$table->integer('device_id');
			$table->string('ospfAreaId', 32);
			$table->string('ospfAuthType', 64);
			$table->string('ospfImportAsExtern', 128);
			$table->integer('ospfSpfRuns');
			$table->integer('ospfAreaBdrRtrCount');
			$table->integer('ospfAsBdrRtrCount');
			$table->integer('ospfAreaLsaCount');
			$table->integer('ospfAreaLsaCksumSum');
			$table->string('ospfAreaSummary', 64);
			$table->string('ospfAreaStatus', 64);
			$table->unique(['device_id','ospfAreaId'], 'device_area');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ospf_areas');
	}

}
