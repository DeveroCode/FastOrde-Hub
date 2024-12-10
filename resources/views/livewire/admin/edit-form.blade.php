<div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:my-auto lg:max-w-7xl flex gap-10 mb-32 py-32">
    <div class="bg-white rounded-md shadow-xl w-[50%] px-4">
        <div class="w-full md:w-2/3">
            <h2 class="text-2xl font-semibold text-gray-600 mb-4 pt-10">Edicion de platillo</h2>
            <form wire:submit.prevent="editFood" class="space-y-6">
                <div class="space-y-4">
                    <x-input-label for="name" :value="__('Nombre del platillo')" />
                    <x-text-input type="text" id="name" class="block mt-1 w-full" type="text" wire:model="name"
                        :value="old('name')" autofocus autocomplete="name"
                        placeholder="Ingrese el nombre del platillo Ej: Hamburguesa" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="space-y-4">
                    <x-input-label for="descripción" :value="__('Descripción del platillo')" />
                    <textarea wire:model="descripción"
                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full h-32 px-4"></textarea>
                    <x-input-error :messages="$errors->get('descripción')" class="mt-2" />
                </div>

                <div class="flex flex-row gap-3 justify-between">
                    <div class="space-y-4 md:w-1/2">
                        <x-input-label for="precio" :value="__('Precio')" />
                        <x-text-input type="text" id="precio" class="block mt-1 w-full" type="text" wire:model="precio"
                            :value="old('precio')" autofocus autocomplete="precio"
                            placeholder="Ingrese el precio del platillo Ej: $265.00" />
                        <x-input-error :messages="$errors->get('precio')" class="mt-2" />
                    </div>
                    <div class="space-y-4 md:w-1/2">
                        <x-input-label for="fecha" :value="__('Fecha de registro')" />
                        <x-text-input type="date" id="fecha" class="block mt-1 w-full" wire:model="fecha"
                            :value="old('fecha')" autofocus autocomplete="fecha" />
                        <x-input-error :messages="$errors->get('fecha')" class="mt-2" />
                    </div>
                </div>

                <div class="flex flex-col space-y-4  w-full">
                    <x-input-label for="imagen" :value="__('Imagen del platillo')" />
                    <x-text-input id="imagen" class="block text-sm mt-1 w-full" type="file" wire:model="imagen_nueva"
                        accept="image/*" />

                    <x-input-error :messages="$errors->get('imagen_nueva')" class="mt-2" />
                </div>

                <div class="flex justify-end py-3">
                    <button class="py-2 px-5 rounded-md bg-primary text-white font-bold">Registrar</button>
                </div>
            </form>
        </div>
    </div>
    <div class="w-[50%] p-5">
        <h2 class="text-xl font-semibold mb-4">Vista previa del platillo</h2>
        <div
            class="bg-white p-6 rounded-lg shadow-lg max-w-xs w-full hover:shadow-2xl transition-shadow duration-300 ease-in-out">
            <!-- Imagen -->
            <div class="bg-gray-50 p-4 rounded-md">
                @if($imagen_nueva)
                <img src="{{$imagen_nueva->temporaryUrl() }}" alt="{{ $name }}"
                    class="w-full h-48 object-cover rounded-md mx-auto">
                @else
                <img src="{{asset('storage/' . $imagen) }}" alt="{{ $name }}"
                    class="w-full h-48 object-cover rounded-md mx-auto">
                @endif
            </div>

            <!-- Información del Producto -->
            <div class="mt-5">
                <p class="font-semibold text-2xl text-gray-800">{{ $name ?: 'Nombre del platillo' }}</p>
                <p class="text-gray-500 mt-2">{{ $descripción ?: 'Descripción del platillo' }}</p>

                <div class="flex justify-between items-center mt-4">
                    <span class="font-semibold text-lg text-primary">${{ $precio ?: 'Precio del platillo' }}</span>
                </div>
            </div>
        </div>
    </div>
</div>