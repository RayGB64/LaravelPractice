<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToppingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('toppings')->insert([
            [
                'topping' => 'Cheese',
                'cost' => 0.85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Tomato sauce',
                'cost' => 0.85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Pepperoni',
                'cost' => 0.85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Ham',
                'cost' => 0.85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Chicken',
                'cost' => 0.85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Minced beef',
                'cost' => 0.85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Sausage',
                'cost' => 0.85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Bacon',
                'cost' => 0.85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Onions',
                'cost' => 0.85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Green peppers',
                'cost' => 0.85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Mushrooms',
                'cost' => 0.85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Sweetcorn',
                'cost' => 0.85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Jalapeno peppers',
                'cost' => 0.85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Vegan cheese',
                'cost' => 0.85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Pineapple',
                'cost' => 0.85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Salami',
                'cost' => 0.85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Olives',
                'cost' => 0.85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Spicy beef',
                'cost' => 0.85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Hot dog pieces',
                'cost' => 0.85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
