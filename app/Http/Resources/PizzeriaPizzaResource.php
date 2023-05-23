<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PizzeriaPizzaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "img_uri" => $this->img_uri,
            "is_new" => $this->is_new,
            "small_standard_price" => $this->small_standard_price,
            "small_standard_weight" => $this->small_standard_weight,
            "small_standard_calories" => $this->small_standard_calories,
            "small_standard_proteins" => $this->small_standard_proteins,
            "small_standard_fats" => $this->small_standard_fats,
            "small_standard_carbohydrates" => $this->small_standard_carbohydrates,
            "medium_standard_price" => $this->medium_standard_price,
            "medium_standard_weight" => $this->medium_standard_weight,
            "medium_standard_calories" => $this->medium_standard_calories,
            "medium_standard_proteins" => $this->medium_standard_proteins,
            "medium_standard_fats" => $this->medium_standard_fats,
            "medium_standard_carbohydrates" => $this->medium_standard_carbohydrates,
            "large_standard_price" => $this->large_standard_price,
            "large_standard_weight" => $this->large_standard_weight,
            "large_standard_calories" => $this->large_standard_calories,
            "large_standard_proteins" => $this->large_standard_proteins,
            "large_standard_fats" => $this->large_standard_fats,
            "large_standard_carbohydrates" => $this->large_standard_carbohydrates,
            "medium_thin_price" => $this->medium_thin_price,
            "medium_thin_weight" => $this->medium_thin_weight,
            "medium_thin_calories" => $this->medium_thin_calories,
            "medium_thin_proteins" => $this->medium_thin_proteins,
            "medium_thin_fats" => $this->medium_thin_fats,
            "medium_thin_carbohydrates" => $this->medium_thin_carbohydrates,
            "large_thin_price" => $this->large_thin_price,
            "large_thin_weight" => $this->large_thin_weight,
            "large_thin_calories" => $this->large_thin_calories,
            "large_thin_proteins" => $this->large_thin_proteins,
            "large_thin_fats" => $this->large_thin_fats,
            "large_thin_carbohydrates" => $this->large_thin_carbohydrates,
            "ingredients" => $this->ingredients,
        ];
    }
}
