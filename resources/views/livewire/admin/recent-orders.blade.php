<div class="overflow-x-auto" wire:poll.delay.500ms='loaders'>
    @if($orders)
    <table class="min-w-full bg-white rounded-lg shadow-md">
        <thead class="bg-red-500 text-white">
            <tr>
                <th class="px-4 py-3 text-left">Folio</th>
                <th class="px-4 py-3 text-left">Producto</th>
                <th class="px-4 py-3 text-left">Cantidad</th>
                <th class="px-4 py-3 text-left">Total</th>
                <th class="px-4 py-3 text-left">Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-3">#{{ $order->folio }}</td>
                <td class="px-4 py-3">{{ $order->name }}</td>
                <td class="px-4 py-3">{{ $order->total_quantity }}</td>
                <td class="px-4 py-3 text-green-600 font-bold">${{ $order->total_price }}</td>
                <td class="px-4 py-3">{{ \Carbon\Carbon::parse($order->created_at)->format('d/m/Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p class="text-center text-gray-600">No hay ordenes recientes</p>
    @endif

    <div class="mt-4 flex justify-end">
        {{ $orders->links('vendor.livewire.simple-tailwind') }}
    </div>
</div>