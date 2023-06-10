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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->bigInteger('idc_cat');
            $table->string('Name');
            $table->float('weight');
            $table->bigInteger('Utnits');
            $table->string('proPhoto',300);
            $table->longText('Description');
            $table->boolean('Instock');
            $table->string('Codeprod');
            $table->string('CodeSku');
            $table->string('status');
            $table->float('Regular_price');
            $table->float('Sale_price');
            $table->mediumText('meta_title');
            $table->mediumText('meta_description');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('comptes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
};
