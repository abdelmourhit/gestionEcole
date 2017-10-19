<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricule',60)->nullable();
            $table->string('type',80)->nullable();
            $table->string('marque',70)->nullable();
            $table->integer('nbr_place')->nullable();
            $table->string('carburant',60)->nullable();
            $table->float('prix')->nullable();
            $table->string('chauffeur')->nullable();
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
        Schema::dropIfExists('vehicules');
    }
}
