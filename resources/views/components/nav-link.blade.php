@props(['active' => false])

<a class="{{ $active ? 'bg-gray-800 text-white font-bold' : '' }} rounded-md px-4 py-2 font-average text-md hover:text-white hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150"
    aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>
    {{ $slot }}
</a>
