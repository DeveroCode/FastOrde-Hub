<div class="flex flex-col gap-10">
    @foreach ($orders as $folio => $group)
    <div class="flex items-center gap-3">
        <h2 class="text-2xl font-semibold text-gray-800">Órdenes con Folio No. #{{ $folio }}</h2>
        <select
            class="bg-white rounded-md py-2 px-7 border border-primary text-gray-700 text-sm font-semibold focus:outline-none focus:ring-0 focus:border-primary"
            wire:change="updateStatus($event.target.value, '{{ $folio }}')">
            @foreach ($status as $stat)
            <option value="{{ $stat->id }}" {{ $group->first()->status_id == $stat->id ? 'selected' : '' }}>
                {{ $stat->name }}
            </option>
            @endforeach
        </select>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
        @foreach ($group as $order)
        <div
            class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 ease-in-out relative">
            <!-- Cantidad en la esquina superior derecha -->
            <div
                class="absolute top-2 right-2 bg-primary text-white text-xs font-bold rounded-full h-8 w-8 flex items-center justify-center shadow-lg">
                {{ $order->quantity }}
            </div>

            <!-- Imagen -->
            <div class="bg-gray-50 p-4 rounded-md">
                <img src="{{ asset('hamburguer.png') }}" alt="{{ $order->name }}"
                    class="w-full h-48 object-cover rounded-md mx-auto">
            </div>

            <!-- Información del Producto -->
            <div class="mt-5">
                <p class="font-semibold text-2xl text-gray-800">{{ $order->name }}</p>
                <div class="flex justify-between items-center mt-4">
                    <span class="font-semibold text-lg text-primary">${{ $order->total_price }}</span>
                    <span class="text-green-600 bg-green-200 text-xs font-medium rounded-full py-1 px-4">
                        Disponible
                    </span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
</div>