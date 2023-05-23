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
        Schema::create('pizzeria_ingredient_product', function (Blueprint $table) {
            $table->unsignedInteger('ingredient_id')->nullable(false);
            $table->unsignedInteger('product_id')->nullable();
            $table->unsignedInteger('product_type_id')->nullable();
            $table->unsignedInteger('quantity')->nullable();
            $table->unsignedInteger('price')->nullable();
            $table->string('size')->nullable();
            $table->string('dough_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pizzeria_ingredient_product');
    }
};
