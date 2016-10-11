<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCausesTable extends Migration {

	public function up()
	{
		Schema::create('causes', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 200);
			$table->string('description', 4000);
			$table->integer('location_id')->index();
			$table->date('start_date');
			$table->date('end_date');
			$table->integer('user_create_id')->index();
			$table->timestamps();
			$table->softDeletes();			
		});
	}

	public function down()
	{
		Schema::drop('causes');
	}
}