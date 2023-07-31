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
        Schema::create('audior', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('author')->nullable();
            $table->string('type')->nullable();
            $table->string('clip_type')->nullable();
            $table->string('Category')->nullable();
            $table->string('Category2')->nullable();
            $table->string('license_type')->nullable();
            $table->string('resolution')->nullable();
            $table->string('duration')->nullable();
            $table->string('Video')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('size')->nullable();
            $table->string('format')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audior');
    }
};
