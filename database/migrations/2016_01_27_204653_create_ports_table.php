<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePortsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ports', function(Blueprint $table)
		{
			$table->integer('port_id', true);
			$table->integer('device_id')->default(0);
			$table->string('port_descr_type')->nullable();
			$table->string('port_descr_descr')->nullable();
			$table->string('port_descr_circuit')->nullable();
			$table->string('port_descr_speed', 32)->nullable();
			$table->string('port_descr_notes')->nullable();
			$table->string('ifDescr')->nullable()->index('if_2');
			$table->string('ifName', 64)->nullable();
			$table->string('portName', 128)->nullable();
			$table->integer('ifIndex')->nullable()->default(0);
			$table->bigInteger('ifSpeed')->nullable();
			$table->string('ifConnectorPresent', 12)->nullable();
			$table->string('ifPromiscuousMode', 12)->nullable();
			$table->integer('ifHighSpeed')->nullable();
			$table->string('ifOperStatus', 16)->nullable();
			$table->string('ifAdminStatus', 16)->nullable();
			$table->string('ifDuplex', 12)->nullable();
			$table->integer('ifMtu')->nullable();
			$table->text('ifType', 65535)->nullable();
			$table->text('ifAlias', 65535)->nullable();
			$table->text('ifPhysAddress', 65535)->nullable();
			$table->string('ifHardType', 64)->nullable();
			$table->timestamp('ifLastChange')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('ifVlan', 8)->default('');
			$table->string('ifTrunk', 8)->nullable()->default('');
			$table->integer('ifVrf')->default(0);
			$table->integer('counter_in')->nullable();
			$table->integer('counter_out')->nullable();
			$table->boolean('ignore')->default(0);
			$table->boolean('disabled')->default(0);
			$table->boolean('detailed')->default(0);
			$table->boolean('deleted')->default(0);
			$table->string('pagpOperationMode', 32)->nullable();
			$table->string('pagpPortState', 16)->nullable();
			$table->string('pagpPartnerDeviceId', 48)->nullable();
			$table->string('pagpPartnerLearnMethod', 16)->nullable();
			$table->integer('pagpPartnerIfIndex')->nullable();
			$table->integer('pagpPartnerGroupIfIndex')->nullable();
			$table->string('pagpPartnerDeviceName', 128)->nullable();
			$table->string('pagpEthcOperationMode', 16)->nullable();
			$table->string('pagpDeviceId', 48)->nullable();
			$table->integer('pagpGroupIfIndex')->nullable();
			$table->bigInteger('ifInUcastPkts')->nullable();
			$table->bigInteger('ifInUcastPkts_prev')->nullable();
			$table->bigInteger('ifInUcastPkts_delta')->nullable();
			$table->integer('ifInUcastPkts_rate')->nullable();
			$table->bigInteger('ifOutUcastPkts')->nullable();
			$table->bigInteger('ifOutUcastPkts_prev')->nullable();
			$table->bigInteger('ifOutUcastPkts_delta')->nullable();
			$table->integer('ifOutUcastPkts_rate')->nullable();
			$table->bigInteger('ifInErrors')->nullable();
			$table->bigInteger('ifInErrors_prev')->nullable();
			$table->bigInteger('ifInErrors_delta')->nullable();
			$table->integer('ifInErrors_rate')->nullable();
			$table->bigInteger('ifOutErrors')->nullable();
			$table->bigInteger('ifOutErrors_prev')->nullable();
			$table->bigInteger('ifOutErrors_delta')->nullable();
			$table->integer('ifOutErrors_rate')->nullable();
			$table->bigInteger('ifInOctets')->nullable();
			$table->bigInteger('ifInOctets_prev')->nullable();
			$table->bigInteger('ifInOctets_delta')->nullable();
			$table->integer('ifInOctets_rate')->nullable();
			$table->bigInteger('ifOutOctets')->nullable();
			$table->bigInteger('ifOutOctets_prev')->nullable();
			$table->bigInteger('ifOutOctets_delta')->nullable();
			$table->integer('ifOutOctets_rate')->nullable();
			$table->integer('poll_time')->nullable();
			$table->integer('poll_prev')->nullable();
			$table->integer('poll_period')->nullable();
			$table->unique(['device_id','ifIndex'], 'device_ifIndex');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ports');
	}

}
