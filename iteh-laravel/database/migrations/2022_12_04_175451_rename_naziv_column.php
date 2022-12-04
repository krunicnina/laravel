<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameNazivColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('serijas', function (Blueprint $table) {
            $table->renameColumn('naziv', 'naslov');
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
            $table->renameColumn('naslov', 'naziv');
        });
    }
}
