<!DOCTYPE html>
<html>
<head>
    <title>Pizzas & Toppings</title>
</head>
<body>
    <h1>All Pizzas</h1>
    <ul>
        @foreach ($pizzas as $pizza)
            <li >
                <strong>{{ $pizza->name }}</strong><br>
                Size: {{ $pizza->size }}<br>
                Cost: £{{ $pizza->cost }}<br>
                Ingredients: {{ $pizza->ingredients }}
            </li>
            <hr>
        @endforeach
    </ul>
    <h1>All Toppings</h1>
    <ul>
        @foreach ($toppings as $topping)
            <li >
                <strong>{{ $topping->topping }}</strong><br>
            </li>
            <hr>
        @endforeach
    </ul>
</body>
</html>