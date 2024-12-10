<div class="flex w-full justify-between items-center bg-white shadow-2xl rounded-md p-3 border border-gray-100">
    <div class="flex flex-row gap-3 items-center">
        <div class="rounded-md bg-orange-100 p-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
            </svg>
        </div>
        <div class="flex flex-col">
            <p class="font-semibold text-gray-500 text-sm">Ordenes</p>
            <span class="font-bold text-[17px]">{{ $allOrders }}</span>
        </div>
    </div>
    <div class="flex flex-row gap-3 items-center">
        <div class="rounded-md bg-blue-100 p-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg>

        </div>
        <div class="flex flex-col">
            <p class="font-semibold text-gray-500 text-sm">Usuarios</p>
            <span class="font-bold text-[17px]">{{ $allUsers }}</span>
        </div>
    </div>
    <div class="flex flex-row gap-3 items-center">
        <div class="rounded-md bg-green-100 p-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </div>
        <div class="flex flex-col">
            <p class="font-semibold text-gray-500 text-sm">Ganancias</p>
            <span class="font-bold text-[17px]">${{ $earnings }}</span>
        </div>
    </div>
    <div class="flex flex-row gap-3 items-center">
        <div class="rounded-md bg-red-100 p-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </div>
        <div class="flex flex-col">
            <span class="font-semibold text-gray-500 text-sm">Tiempo Actual</span>
            <div x-data="{ time: new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }) }"
                x-init="setInterval(() => time = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }), 1000)">
                <span x-text="time" class="font-bold text-[17px]"></span>
            </div>
        </div>
    </div>
</div>