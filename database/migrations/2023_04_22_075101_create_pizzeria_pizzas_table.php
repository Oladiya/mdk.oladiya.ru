<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pizzeria_pizzas', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('price')->nullable();
            $table->unsignedInteger('weight')->nullable(false);
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
        Schema::dropIfExists('pizzeria_pizzas');
    }
};
