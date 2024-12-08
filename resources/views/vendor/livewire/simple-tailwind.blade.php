@php
if (!isset($scrollTo)) {
$scrollTo = 'body';
}

$scrollIntoViewJsSnippet = ($scrollTo !== false)
? "(\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView()"
: '';
@endphp

<div>
    @if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between space-x-4">
        {{-- Botón Anterior --}}
        @if ($paginator->onFirstPage())
        <span class="text-xs border rounded-md text-primary px-4 py-2 cursor-not-allowed">
            {!! __('pagination.previous') !!}
        </span>
        @else
        <button type="button" dusk="previousPage" wire:click="previousPage('{{ $paginator->getPageName() }}')"
            x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled"
            class="text-xs border rounded-md text-primary px-4 py-2 hover:bg-red-500 hover:text-white font-bold">
            {!! __('pagination.previous') !!}
        </button>
        @endif

        {{-- Botón Siguiente --}}
        @if ($paginator->hasMorePages())
        <button type="button" dusk="nextPage" wire:click="nextPage('{{ $paginator->getPageName() }}')"
            x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled"
            class="text-xs border rounded-md text-primary px-4 py-2 hover:bg-red-500 hover:text-white font-bold border-primary transition-all ease-in-out duration-300">
            {!! __('pagination.next') !!}
        </button>
        @else
        <span class="text-xs border rounded-md text-primary px-4 py-2 cursor-not-allowed border-red-500">
            {!! __('pagination.next') !!}
        </span>
        @endif
    </nav>
    @endif
</div>