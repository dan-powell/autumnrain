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
        Schema::create('aiwork_theme', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Schema::create('aiwork_piece', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('name');
            $table->string('slug')->unique()->index();
            $table->text('description')->nullable();
            $table->string('image');
            $table->string('thumbnail')->nullable();
            $table->string('video')->nullable();
            $table->json('process')->nullable();
            $table->json('metadata')->nullable();
            $table->timestamps();
        });

        Schema::create('aiwork_piece_theme', function (Blueprint $table) {
            $table->foreignUlid('piece_id')->nullable()->constrained(table: 'aiwork_piece', column: 'id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignUlid('theme_id')->nullable()->constrained(table: 'aiwork_theme', column: 'id')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aiwork_piece_theme');
        Schema::dropIfExists('aiwork_piece');
        Schema::dropIfExists('aiwork_theme');
    }
};
