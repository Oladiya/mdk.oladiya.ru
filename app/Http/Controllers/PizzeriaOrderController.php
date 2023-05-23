<?php

namespace App\Http\Controllers;

use App\Http\Resources\PizzeriaOrderResource;
use App\Models\PizzeriaOrder;
use App\Models\PizzeriaOrderPizza;
use App\Models\PizzeriaOrderPizzaAddIngredient;
use App\Models\PizzeriaOrderPizzaRemoveIngredient;
use App\Models\PizzeriaPizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PizzeriaOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = PizzeriaOrderResource::collection(PizzeriaOrder::all());
        return $orders;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->all();
        unset($data['_token']);

        $validationRules = [
            'address' => 'required',
            'tel' => 'regex:/^\+7 ([0-9]{3}) ([0-9]{3})-([0-9]{2})-([0-9]{2})$/',
        ];

        $validator = Validator::make($data, $validationRules);

        if($validator->fails()){
            return redirect(route('pizzeria.home', $data))->withErrors($validator->errors())->withInput($data);
        }
        if($validator->passes()){
            $validated = $validator->valid();
            return $validated;
        }

        dd();

        $order = PizzeriaOrder::create([
            'address' => $request->address,
            'tel' => $request->tel,
        ]);

        if(isset($request->pizzas)){
            $pizzas = $request->pizzas;

            foreach ($pizzas as $key => $pizza) {
                $orderPizzas[$key] = PizzeriaOrderPizza::create([
                    'pizzeria_order_id' => $order->id,
                    'pizzeria_pizza_id' => $pizza['id'],
                    'amount' => $pizza['amount'],
                    'size' => $pizza['size'],
                    'doughType' => $pizza['doughType'],
                    'price' => $pizza['price'],
                ]);

                if (isset($pizza['addIngredients'])) {
                    foreach ($pizza['addIngredients'] as $ingredient) {
                        PizzeriaOrderPizzaAddIngredient::create([
                            'pizzeria_order_pizza_id' => $orderPizzas[$key]->id,
                            'pizzeria_ingredient_id' => $ingredient,
                        ]);
                    }
                }

                if (isset($pizza['removeIngredients'])) {
                    foreach ($pizza['removeIngredients'] as $ingredient) {
                        PizzeriaOrderPizzaRemoveIngredient::create([
                            'pizzeria_order_pizza_id' => $orderPizzas[$key]->id,
                            'pizzeria_ingredient_id' => $ingredient,
                        ]);
                    }
                }

                $Pizza = PizzeriaPizza::find($pizza['id']);
                $sales = $Pizza['sales'] + $pizza['amount'];
                $Pizza->update(['sales' => $sales]);
            }
        }

        return redirect(route('pizzeria.order.show', [$order->id]));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = new PizzeriaOrderResource(PizzeriaOrder::findOrFail($id));
        return $order;
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
