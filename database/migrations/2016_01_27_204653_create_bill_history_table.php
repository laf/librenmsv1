<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBillHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bill_history', function(Blueprint $table)
		{
			$table->integer('bill_hist_id', true);
			$table->integer('bill_id')->index('bill_id');
			$table->timestamp('updated')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('bill_datefrom');
			$table->dateTime('bill_dateto');
			$table->text('bill_type', 65535);
			$table->bigInteger('bill_allowed');
			$table->bigInteger('bill_used');
			$table->bigInteger('bill_overuse');
			$table->decimal('bill_percent', 10);
			$table->bigInteger('rate_95th_in');
			$table->bigInteger('rate_95th_out');
			$table->bigInteger('rate_95th');
			$table->string('dir_95th', 3);
			$table->bigInteger('rate_average');
			$table->bigInteger('rate_average_in');
			$table->bigInteger('rate_average_out');
			$table->bigInteger('traf_in');
			$table->bigInteger('traf_out');
			$table->bigInteger('traf_total');
			$table->binary('pdf')->nullable();
			$table->unique(['bill_id','bill_datefrom','bill_dateto'], 'unique_index');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bill_history');
	}

}
