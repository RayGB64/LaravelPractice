<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('pizza')->insert([
            [
                'name' => 'Margherita',
                'size' => 'Small',
                'cost' => 8,
                'ingredients' => 'Cheese, Tomato sauce',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Margherita',
                'size' => 'Medium',
                'cost' => 9,
                'ingredients' => 'Cheese, Tomato sauce',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Margherita',
                'size' => 'Large',
                'cost' => 8,
                'ingredients' => 'Cheese, Tomato sauce',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gimme the Meat',
                'size' => 'Small',
                'cost' => 11,
                'ingredients' => 'Pepperoni, Ham, Chicken, Minced beef, Sausage, Bacon',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gimme the Meat',
                'size' => 'Medium',
                'cost' => 14.50,
                'ingredients' => 'Pepperoni, Ham, Chicken, Minced beef, Sausage, Bacon',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gimme the Meat',
                'size' => 'large',
                'cost' => 16.50,
                'ingredients' => 'Pepperoni, Ham, Chicken, Minced beef, Sausage, Bacon',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Veggie Delight',
                'size' => 'Small',
                'cost' => 10,
                'ingredients' => 'Onions, Green peppers, Mushrooms, Sweetcorn',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Veggie Delight',
                'size' => 'Medium',
                'cost' => 13,
                'ingredients' => 'Onions, Green peppers, Mushrooms, Sweetcorn',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Veggie Delight',
                'size' => 'Large',
                'cost' => 15,
                'ingredients' => 'Onions, Green peppers, Mushrooms, Sweetcorn',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Make Mine Hot',
                'size' => 'Small',
                'cost' => 11,
                'ingredients' => 'Chicken, Onions, Green peppers, Jalapeno peppers',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Make Mine Hot',
                'size' => 'Medium',
                'cost' => 13,
                'ingredients' => 'Chicken, Onions, Green peppers, Jalapeno peppers',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Make Mine Hot',
                'size' => 'Large',
                'cost' => 15,
                'ingredients' => 'Chicken, Onions, Green peppers, Jalapeno peppers',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
