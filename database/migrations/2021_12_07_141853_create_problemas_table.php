<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProblemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problemas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
			$table->string('titulo');
			$table->string('endereco');
			$table->string('descricao', 500);
			$table->timestamp('data');
            $table->boolean('concluido')->default(0);
        });

        // Schema::table('problemas', function (Blueprint $table) {
        //     $table->boolean('concluido');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('problemas');
    }
}
