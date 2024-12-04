<x-app-layout>
    <x-slot name="header" class="bg-orange-500">
        <h1 class="font-semibold text-2xl text-white leading-tight">
            {{ __('Crear Pedido') }}
        </h1>
    </x-slot>
    <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:my-auto lg:max-w-7xl py-24 flex flex-col mb-32">

        <livewire:search-food />
        <livewire:cards-foods />
    </div>
</x-app-layout>