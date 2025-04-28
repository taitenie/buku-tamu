<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('survey_answers', function (Blueprint $table) {
            $table->id();
            $table->string('session_id');
            $table->tinyInteger('jawaban_1')->nullable();
            $table->tinyInteger('jawaban_2')->nullable();
            $table->tinyInteger('jawaban_3')->nullable();
            $table->tinyInteger('jawaban_4')->nullable();
            $table->tinyInteger('jawaban_5')->nullable();
            $table->tinyInteger('jawaban_6')->nullable();
            $table->tinyInteger('jawaban_7')->nullable();
            $table->tinyInteger('jawaban_8')->nullable();
            $table->tinyInteger('jawaban_9')->nullable();
            $table->tinyInteger('jawaban_10')->nullable();
            $table->tinyInteger('jawaban_11')->nullable();
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survey_answers');
    }
};
