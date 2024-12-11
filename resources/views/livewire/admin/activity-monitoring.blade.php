<div class="bg-white rounded-lg shadow-md border border-gray-200" wire:poll.delay.500ms='getAct'>
    <div class="px-6 py-4">
        <h2 class="text-xl font-bold">Actividades Recientes</h2>
        <p class="text-sm">Actualizaciones en tiempo real</p>
    </div>
    <div class="p-4 divide-y divide-gray-200">
        <!-- Actividad 1 -->
        @foreach ($activities as $activity)
        <div class="flex items-center py-3">
            <div
                class="{{ $activity->users ? 'bg-red-500' : 'bg-green-500' }} rounded-full w-10 h-10 flex items-center justify-center text-white font-bold uppercase">
                @php
                $nameParts = explode(' ', $activity->users ? $activity->users->name : 'AC');
                $initials = strtoupper(substr($nameParts[0], 0, 1) . substr($nameParts[1] ?? '', 0, 1));
                @endphp
                {{ $initials }}
            </div>
            <div class="ml-4">
                <p class="font-semibold text-gray-800">
                    {{ $activity->users ? $activity->users->name . ' ' . 'ha actualizado' : 'Actualización de actividad'
                    }}
                </p>
                <p class="text-gray-500 text-sm">{{ $activity->message }} con folio #{{ $activity->purchase->folio
                    }}</p>
            </div>
        </div>
        @endforeach
    </div>

    <div class="p-4 flex justify-end">
        {{ $activities->links('vendor.livewire.simple-tailwind') }}
    </div>
</div>