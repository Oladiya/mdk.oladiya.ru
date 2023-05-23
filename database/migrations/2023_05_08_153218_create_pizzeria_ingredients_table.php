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
        Schema::create('pizzeria_ingredients', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false)->unique();
            $table->string('img_uri')->nullable()->unique();
            $table->boolean('editable')->default(false);
            $table->unsignedDouble('calories')->nullable(false);
            $table->unsignedDouble('proteins')->nullable(false);
            $table->unsignedDouble('fats')->nullable(false);
            $table->unsignedDouble('carbohydrates')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pizzeria_ingredients');
    }
};
