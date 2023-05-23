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
        Schema::create('mp_verstka_html_works', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('uri')->unique();
            $table->string('title');
            $table->longText('content')->nullable();
            $table->string('mp_verstka_html_theme_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mp_verstka_html_works');
    }
};
