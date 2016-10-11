<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCauseResultsTable extends Migration {

	public function up()
	{
		Schema::create('cause_results', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 200);
			$table->string('description', 4000);
			$table->integer('user_create_id')->index();
			$table->integer('cause_id')->unsigned()->index();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('cause_results');
	}
}