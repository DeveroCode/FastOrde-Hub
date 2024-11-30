<div class="flex flex-col gap-10">
    @foreach ($orders as $folio => $group)
    <h2 class="text-2xl font-semibold text-gray-800">Órdenes con Folio No. {{ $folio }}</h2>
    <div class="flex flex-row flex-wrap gap-10 items-center">
        <!-- Iterar las Órdenes del Folio -->
        @foreach ($group as $order)
        <div
            class="bg-white p-6 rounded-lg shadow-lg max-w-xs w-full hover:shadow-2xl transition-shadow duration-300 ease-in-out">
            <!-- Imagen -->
            <div class="bg-gray-50 p-4 rounded-md">
                <img src="{{ asset('hamburguer.png') }}" alt="{{ $order->name }}"
                    class="w-full h-48 object-cover rounded-md mx-auto">
            </div>

            <!-- Información del Producto -->
            <div class="mt-5">
                <p class="font-semibold text-2xl text-gray-800">{{ $order->name }}</p>
                <div class="flex items-center justify-between">
                    <h3 class="text-md text-gray-800">Cantidad</h3>
                    <p class="text-gray-500 mt-2">{{ $order->quantity }}</p>
                </div>

                <div class="flex justify-between items-center mt-4">
                    <span class="font-semibold text-lg text-primary">${{ $order->total_price }}</span>
                    <span class="text-green-600 bg-green-200 text-xs font-medium rounded-full py-1 px-4">
                        En preparación
                    </span>
                </div>
            </div>

            <!-- Botón Finalizar -->
            <button
                class="mt-6 inline-flex items-center justify-center w-full py-3 bg-primary text-white font-semibold text-sm rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50 transition-all">
                Finalizar!
            </button>
        </div>
        @endforeach
    </div>
    @endforeach
</div>