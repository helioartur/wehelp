<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCauseOwnersTable extends Migration {

	public function up()
	{
		Schema::create('cause_owners', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->index();
			$table->integer('cause_id')->unsigned()->index();
			$table->integer('user_create_id')->index();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('cause_owners');
	}
}