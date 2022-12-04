<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ObrisiJezikSerije extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('serijas', function (Blueprint $table) {
            $table->dropColumn('jezik');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('serijas', function (Blueprint $table) {
            $table->after('naziv', function ($table) {
                $table->string('jezik');
            });
        });
    }
}
