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
        Schema::rename('ai52_theme', 'aiworks_theme');
        Schema::rename('ai52_piece', 'aiworks_piece');

        Schema::table('aiworks_theme', function (Blueprint $table) {
            $table->dropColumn('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('aiworks_theme', 'ai52_theme');
        Schema::rename('aiworks_piece', 'ai52_piece');

        Schema::table('ai52_theme', function (Blueprint $table) {
            $table->date('date');
        });
    }
};
