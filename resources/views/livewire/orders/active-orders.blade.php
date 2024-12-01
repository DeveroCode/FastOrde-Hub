<div class="bg-white rounded-lg overflow-y-auto h-screen shadow-xl">
    <div class="border-b border-gray-200 pb-2 px-3 py-3">
        <h2 class="text-2xl font-semibold text-gray-800">Ordenes en Proceso</h2>
    </div>
    @foreach ($orders as $folio => $group)
    <section
        class="mt-12 rounded-br-lg rounded-bl-lg px-3 shadow-lg hover:shadow-2xl transition-shadow duration-300 ease-in-out">
        {{-- Header Ticket --}}
        <div class="bg-primary py-1 px-3 rounded-tl-lg rounded-tr-lg flex items-center justify-between">
            <div class="flex items-center gap-3 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
                </svg>
                <h2 class="text-xl font-semibold">Orden #{{ $folio }}</h2>
            </div>
            {{-- Confirm Purchase --}}
            <button
                class="text-primary bg-white rounded-full p-1 hover:text-white shadow-xl hover:bg-green-400 transition-all"
                wire:click="confirmOrder('{{ $group->first()->purchase_summary_id }}')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </button>
        </div>

        {{-- Body Ticket --}}
        <div class="px-4">
            <div class="flex justify-between items-center py-3 px-3 border-b border-gray-100">
                <div class="flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        <p>
                            {{ \Carbon\Carbon::parse($group->first()->created_at)->format('H:i') }}
                        </p>
                    </svg>
                </div>
                <p>
                    {{ \Carbon\Carbon::parse($group->first()->created_at)->format('d/m/Y') }}
                </p>
            </div>


            <div class="py-2 px-3 rounded-bl-lg rounded-br-lg mt-4">
                <div class="flex items-center gap-3 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.362 5.214A8.252 8.252 0 0 1 12 21 8.25 8.25 0 0 1 6.038 7.047 8.287 8.287 0 0 0 9 9.601a8.983 8.983 0 0 1 3.361-6.867 8.21 8.21 0 0 0 3 2.48Z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 18a3.75 3.75 0 0 0 .495-7.468 5.99 5.99 0 0 0-1.925 3.547 5.975 5.975 0 0 1-2.133-1.001A3.75 3.75 0 0 0 12 18Z" />
                    </svg>
                    <h3 class="font-semibold text-lg text-gray-800">Articulos Ordenados</h3>
                </div>
                {{-- Items In Order --}}
                <ol class="space-y-2">
                    @foreach ($group as $order)
                    <li class="flex justify-between items-center text-md text-gray-800 text-wrap">
                        <div class="flex items-center gap-1">
                            <span>{{ $order->quantity }}x</span>
                            <span>{{ $order->name }}</span>
                        </div>
                        <span>${{ $order->total_price }}</span>
                    </li>
                    @endforeach
                </ol>
            </div>
    </section>
    @endforeach
</div>