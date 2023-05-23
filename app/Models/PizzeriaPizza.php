<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PizzeriaPizza extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'name',
        'created_at',
    ];

    public function ingredients(){
        return $this->belongsToMany(PizzeriaIngredient::class);
    }
}
