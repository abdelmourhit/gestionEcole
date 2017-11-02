<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre',100)->nullable();
            $table->string('auteur',100)->nullable();
            $table->string('edition',100)->nullable();
            $table->date('date_edition')->nullable();
            $table->string('type',100)->nullable();
            $table->integer('quantite')->nullable();
           // $table->binary('image')->nullable();

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
        Schema::dropIfExists('livres');
    }
}
