<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProxmoxPortsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proxmox_ports', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('vm_id');
			$table->string('port', 10);
			$table->timestamp('last_seen')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->unique(['vm_id','port'], 'vm_port');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('proxmox_ports');
	}

}
