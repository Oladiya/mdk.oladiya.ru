<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PizzeriaOrderPizza extends Model
{
    use HasFactory;

    protected $fillable = [
        'pizzeria_order_id',
        'pizzeria_pizza_id',
        'amount',
        'size',
        'doughType',
        'price',
    ];

    public function pizza(){
        return $this->belongsTo(PizzeriaPizza::class, 'pizzeria_pizza_id', 'id');
    }

    public function remove_ingredients(){
        return $this->belongsToMany(PizzeriaIngredient::class, 'pizzeria_order_pizza_remove_ingredients');
    }

    public function add_ingredients(){
        return $this->belongsToMany(PizzeriaIngredient::class, 'pizzeria_order_pizza_add_ingredients');
    }
}
