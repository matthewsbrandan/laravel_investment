<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUsersTable.
 */
class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			
			// Personal data
			$table->char('cpf',11)->unique()->nullable();
			$table->string('name',50);
			$table->char('phone',11);
			$table->date('birth')->nullable();
			$table->char('gender',1)->nullable();
			$table->text('notes')->nullable();

			// Authentication data
			$table->string('email',80)->unique();
			$table->string('password',254)->nullable();

			// Permission
			$table->string('status')->default('active');
			$table->string('permission')->default('app.user');

			$table->rememberToken();
			
			// Timestamps automatically generate the created_at and updated_at fields
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table) {
			// Delete relationships before deleting the table
		});

		Schema::drop('users');
	}
}
