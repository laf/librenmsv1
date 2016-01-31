<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMacAccountingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mac_accounting', function(Blueprint $table)
		{
			$table->integer('ma_id', true);
			$table->integer('port_id')->index('interface_id_2');
			$table->string('mac', 32);
			$table->string('in_oid', 128);
			$table->string('out_oid', 128);
			$table->integer('bps_out');
			$table->integer('bps_in');
			$table->bigInteger('cipMacHCSwitchedBytes_input')->nullable();
			$table->bigInteger('cipMacHCSwitchedBytes_input_prev')->nullable();
			$table->bigInteger('cipMacHCSwitchedBytes_input_delta')->nullable();
			$table->integer('cipMacHCSwitchedBytes_input_rate')->nullable();
			$table->bigInteger('cipMacHCSwitchedBytes_output')->nullable();
			$table->bigInteger('cipMacHCSwitchedBytes_output_prev')->nullable();
			$table->bigInteger('cipMacHCSwitchedBytes_output_delta')->nullable();
			$table->integer('cipMacHCSwitchedBytes_output_rate')->nullable();
			$table->bigInteger('cipMacHCSwitchedPkts_input')->nullable();
			$table->bigInteger('cipMacHCSwitchedPkts_input_prev')->nullable();
			$table->bigInteger('cipMacHCSwitchedPkts_input_delta')->nullable();
			$table->integer('cipMacHCSwitchedPkts_input_rate')->nullable();
			$table->bigInteger('cipMacHCSwitchedPkts_output')->nullable();
			$table->bigInteger('cipMacHCSwitchedPkts_output_prev')->nullable();
			$table->bigInteger('cipMacHCSwitchedPkts_output_delta')->nullable();
			$table->integer('cipMacHCSwitchedPkts_output_rate')->nullable();
			$table->integer('poll_time')->nullable();
			$table->integer('poll_prev')->nullable();
			$table->integer('poll_period')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mac_accounting');
	}

}
