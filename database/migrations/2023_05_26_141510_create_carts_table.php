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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_prod');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('qte')->default(1);
            $table->float('price');

            $table->foreign('user_id')->references('id')->on('comptes');
            $table->foreign('id_prod')->references('id')->on('produits');

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
        Schema::dropIfExists('carts');
    }
};
