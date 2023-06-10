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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('prod_id');
            $table->mediumText('headline')->nullable();
            $table->string('Media',500)->nullable();
            $table->longText('Writen_review')->nullable();
            $table->string('start_rated');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('comptes');
            $table->foreign('prod_id')->references('id')->on('produits');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratings');
    }
};
