<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();

            $table->string('name', 256);
            $table->unsignedInteger('year')->nullable();
            $table->mediumText('description')->nullable();
            $table->string('link', 512)->nullable();
            $table->unsignedBigInteger('isbn')->nullable();
            $table->enum('type', ['publication', 'translation', 'media']);
            $table->foreignId('program_id')->nullable()->constrained();
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
        Schema::dropIfExists('publications');
    }
}
