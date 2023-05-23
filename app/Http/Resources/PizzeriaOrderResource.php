<?php

namespace App\Http\Resources;

use App\Models\PizzeriaOrderPizza;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PizzeriaOrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $pizzas = PizzeriaOrderPizzaResource::collection($this->pizzas);
        $price = 0;
        foreach ($pizzas as $pizza){
            $price += $pizza['price'];
        }

        return [
            "id" => $this->id,
            "user_id" => $this->pizzeria_user_id,
            "address" => $this->address,
            "tel" => $this->tel,
            "created_at" => $this->created_at,
            "price" => $price,
            "pizzas" => $pizzas,
        ];
    }
}
