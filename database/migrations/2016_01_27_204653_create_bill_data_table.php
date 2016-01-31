<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBillDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bill_data', function(Blueprint $table)
		{
			$table->integer('bill_id')->index('bill_id');
			$table->dateTime('timestamp');
			$table->integer('period');
			$table->bigInteger('delta');
			$table->bigInteger('in_delta');
			$table->bigInteger('out_delta');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bill_data');
	}

}
