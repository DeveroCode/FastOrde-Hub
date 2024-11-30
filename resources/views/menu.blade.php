<x-app-layout>
    <div class="relative overflow-hidden">
        <!-- Imagen de fondo con h-64 -->
        <div class="absolute inset-0 h-64">
            <img src="{{ asset('header-menu-foods.jpg') }}" alt="Comida rápida"
                class="w-full h-full object-cover brightness-50">
        </div>

        <!-- Contenido -->
        <section class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center h-64">
            <div class="text-white w-full">
                <h2 class="text-4xl font-bold">
                    Descubre y obtén la mejor comida rápida
                </h2>
                <p class="mt-4 text-xl">
                    ¡Todo lo que deseas al alcance de un clic!
                </p>
            </div>
        </section>


        <section class="py-20 md:py-24">
            <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:my-auto lg:max-w-7xl flex mb-32">
                <livewire:cards-foods>
            </div>
        </section>
    </div>
</x-app-layout>