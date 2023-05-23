<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PizzeriaOrderPizzaAddIngredient extends Model
{
    use HasFactory;

    protected $fillable = [
        'pizzeria_order_pizza_id',
        'pizzeria_ingredient_id',
    ];
}
