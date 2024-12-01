<x-app-layout>
    <x-slot name="header" class="bg-orange-500">
        <h1 class="font-semibold text-2xl text-white leading-tight">
            {{ __('Ordenes Recientes') }}
        </h1>
    </x-slot>
    <div
        class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:my-auto lg:max-w-7xl mb-32 py-20 md:grid md:grid-cols-2 gap-10">
        <div class="md:col-span-1">
            <livewire:card-order />
        </div>
        <div class="md:col-span-1">
            <livewire:active-orders />
        </div>
    </div>
</x-app-layout>