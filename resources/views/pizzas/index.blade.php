<!DOCTYPE html>
<html>
<head>
    <title>Pizza List</title>
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
</body>
</html>