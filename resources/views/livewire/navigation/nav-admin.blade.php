<div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
    <x-nav-link :href="route('dashboard.index')" :active="request()->routeIs('dashboard.index')">
        {{ __('Administración') }}
    </x-nav-link>
    <x-nav-link :href="route('dashboard.create')" :active="request()->routeIs('dashboard.create')">
        {{ __('Agregar') }}
    </x-nav-link>
    {{-- {{-- <x-nav-link :href="route('orders.check')" :active="request()->routeIs('orders.check')">
        {{ __('Entregas') }}
    </x-nav-link> --}}
    <x-nav-link :href="route('dashboard.show')" :active="request()->routeIs('dashboard.show')">
        {{ __('Admon. Comidas') }}
    </x-nav-link>
</div>