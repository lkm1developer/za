<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('username')->unique();
			$table->string('email')->unique();
			$table->string('name');
			$table->string('password');
			$table->rememberToken();
			$table->enum('role', array('user', 'redac', 'admin'));
			$table->string('gender');
			$table->string('sexualorientation');
			$table->string('state')->default(false);;			
			$table->string('day');
			$table->string('month');
			$table->string('year');
			$table->string('dob')->default(false);
			$table->string('city')->default(false);
			$table->string('country')->default(false);;
			$table->string('zip')->default(false);;
			$table->string('phone')->default(false);;
			$table->boolean('valid')->default(false);
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}
