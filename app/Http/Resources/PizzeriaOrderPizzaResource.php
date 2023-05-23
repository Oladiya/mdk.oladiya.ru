<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PizzeriaOrderPizzaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->pizzeria_pizza_id,
            "name" => $this->pizza->name,
            "amount" => $this->amount,
            "size" => $this->size,
            "doughType" => $this->doughType,
            "price" => $this->price,
            "remove_ingredients" => PizzeriaIngredientResource::collection($this->remove_ingredients),
            "add_ingredients" => PizzeriaIngredientResource::collection($this->add_ingredients),
        ];
    }
}
