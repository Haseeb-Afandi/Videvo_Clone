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
        Schema::create('audio', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->integer('author_id');
            $table->string('clip_type');
            $table->string('Category');
            $table->string('Category2')->nullable();
            $table->string('class')->nullable();
            $table->string('license_type')->nullable();
            $table->string('resolution')->nullable();
            $table->string('duration')->nullable();
            $table->string('Audio')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
