<?php

namespace App\Http\Controllers;

use App\Http\Resources\PizzeriaPizzaResource;
use App\Models\PizzeriaIngredient;
use App\Models\PizzeriaPizza;
use App\Models\PizzeriaProduct;
use Illuminate\Http\Request;

class PizzeriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = PizzeriaProduct::find(1);

        return $product->ingredients;

        $ingredients = PizzeriaIngredient::all();

        return $ingredients;

        $pizzas = PizzeriaPizzaResource::collection(PizzeriaPizza::all());
        foreach ($pizzas as $pizza) {
            foreach ($pizza['ingredients'] as $ingredient){
                unset($ingredient['pivot']);
            }
            $products['pizzas'][$pizza['id']] = $pizza;
        }
        return view('pizzeria.home', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
