<div class="flex flex-wrap gap-10" wire:poll.delay.500ms="loadOrder">
    @foreach ($orders as $folio => $group)
    <div
        class="bg-white py-3 rounded-md shadow-md w-[26%] hover:shadow-xl transition-shadow duration-300 ease-in-out cursor-pointer">
        <div class="flex gap-10  px-4 justify-between items-center">
            <p class="text-xl font-bold text-gray-800">Pedido Listo!</p>
            <span class="py-1 px-4 bg-primary text-white text-sm font-semibold rounded-full">#{{ $folio }}</span>
        </div>

        <div class="mt-3 p-4">
            <div class="flex items-center gap-3 text-xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                </svg>
                <p>Cantidad total: {{ $group->first()->total_quantity }}</p>
            </div>

            <div class="flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>

                <p>Tiempo de espera: {{ \Carbon\Carbon::parse($group->first()->created_at)->format('H:i') }}</p>
            </div>
        </div>

        <div class="border-t border-gray-200 py-2 px-4 leading-3">
            <span class="text-gray-600 text-sm">Favor de pasar a la caja por su orden con su ticker en mano!</span>
        </div>
    </div>
    @endforeach
</div>