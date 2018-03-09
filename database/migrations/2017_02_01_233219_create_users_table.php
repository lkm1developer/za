<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name')->unique();
			$table->string('email')->unique();
			$table->string('password');
			$table->rememberToken();
			$table->enum('role', array('user', 'redac', 'admin'));
			$table->string('firstname');
			$table->string('lastname');
			$table->string('state');
			
			$table->string('address1');
			$table->string('address2');
			$table->string('city');
			$table->string('country');
			$table->string('zip');
			$table->string('phone');
			$table->boolean('valid')->default(false);
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}
