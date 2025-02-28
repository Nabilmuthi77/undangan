<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-red-500 hover:bg-red-600 text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center']) }}>
    {{ $slot }}
</button>
