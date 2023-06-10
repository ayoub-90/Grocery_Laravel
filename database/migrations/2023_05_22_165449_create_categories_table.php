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
        Schema::create('categories', function (Blueprint $table) {
            $table->id('idcat');
            $table->unsignedBigInteger('user_id');
            $table->string('CategoryName');
            $table->dateTime('Date');
            $table->integer('NumberOfProducts');
            $table->string('CatPhoto',300);
            $table->longText('Description');
            $table->boolean('status');
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
        Schema::dropIfExists('categories');
    }
};
