<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecretairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secretaires', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom',100)->nullable();
            $table->string('prenom',100)->nullable();
            $table->boolean('sexe')->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('adresse')->nullable();
            $table->string('email',100)->nullable();
            $table->string('tel',50)->nullable();
            $table->string('fixe',50)->nullable();
            $table->string('photo')->nullable();
            $table->string('ville',50)->nullable();
            $table->string('type',50)->nullable();
            $table->string('nationalite',50)->nullable();
            $table->string('cin',50)->nullable();
            $table->date('date_embauche')->nullable();
            $table->string('nbr_annee_experience',10)->nullable();
            $table->float('salaire')->nullable();
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
        Schema::dropIfExists('secretaires');
    }
}
