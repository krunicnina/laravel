<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSerijeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serijas', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->string('jezik');
            $table->integer('premijera');
            $table->foreignId('reziser_id')->constrained('rezisers');
            $table->foreignId('zanr_id')->constrained('zanrs');
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
        Schema::dropIfExists('serijas');
    }
}
