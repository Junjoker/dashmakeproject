<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_taches', function (Blueprint $table) {
            $table->integer('FK_userid',11)->unsigned();
            $table->foreign('FK_userid',11)
            ->references('userid')->on('users')
            ->onDelete('cascade');
            $table->integer('FK_idtache',11)->primary()->index();
            $table->foreign('FK_idtache',11)
            ->references('id_tache')->on('taches')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_taches');
    }
}
