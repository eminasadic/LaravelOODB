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
        Schema::create('pregleds', function (Blueprint $table) {
            $table->id();
            $table->integer('doktor1');
            $table->integer('pacijent1');
            $table->integer('bolest1');
            $table->integer('lijek1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pregleds');
    }
};
