<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskmanagerTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('users', function($table) {

	        // Increments method will make a Primary, Auto-Incrementing field.
	        // Most tables start off this way
	        $table->increments('id');

	        // This generates two columns: `created_at` and `updated_at` to
	        // keep track of changes to a row
	        $table->timestamps();

	        // The rest of the fields...
	        $table->string('fname');
	        $table->string('lname');
	        $table->string('email');
	        $table->boolean('remember_token');
	        $table->string('password');


    	});


    	Schema::create('tasks', function($table) {

    		# PK
    		$table->increments('id');

    		$table->timestamps();


    		$table->string('title');
			$table->integer('user_id')->unsigned(); # Important! FK has to be unsigned because the PK it will reference is auto-incrementing
			$table->date('start_date');
			$table->date('due_date');
			$table->text('description');
			$table->tinyInteger('completeness');


			# FK
			$table->foreign('user_id')->references('id')->on('users');

    	});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('tasks');
		Schema::drop('users');
	}

}
