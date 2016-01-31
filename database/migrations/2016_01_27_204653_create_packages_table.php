<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePackagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('packages', function(Blueprint $table)
		{
			$table->integer('pkg_id', true);
			$table->integer('device_id')->index('device_id');
			$table->string('name', 64);
			$table->string('manager', 16)->default('1');
			$table->boolean('status');
			$table->string('version', 64);
			$table->string('build', 64);
			$table->string('arch', 16);
			$table->bigInteger('size')->nullable();
			$table->unique(['device_id','name','manager','arch','version','build'], 'unique_key');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('packages');
	}

}
