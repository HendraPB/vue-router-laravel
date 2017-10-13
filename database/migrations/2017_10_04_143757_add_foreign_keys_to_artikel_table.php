<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToArtikelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('artikel', function(Blueprint $table)
		{
			$table->foreign('user_id', 'artikel_ibfk_1')->references('user_id')->on('user')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('artikel', function(Blueprint $table)
		{
			$table->dropForeign('artikel_ibfk_1');
		});
	}

}
