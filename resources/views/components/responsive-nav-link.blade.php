@php
    $classes =
        'block ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base text-black hover:text-white hover:bg-gray-800 hover:border-black focus:outline-none transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
