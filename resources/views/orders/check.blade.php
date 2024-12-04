<x-app-layout>
    <x-slot name="header" class="bg-orange-500">
        <h1 class="font-semibold text-2xl text-white leading-tight">
            {{ __('Entregas listas!') }}
        </h1>
    </x-slot>

    <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:my-auto lg:max-w-7xl flex flex-col space-y-12 md:py-24 mb-32">
        <h1 class="text-4xl capitalize font-bold text-gray-700">Pedidos listos para entrega!</h1>
        <livewire:check-orders />
    </div>
</x-app-layout>