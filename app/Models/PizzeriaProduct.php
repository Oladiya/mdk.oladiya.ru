<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation::morphMap([
    'pizzeria_pizzas' => PizzeriaPizza::class,
]);

class PizzeriaProduct extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->morphTo(null, 'productable_type', 'productable_id');
    }

    public function ingredients(){
        return $this->belongsToMany(PizzeriaIngredient::class, 'pizzeria_ingredient_product', 'product_id', 'ingredient_id');
    }
}
