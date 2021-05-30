<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 255)->nullable();
            $table->string('identifiant_unique', 255)->nullable();
            $table->string('secteur', 255)->nullable();
            $table->string('adresse', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->integer('phone')->unsigned()->nullable();
            $table->text('description', 255)->nullable();
            $table->integer('statut')->nullable();
            $table->string('image_path', 255)->nullable();

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
        Schema::dropIfExists('entreprises');
    }
}
