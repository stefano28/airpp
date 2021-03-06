<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonazioniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donazioni', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('paymentID');
            $table->string('name');
            $table->string('surname');
            $table->string('cf');
            $table->string('cap');
            $table->string('comune');
            $table->string('via');
            $table->string('civico');
            $table->string('provincia');
            $table->string('email');
            $table->boolean('dim');
            $table->string('dname')->nullable();
            $table->string('dsurname')->nullable();
            $table->integer('amount');
            $table->boolean('success');
            $table->dateTime('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donations');
    }
}
