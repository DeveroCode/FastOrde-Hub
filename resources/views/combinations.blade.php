<x-app-layout>
    <div class="relative overflow-hidden">
        <!-- Imagen de fondo con h-64 -->
        <div class="absolute inset-0 h-64">
            <img src="{{ asset('combinations.webp') }}" alt="Comida rápida"
                class="w-full h-full object-cover brightness-50">
        </div>

        <!-- Contenido -->
        <section class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center h-64">
            <div class="text-white w-full">
                <h2 class="text-4xl font-bold">
                    Descubre tu menu perzonalizado!
                </h2>
                <p class="mt-4 text-xl">
                    ¡Todo lo que deseas al alcance de un click!
                </p>
            </div>
        </section>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <div class="md:flex md:justify-center text-2xl">
                        <livewire:combinations-menu />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>