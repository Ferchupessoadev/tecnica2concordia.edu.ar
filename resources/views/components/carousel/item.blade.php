@props(['image' => '', 'alt' => ''])

<img
    src="{{ $image }}"
    class="absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-100"
    alt="{{ $alt }}"
/>
