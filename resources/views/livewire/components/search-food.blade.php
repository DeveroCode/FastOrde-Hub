<div class="py-10 flex justify-end pr-28">
    <input type="text" wire:model='word' placeholder="Buscar comida Ej: Pizza"
        class="py-2 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-0 focus:border-primary" />
    <button wire:click="search" class="ml-2 rounded-md py-2 px-4 bg-primary text-white ">Buscar</button>
    {{-- <input type="text" wire:keydown.enter="search($event.target.value)" placeholder="Buscar comida Ej: Pizza"
        class="py-2 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-0 focus:border-primary" /> --}}
</div>