<x-app-layout>
    <x-slot name="header" class="bg-orange-500">
        <h1 class="font-semibold text-2xl text-white leading-tight">
            {{ __('Editor de Platillos') }}
        </h1>
    </x-slot>
    <livewire:edit-form :food="$food" />
</x-app-layout>