<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="/order" method="POST" id="order-form">
                    @csrf
                    <h1 class="font-semibold text-xl text-gray-800 leading-tight">Pizzas</h1>
                    <div class="space-y-4">
                        @foreach($pizzas as $pizza)
                            <div class="flex items-center">
                                <input type="checkbox"
                                       class="pizza-checkbox mr-2"
                                       data-cost="{{ $pizza->cost }}"
                                       name="pizzas[]"
                                       value="{{ $pizza->id }}"
                                       id="pizza-{{ $pizza->id }}">

                                <label for="pizza-{{ $pizza->id }}">
                                    {{ $pizza->size }} {{ $pizza->name }} - £{{ number_format($pizza->cost, 2) }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                    <h1 class="font-semibold text-xl text-gray-800 leading-tight">Toppings</h1>
                    <div class="space-y-4">
                        @foreach($toppings as $topping)
                            <div class="flex items-center">
                                <input type="checkbox"
                                       class="pizza-checkbox mr-2"
                                       data-cost="{{ $topping->cost }}"
                                       name="pizzas[]"
                                       value="{{ $topping->id }}"
                                       id="topping-{{ $topping->id }}">

                                <label for="topping-{{ $topping->id }}">
                                    {{ $topping->topping }} - £{{ number_format($topping->cost, 2) }}
                                </label>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-6 text-lg font-semibold">
                        Total: £<span id="total-price">0.00</span>
                    </div>

                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
                    <x-primary-button class="mt-4">{{ __('Order') }}</x-primary-button>

                </div>
            </div>
        </div>
    </div>

    <script>
        const Checkboxes = document.querySelectorAll('.pizza-checkbox');
        const totalDisplay = document.getElementById('total-price');
    
        function updateTotal() {
            let total = 0;
            Checkboxes.forEach(Checkbox => {
                if (Checkbox.checked) {
                    total += parseFloat(Checkbox.dataset.cost);
                }
            });
            totalDisplay.textContent = total.toFixed(2);
        }
    
        Checkboxes.forEach(cb => cb.addEventListener('change', updateTotal));
    </script>

 </x-app-layout>