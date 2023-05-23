<?php

namespace App\Http\Controllers;

use App\Models\PizzeriaUser;
use Illuminate\Http\Request;

class PizzeriaUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            //'address' => 'required|max:255',
            'tel' => ['required', 'unique:pizzeria_users', 'regex:/^/+7 ([0-9]{3}) ([0-9]{3})-([0-9]{2})-([0-9]{2})$'],
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(PizzeriaUser $pizzeriaUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PizzeriaUser $pizzeriaUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PizzeriaUser $pizzeriaUser)
    {
        //
    }
}
