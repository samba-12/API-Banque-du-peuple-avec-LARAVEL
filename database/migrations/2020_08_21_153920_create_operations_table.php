<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Operations', function (Blueprint $table) {
            $table->increments('idOperation');
            $table->integer('numeroCompte_id')->unsigned();
            $table->foreign('numeroCompte_id')->references('numeroCompte')->on('Entreprises');
            $table->string('Nomentreprise');
            $table->string('typeoperation');
            $table->string('montant');
            $table->string('solde');
            $table->dateTime('dateoperation');
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
        Schema::dropIfExists('operations');
    }
}
