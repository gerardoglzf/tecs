<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			$table->integer('id_usuario', true);
			$table->string('nombre');
			$table->string('apellido');
			$table->text('avatar', 65535);
			$table->string('correo');
			$table->string('facebook');
			$table->string('num_cel');
			$table->string('nom_usuario')->unique('nom_usuario_UNIQUE');
			$table->string('password');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuarios');
	}

}
