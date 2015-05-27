<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoKriminalitasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('info_kriminalitas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('kecamatan_id');
			$table->integer('kelurahan_id');
			$table->integer('namakriminalitas_id');
			$table->text('informasi');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('info_kriminalitas');
	}

}
