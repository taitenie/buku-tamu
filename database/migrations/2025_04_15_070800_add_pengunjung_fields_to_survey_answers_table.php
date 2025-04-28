<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('survey_answers', function (Blueprint $table) {
            $table->string('nama')->nullable();
            $table->integer('umur')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('jenis_kelamin', 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('survey_answers', function (Blueprint $table) {
            //
        });
    }
};
