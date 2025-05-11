<?php

namespace App\Http\Controllers;

use App\Models\Pizza;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Gate;

class PizzaController extends Controller
{
    public function index(): View
    {
        $pizza = Pizza::all(); // fetch all pizzas
        return view('pizzas.index', compact('pizzas')); // send to view
    }
}
