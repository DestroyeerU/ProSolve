<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificacao', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('usuario_destino_id');
            $table->unsignedBigInteger('problema_id');
            $table->string('mensagem');
            $table->timestamp('data')->useCurrent();
            $table->timestamps();

            /* $table->foreign('usuario_destino_id')->references('id')->on('usuarios'); */
            $table->foreign('problema_id')->references('id')->on('problemas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notificacao');
    }
}
