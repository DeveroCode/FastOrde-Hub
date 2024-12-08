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
            <tr class="hover:bg-gray-100">
                <td class="px-6 py-4 text-sm text-gray-800 border-b"></td>
                <td class="px-6 py-4 text-sm text-gray-800 border-b">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition">
                        Editar
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4 flex justify-end">
        {{ $foods->links('vendor.livewire.simple-tailwind') }}
    </div>
</div>