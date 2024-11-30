<div>
    @if($isOpen)
    <div class="fixed inset-0 z-50 flex justify-end items-start bg-black bg-opacity-50 transition-opacity duration-300">
        <aside class="xs:w-full md:w-1/4 h-screen bg-white shadow-xl overflow-y-auto flex flex-col justify-between">
            <div class="p-6 flex-grow">
                <div class="flex items-center mt-5 mb-6 space-x-4 text-orange-500">
                    <!-- Icono -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>

                    <h2 class="text-3xl font-bold text-gray-900">
                        Orden de Compra
                    </h2>

                    <button class="flex items-center justify-center w-8 h-8 bg-orange-500 text-white rounded-full"
                        wire:click="$dispatch('openModal')">
                        x
                    </button>
                </div>

                {{-- Data Foods --}}
                <section class="mt-2 flex flex-col space-y-3">
                    @foreach($selectedFoods as $food)
                    <div class="flex space-x-4 bg-white shadow-md rounded-md p-2">
                        <div class="w-2/5 bg-gray-50 rounded-md">
                            <img src="{{ asset('hamburguer.png') }}" alt="{{ $food['food']->name }}">
                        </div>
                        <div class="mt-2">
                            <p class="font-semibold text-xl">{{ $food['food']->name }}</p>
                            <span>${{ $food['food']->price }}</span>

                            <div class="flex items-center space-x-5 mt-2 rounded-full border justify-center">
                                <button wire:click="incrementCuantity({{ $food['food']->id }})">+</button>
                                <p>{{ $food['cuantity'] }}</p>
                                <button wire:click="decrementCuantity({{ $food['food']->id }})">-</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </section>
            </div>
            <div class="p-6">
                <div class="flex mb-3 justify-between font-semibold text-xl">
                    <p>Total a pagar:</p>
                    <span>${{ $total_pay }}</span>
                </div>
                <button
                    class="w-full py-3 bg-orange-500 text-white font-semibold text-sm rounded-md hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50 transition-all"
                    wire:click="createOrder">
                    Ordenar!
                </button>
            </div>
        </aside>
    </div>
    @endif
</div>