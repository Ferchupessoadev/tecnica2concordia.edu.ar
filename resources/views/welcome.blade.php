<x-layouts.app-header title="E.E.T. N° 2 Independencia">
    <main class="flex flex-col items-between">
        <x-carousel class="h-[calc(100vh-62px)]" dark>
            <x-carousel.item image="{{ asset('slider-banner/1.jpg') }}" alt="formation"></x-carousel.item>
            <x-carousel.item image="{{ asset('slider-banner/2.jpg') }}" alt="formation"></x-carousel.item>
            <x-carousel.item image="{{ asset('slider-banner/3.jpg') }}" alt="formation"></x-carousel.item>
        </x-carousel>


        <flux:container>
            <!-- news -->
            <flux:heading level="2" accent class="md:text-3xl text-xl mt-8 text-center">Noticias recientes</flux:heading>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <x-articles.card />
                <x-articles.card />
                <x-articles.card />
            </div>
        </flux:container>
    </main>
</x-layouts.app-header>
