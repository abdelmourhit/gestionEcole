<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleves', function (Blueprint $table) {
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
            $table->string('cne',50)->nullable();
            $table->string('matricule',50)->nullable();
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
        Schema::dropIfExists('eleves');
    }
}
