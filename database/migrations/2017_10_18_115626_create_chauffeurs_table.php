<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChauffeursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chauffeurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom',30)->nullable();
            $table->string('prenom',30)->nullable();
            $table->boolean('sexe')->nullable();
            $table->date('date_naiss')->nullable();
            $table->string('lieu_naiss')->nullable();
            $table->string('tel',20)->nullable();
            $table->string('nationnalite',50)->nullable();
            $table->string('adresse')->nullable();
            $table->string('ville',100)->nullable();
            $table->string('cin',30)->nullable();
            $table->date('date_recrutement')->nullable();
            $table->string('type_permi')->nullable();
            $table->string('vehicule')->nullable();
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
        Schema::dropIfExists('chauffeurs');
    }
}
