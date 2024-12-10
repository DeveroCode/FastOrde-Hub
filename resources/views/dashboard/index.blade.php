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
                <div class="md:flex md:justify-center text-2xl">
                    <livewire:header-admin-stats />
                </div>
            </div>
        </div>
    </div>
    {{-- <div
        class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:my-auto lg:max-w-7xl flex flex-row justify-between mb-32 md:py-16 gap-10 items-center">
        <div class="flex flex-col space-y-16 w-full">
            <livewire:header-admin-stats />

            <div>
                <h3 class="text-2xl font-bold py-2">Ordenes Recientes</h3>
                <livewire:recent-orders />
            </div>
        </div>

        {{-- <div class="w-[35%] mt-7">
            <livewire:activity-monitoring />
        </div> --}}
    </div> --}}
</x-app-layout>