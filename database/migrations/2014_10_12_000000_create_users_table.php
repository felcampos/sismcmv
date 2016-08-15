<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_usuario_id');
            $table->integer('cargo_id')->nullable();
            $table->integer('setor_id')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('txt_email_particular')->nullable();
            $table->date('dte_nascimento')->nullable();
            $table->string('txt_ramal', 4)->nullable();
            $table->string('txt_celular', 9)->nullable();
            $table->string('txt_nome_foto')->nullable();
            $table->string('txt_caminho_foto')->nullable();
            $table->string('txt_caminho_avatar')->nullable();
            $table->string('txt_telefone_residencial', 8)->nullable();
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
