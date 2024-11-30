<div>
    <div class="flex gap-10 flex-wrap items-center justify-center">
        @foreach ($foods as $food)
        <div
            class="bg-white p-6 rounded-lg shadow-lg max-w-xs w-full hover:shadow-2xl transition-shadow duration-300 ease-in-out">
            <!-- Imagen -->
            <div class="bg-gray-50 p-4 rounded-md">
                <img src="{{ asset('hamburguer.png') }}" alt="{{ $food->name }}"
                    class="w-full h-48 object-cover rounded-md mx-auto">
            </div>

            <!-- Información del Producto -->
            <div class="mt-5">
                <p class="font-semibold text-2xl text-gray-800">{{ $food->name }}</p>
                <p class="text-gray-500 mt-2">{{ $food->description }}</p>

                <div class="flex justify-between items-center mt-4">
                    <span class="font-semibold text-lg text-primary">${{ $food->price }}</span>
                    <span
                        class="{{ $food->is_available ? 'text-green-600 bg-green-200' : 'text-red-600' }} text-xs font-medium rounded-full py-1 px-4">
                        {{ $food->is_available ? 'Disponible' : 'No disponible' }}
                    </span>
                </div>
            </div>

            <!-- Botón Agregar -->
            <button wire:click="$dispatch('openModal',  { food: {{ $food->id }} })"
                class="mt-6 inline-flex items-center justify-center w-full py-3 bg-primary text-white font-semibold text-sm rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50 transition-all">
                Agregar!
            </button>
        </div>
        @endforeach
    </div>
</div>