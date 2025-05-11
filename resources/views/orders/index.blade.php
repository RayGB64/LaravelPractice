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
                                       class="checkbox mr-2"
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
                                       class="checkbox mr-2"
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

                    <div class="mt-6">
                        <label for="method" class="block text-sm font-medium text-gray-700 mb-1">
                            Choose delivery method:
                        </label>
                        <select name="method" id="method" class="border-gray-300 rounded w-full sm:w-64">
                            <option value="collection">Collection</option>
                            <option value="delivery">Delivery</option>
                        </select>
                    </div>

                    <div class="mt-6 text-lg font-semibold">
                        Total: £<span id="total-price">0.00</span>
                    </div>

                    {{-- <x-input-error :messages="$errors->get('message')" class="mt-2" /> --}}
                    <x-primary-button class="mt-4">{{ __('Order') }}</x-primary-button>

                </div>
            </div>
        </div>
    </div>

    <script>
        const Checkboxes = document.querySelectorAll('.checkbox'); //Fetching checkbox data
        const methodSelect = document.getElementById('method'); //Fetching method data
        const deliveryFee = 5.00; // Delivery fee
        const totalDisplay = document.getElementById('total-price'); //Granting access to modify total-price
    
        function updateTotal() {
            let total = 0;
            Checkboxes.forEach(Checkbox => {
                if (Checkbox.checked) {
                    total += parseFloat(Checkbox.dataset.cost);
                }
            });

            // Add delivery fee if the selected method is delivery
            if (methodSelect.value === 'delivery') {
                total += deliveryFee;
            }

            totalDisplay.textContent = total.toFixed(2);
        }
    
        Checkboxes.forEach(cb => cb.addEventListener('change', updateTotal)); // When a check box is selected, runs the updateTotal function
        methodSelect.addEventListener('change', updateTotal); // When delivery method is updated, runs the updateTotal function
    </script>

 </x-app-layout>