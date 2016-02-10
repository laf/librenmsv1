<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('user_id', true);
			$table->char('username', 30)->unique('username');
			$table->string('password', 60)->nullable();
			$table->string('realname', 64);
			$table->string('email', 64);
			$table->char('descr', 30);
			$table->boolean('level')->default(0);
			$table->boolean('can_modify_passwd')->default(1);
			$table->string('twofactor');
			$table->integer('dashboard')->default(0);
                        $table->rememberToken();
                        $table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
