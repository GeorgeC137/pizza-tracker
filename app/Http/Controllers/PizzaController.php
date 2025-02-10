<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class PizzaController extends Controller
{
    public function index(): Response
    {
        $pizzas = Pizza::all();

        // return $pizzas;

        return Inertia::render('Pizzas/All', compact('pizzas'));
    }

    public function edit(Pizza $pizza): Response
    {
        return Inertia::render('Pizzas/Edit', compact('pizza'));
    }

    public function update(Pizza $pizza, Request $request)
    {
        $pizza->update([
            'status' => $request->status
        ]);
    }
}
