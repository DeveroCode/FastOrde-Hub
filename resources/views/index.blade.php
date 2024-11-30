<x-app-layout>
    <div class="py-20 md:py-24 overflow-hidden">
        <section
            class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:my-auto lg:max-w-7xl flex items-center justify-between">
            <div class="w-1/2">
                <h2 class="text-7xl font-bold flex flex-col text-gray-800"><span class="text-primary">Bienvenido!</span>
                    a
                    FastOrder
                    Hub
                </h2>

                <p class="mt-10 text-xl">FastOrder Hub es una plataforma de comida rápida que te permite
                    encontrar y pedir
                    comida
                    rápida de
                    manera rápida y fácil.</p>

                <a class="mt-10 inline-flex items-center px-4 py-2 bg-primary border
    border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700
    focus:bg-gray-700 active:bg-gray-900 focus:outline-none
    transition ease-in-out duration-150" href="{{ route('foods.index') }}">Empezar orden!</a>
            </div>
            {{-- Rende image background --}}
            <div class="w-1/2">
                <img src="{{ asset('hamburguer.png') }}" alt="">
            </div>
        </section>
    </div>
</x-app-layout>