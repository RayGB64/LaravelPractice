<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <h1>Select Your Pizzas</h1>
        <form action="/order" method="POST">
            @csrf
            @foreach($pizzas as $pizza)
                <label>
                    <input type="checkbox" name="name[]" value="{{ $pizza->id }}">
                    {{ $pizza->size }} {{ $pizza->name }} - ${{ number_format($pizza->cost, 2) }}
                </label><br>
            @endforeach
        <h1>Select Your Toppings</h1>
            @foreach($toppings as $topping)
                <label>
                    <input type="checkbox" name="toppings[]" value="{{ $topping->id }}">
                    {{ $topping->topping }} - £0.85
                </label><br>
            @endforeach
            <br>
            <button type="submit">Calculate Total</button>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Order') }}</x-primary-button>
        </form>
    </div>
 </x-app-layout>