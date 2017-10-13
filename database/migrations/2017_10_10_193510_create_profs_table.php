<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->boolean('sexe');
            $table->date('date_naissance');
            $table->string('adresse');
            $table->string('email');
            $table->string('tel');
            $table->string('fixe');
            $table->string('photo');
            $table->string('ville');
            $table->string('type');
            $table->string('nationalite');
            $table->string('cin');
            $table->date('date-embauche');
            $table->string('nbr_année_expérience');
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
        Schema::dropIfExists('profs');
    }
}
