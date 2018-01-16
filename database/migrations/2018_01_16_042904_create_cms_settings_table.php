<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCmsSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cms_settings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->nullable();
			$table->text('content', 65535)->nullable();
			$table->string('content_input_type')->nullable();
			$table->string('dataenum')->nullable();
			$table->string('helper')->nullable();
			$table->timestamps();
			$table->string('group_setting')->nullable();
			$table->string('label')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cms_settings');
	}

}
