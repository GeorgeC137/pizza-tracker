<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pizza>
 */
class PizzaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $toppingsChoices = [
            'Pepperoni',
            'Ground Beef',
            'Onion',
            'Green Pepper',
            'Extra Cheese',
            'Ground Chicken',
            'Black Olive',
            'Sausage',
        ];

        $toppings = [];

        for ($i=1; $i <= rand(1, 4); $i++) { 
            $toppings[] = Arr::random($toppingsChoices);
        }

        $toppings = array_unique($toppings);

        return [
            'id' => rand(111, 999),
            'user_id' => rand(0, 10),
            'size' => Arr::random(['Medium', 'Large', 'Small', 'Extra-Large']),
            'status' => Arr::random(['Ordered', 'Checking', 'Baking', 'Prepping', 'Ready']),
            'crust' => Arr::random(['Normal', 'Thin', 'Garlic']),
            'toppings' => $toppings,
        ];
    }
}
