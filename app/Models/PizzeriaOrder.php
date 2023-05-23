<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PizzeriaOrder extends Model
{
    use HasFactory;

    protected $hidden = [
      'updated_at',
    ];

    protected $fillable = [
        'address',
        'tel',
        'status',
    ];

    public function pizzas(){
        return $this->hasMany(PizzeriaOrderPizza::class);
    }
}
