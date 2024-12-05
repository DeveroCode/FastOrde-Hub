<div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
    <x-nav-link :href="route('orders.index')" :active="request()->routeIs('orders.index')">
        {{ __('Ordenes') }}
    </x-nav-link>
    {{-- <x-nav-link :href="route('dashboard')" :active="request()->routeIs('verifier.index')">
        {{ __('Verificador de Ordenes') }}
    </x-nav-link> --}}
    <x-nav-link :href="route('orders.check')" :active="request()->routeIs('orders.check')">
        {{ __('Entregas') }}
    </x-nav-link>
    <x-nav-link :href="route('orders.store')" :active="request()->routeIs('orders.store')">
        {{ __('Crear Orden') }}
    </x-nav-link>
</div>