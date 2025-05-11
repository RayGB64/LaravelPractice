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
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Tomato sauce',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Pepperoni',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Ham',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Chicken',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Minced beef',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Sausage',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Bacon',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Onions',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Green peppers',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Mushrooms',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Sweetcorn',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Jalapeno peppers',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Vegan cheese',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Pineapple',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Salami',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Olives',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Spicy beef',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topping' => 'Hot dog pieces',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
