<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use App\Models\Toppings;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Gate;

class PizzaController extends Controller
{
    public function index(): View
    {
        $pizzas = Pizza::all(); // fetch all pizzas
        $toppings = Toppings::all(); // fetch all toppings
        return view('pizzas.index', compact('pizzas', 'toppings')); // send to view
    }
}
