<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Exchanges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchanges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('commentaire');
            $table->dateTime('date_echange');
            
            $table->unsignedBigInteger('id_clients');
            $table->foreign('id_clients')->references('id')->on('clients');
         
            $table->unsignedBigInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users');

            $table->unsignedBigInteger('id_exchanges_types');
            $table->foreign('id_exchanges_types')->references('id')->on('exchanges_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exchanges', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['id_clients']);
            $table->dropIfExists('id_clients');
            $table->dropForeign(['id_users']);
            $table->dropIfExists('id_users');
            $table->dropForeign(['id_exchanges_types']);
            $table->dropIfExists('id_exchanges_types');
            Schema::enableForeignKeyConstraints();
        });

        Schema::dropIfExists('exchanges');

    }
}
