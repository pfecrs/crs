<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
         
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_naissance')->nullable();
            $table->string('email')->unique();
            $table->integer('num_telephone')->unique();
            $table->string('cin')->unique();
            $table->string('entreprise')->nullable();
            $table->integer('nb_docs')->nullable();
            $table->date('date_expiration')->nullable();
            $table->string('password');
            $table->boolean('is_super')->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('clients');
    }
}
