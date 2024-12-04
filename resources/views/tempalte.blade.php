<x-app-layout>
    <x-slot name="header" class="bg-orange-500">
        <h1 class="font-semibold text-2xl text-white leading-tight">
            {{ __('title') }}
        </h1>
    </x-slot>
    <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:my-auto lg:max-w-7xl flex flex-row-reverse mb-32">
    </div>
</x-app-layout>


{{--
<div
    class="fixed inset-0 z-50 flex justify-end items-start bg-black bg-opacity-50 transition-opacity duration-300 py-16 overflow-y-auto ">
    <div class="bg-white max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 rounded-md">
        <div class="py-10 flex flex-col justify-end pr-28">
            <h1 class="text-md font-semibold mb-2">Ingresa la palabra clave</h1>
            <!-- Formulario de búsqueda -->
            <input type="text" wire:keydown.enter="search($event.target.value)" placeholder="Buscar comida Ej: Pizza"
                class="py-2 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-0 focus:border-primary" />
        </div>


        <div class="py-3">
            <h2>Resultados</h2>


            @if (count($foods) > 0)
            <div class="flex gap-10 flex-wrap items-center justify-center mt-6">
                @foreach ($foods as $food)
                <div class="bg-white p-6 rounded-lg shadow-lg max-w-xs w-full hover:shadow-2xl transition-shadow duration-300 ease-in-out"
                    wire:key='{{ $food->id }}'>
                    <!-- Imagen -->
                    <div class="bg-gray-50 p-4 rounded-md">
                        <img src="{{ asset('hamburguer.png') }}" alt="{{ $food->name }}"
                            class="w-full h-48 object-cover rounded-md mx-auto">
                    </div>

                    <!-- Información del Producto -->
                    <div class="mt-5">
                        <p class="font-semibold text-2xl text-gray-800">{{ $food->name }}</p>
                        <p class="text-gray-500 mt-2">{{ $food->description }}</p>

                        <div class="flex justify-between items-center mt-4">
                            <span class="font-semibold text-lg text-primary">${{ $food->price }}</span>
                            <span
                                class="{{ $food->is_available ? 'text-green-600 bg-green-200' : 'text-red-600' }} text-xs font-medium rounded-full py-1 px-4">
                                {{ $food->is_available ? 'Disponible' : 'No disponible' }}
                            </span>
                        </div>
                    </div>

                    <!-- Botón Agregar -->
                    <button wire:click="$dispatch('openModal', { 'food': {{ $food->id }} })"
                        class="mt-6 inline-flex items-center justify-center w-full py-3 bg-primary text-white font-semibold text-sm rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50 transition-all">
                        Agregar!
                    </button>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</div>
--}}