<x-app-layout>
    <x-slot name="header" class="bg-orange-500">
        <h1 class="font-semibold capitalize text-2xl text-white leading-tight">
            {{ __('Agregar nuevo platillo') }}
        </h1>
    </x-slot>

    <livewire:add-food />
</x-app-layout>