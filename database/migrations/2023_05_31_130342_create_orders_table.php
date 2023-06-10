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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('id_address');
            $table->longText('instructions');
            $table->unsignedBigInteger('id_payment');
            $table->unsignedBigInteger('id_prod');
            $table->float('prix_total');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('comptes');
            $table->foreign('id_prod')->references('id')->on('produits');

            $table->foreign('id_address')->references('id')->on('adressusers');
            $table->foreign('id_payment')->references('id')->on('cards');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
