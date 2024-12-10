<div class="w-full">
    <table class="w-full rounded-lg shadow-lg border border-gray-200 bg-white">
        <!-- Cabecera -->
        <thead class="table-auto text-xs w-full m-auto border-collapse bg-red-500 text-left text-white">
            <tr>
                <th class="px-6 py-3 text-left text-sm font-semibold rounded-tl-lg">#</th>
                <th class="px-6 py-3 text-left text-sm font-semibold">Nombre</th>
                <th class="px-6 py-3 text-left text-sm font-semibold">Descripción</th>
                <th class="px-6 py-3 text-left text-sm font-semibold">Promoción</th>
                <th class="px-6 py-3 text-left text-sm font-semibold">Estado</th>
                <th class="px-6 py-3 text-left text-sm font-semibold rounded-tr-lg">Herramientas</th>
            </tr>
        </thead>
        <!-- Cuerpo -->
        <tbody>
            @foreach ($foods as $food)
            <tr class="hover:bg-gray-100 border-b">
                <td class="px-6 py-4 text-[16px] text-gray-800">{{ $food->id }}</td>
                <td class="px-6 py-4 text-[16px] text-gray-800">{{ $food->name }}</td>
                <td class="px-6 py-4 text-[16px] text-gray-800">{{ $food->description }}</td>
                <td class="px-6 py-4 text-[16px] text-gray-800">{{ $food->promotion ? 'N/A' : 'Promocion'}}
                </td>
                <td class="px-6 py-4 text-sm text-gray-800">
                    <span
                        class="{{ $food->is_available ? 'text-green-600 bg-green-200' : 'text-red-600' }} text-xs font-medium rounded-full py-1 px-4">
                        {{ $food->is_available ? 'Disponible' : 'No disponible' }}
                    </span>
                </td>
                <td class="px-6 py-4 text-sm text-gray-800 flex justify-between">
                    <a href="{{ route('dashboard.edit', $food->id) }}" wire:key="{{ $food->id }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                    </a>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                        </svg>
                    </button>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>

                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4 flex justify-end">
        {{ $foods->links('vendor.livewire.simple-tailwind') }}
    </div </div>