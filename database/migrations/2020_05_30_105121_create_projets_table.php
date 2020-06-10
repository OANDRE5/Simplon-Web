<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->bigIncrements('idPro');
            $table->string('libelle');
            $table->string('client');
            $table->string('mission');
            $table->string('technoUtilisees');
            $table->string('duree');
            $table->timestamps();
        });
        // Schema::create('apprenant_projet', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     // $table->integer('apprenant_id')->unsigned()->index();
            // $table->integer('projet_id')->unsigned()->index();
            // $table->foreign('apprenant_id')->references('id')->on('apprenants')->onDelete('cascade');
            // $table->foreign('projet_id')->references('id')->on('projets')->onDelete('cascade');
        //});
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projets');
    }
}
