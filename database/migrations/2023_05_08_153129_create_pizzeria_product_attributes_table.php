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
        Schema::create('pizzeria_product_attributes', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('product_main_id');
            $table->string('size')->nullable();
            $table->string('dough_type')->nullable();
            $table->string('product_type')->nullable(false);
            $table->unsignedInteger('product_id')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pizzeria_product_attributes');
    }
};
