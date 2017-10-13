<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArtikelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('artikel', function(Blueprint $table)
		{
			$table->integer('artikel_id', true);
			$table->integer('user_id')->index('user_id');
			$table->string('artikel_judul', 100);
			$table->text('artikel_isi', 65535);
			$table->string('artikel_gambar', 100);
			$table->date('created_at')->nullable();
			$table->date('updated_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('artikel');
	}

}
