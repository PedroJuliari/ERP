<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome',50);
            $table->string('email')->unique();
            $table->string('celular',12);
            $table->string('sexo',1);
            $table->string('cargo',100);
            $table->string('cpf',15)->unique();
            $table->string('fone',12);
            $table->string('endereco',100);
            $table->string('numero',4);
            $table->string('cidade',100);
            $table->date('data_registro');
            $table->string('bairro',50);
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
        Schema::dropIfExists('funcionarios');
    }
}
