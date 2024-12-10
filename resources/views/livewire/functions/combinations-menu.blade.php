<div>
    <ul class="flex flex-wrap justify-between gap-10">
        @foreach($combinations as $combination)
        <li
            class="bg-white rounded-lg shadow-lg p-4 w-80 hover:shadow-2xl transition duration-300 ease-in-out transform hover:scale-105">
            <div class="mb-4 text-xl font-semibold text-gray-800">
                <p class="uppercase text-center">combina ahora!</p>
            </div>
            <div class="mb-4">
                <img src="{{ asset('combinations.png') }}" alt="Combinación de comida y bebida"
                    class="w-full h-48 object-cover rounded-md">
            </div>

            <div class="text-sm text-gray-600">
                <p><strong>Comida:</strong> {{ $combination->food->name }}</p>
                <p><strong>Bebida:</strong> {{ $combination->drink->name }}</p>
            </div>

            <button
                class="mt-6 inline-flex items-center justify-center w-full py-3 bg-primary text-white font-semibold text-sm rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50 transition-all">
                Seleccionar Menu!
            </button>
        </li>
        @endforeach
    </ul>
</div>