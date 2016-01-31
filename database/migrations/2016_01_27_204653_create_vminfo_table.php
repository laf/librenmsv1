<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVminfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vminfo', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('device_id')->index('device_id');
			$table->string('vm_type', 16)->default('vmware');
			$table->integer('vmwVmVMID')->index('vmwVmVMID');
			$table->string('vmwVmDisplayName', 128);
			$table->string('vmwVmGuestOS', 128);
			$table->integer('vmwVmMemSize');
			$table->integer('vmwVmCpus');
			$table->string('vmwVmState', 128);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vminfo');
	}

}
