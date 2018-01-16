<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exams', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_class')->nullable();
			$table->integer('id_students')->nullable();
			$table->string('description')->nullable();
			$table->string('result', 20)->nullable();
			$table->integer('is_remidi')->nullable();
			$table->integer('id_lesson')->nullable();
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
		Schema::drop('exams');
	}

}
