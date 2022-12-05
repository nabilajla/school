<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGradesTable extends Migration {

	public function up()
	{
		Schema::create('Grades', function(Blueprint $table) {
			$table->increments('id');
			$table->string('Name', 30);
			$table->text('Note');
            $table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Grades');
	}
}
