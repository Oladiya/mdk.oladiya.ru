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
        Schema::create('pizzeria_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('pizzeria_user_id')->nullable();
            $table->string('address');
            $table->string('tel');
            $table->string('status')->default('created');
            $table->timestamps();
        });

        Schema::create('pizzeria_order_pizzas', function (Blueprint $table){
            $table->id();
            $table->unsignedInteger('pizzeria_order_id');
            $table->unsignedInteger('pizzeria_pizza_id');
            $table->unsignedInteger('amount');
            $table->unsignedInteger('size');
            $table->unsignedInteger('doughType');
            $table->unsignedInteger('price');
            $table->timestamps();
        });

        Schema::create('pizzeria_order_pizza_remove_ingredients', function (Blueprint $table) {
            $table->unsignedInteger('pizzeria_order_pizza_id');
            $table->unsignedInteger('pizzeria_ingredient_id');
            $table->id();
            $table->timestamps();
        });

        Schema::create('pizzeria_order_pizza_add_ingredients', function (Blueprint $table) {
            $table->unsignedInteger('pizzeria_order_pizza_id');
            $table->unsignedInteger('pizzeria_ingredient_id');
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pizzeria_orders');
        Schema::dropIfExists('pizzeria_order_pizzas');
        Schema::dropIfExists('pizzeria_order_pizza_remove_ingredients');
        Schema::dropIfExists('pizzeria_order_pizza_add_ingredients');
    }
};
