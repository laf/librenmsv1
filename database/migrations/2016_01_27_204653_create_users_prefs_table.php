<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersPrefsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_prefs', function(Blueprint $table)
		{
			$table->integer('user_id')->primary();
			$table->string('pref', 32)->index('pref');
			$table->string('value', 128);
			$table->unique(['user_id','pref'], 'user_id.pref');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_prefs');
	}

}
