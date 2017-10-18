<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateControlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle',80)->nullable();
            $table->date('date')->nullable();
            $table->float('duree')->nullable();
            $table->string('periode',10)->nullable();
            $table->string('matiere',50)->nullable();
            $table->string('prof',50)->nullable();
            $table->string('classe',10)->nullable();
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
        Schema::dropIfExists('controles');
    }
}
