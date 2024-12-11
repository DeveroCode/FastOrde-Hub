<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session()->has('message'))
            <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
                <div
                    class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3 text-sm text-center">
                    {{ session('message') }}
                </div>
            </div>
            @endif
            <div class="overflow-hidden">
                <livewire:layout-dash wire:poll.delay.20ms />
            </div>
        </div>
    </div>
</x-app-layout>