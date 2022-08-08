<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ExtendProgramsTableWithImagePath extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('programs', function (Blueprint $table) {
            $table->string('icon', 256);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('programs', function (Blueprint $table) {
            $table->dropColumn('icon');
        });
    }
}
