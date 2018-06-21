<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateEntidadesTable.
 */
class CreateEntidadesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('entidades', function(Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('nome');
			$table->string('descricao');
			$table->tinyInteger('ativo')->default(1);
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
		Schema::drop('entidades');
	}
}
