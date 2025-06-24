@props(['dark' => false])
<div id="carousel" {{ $attributes->merge(['class' => 'relative overflow-hidden']) }}>
    {{ $slot }}
    @if ($dark)
        <div class="absolute inset-0 bg-black/60 z-10"></div>
    @endif
</div>

<script>
    const images = document.querySelectorAll('#carousel img');
    let current = 0;

    setInterval(() => {
        images[current].classList.remove('opacity-100');
        images[current].classList.add('opacity-0');

        current = (current + 1) % images.length;

        images[current].classList.remove('opacity-0');
        images[current].classList.add('opacity-100');
    }, 4000);
</script>
