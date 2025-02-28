<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center']) }}>
    {{ $slot }}
</button>
