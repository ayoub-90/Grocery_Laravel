<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Username');
            $table->string('Email')->unique();
            $table->string('Password');
            $table->string('Adresse');
            $table->string('Telephone');
            $table->bigInteger('NombreOrdres')->default('0');
            $table->string('NomMagasin')->nullable();
            $table->string('Photo',300)->default('UserImage/1684094913unknown-person.jpg');
            $table->integer('Role_as');
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
        Schema::dropIfExists('comptes');
    }
};
