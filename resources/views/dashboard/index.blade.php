<x-app-layout>
    <x-slot name="header" class="bg-orange-500">
        <h1 class="font-semibold text-2xl text-white leading-tight">
            {{ __('Administración') }}
        </h1>
    </x-slot>
    <div
        class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:my-auto lg:max-w-7xl flex flex-row justify-between mb-32 md:py-16 gap-10 items-center">
        <div class="flex flex-col space-y-16 w-[65%]">
            <livewire:header-admin-stats />

            <div>
                <h3 class="text-2xl font-bold py-2">Ordenes Recientes</h3>
                <livewire:recent-orders />
            </div>
        </div>

        <div class="w-[35%] mt-7">
            <livewire:activity-monitoring />
        </div>
    </div>
</x-app-layout>