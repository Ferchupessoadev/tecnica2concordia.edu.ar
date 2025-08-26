<x-layouts.app-header title="E.E.T. N° 2 Independencia">
    <main class="flex flex-col items-between">
        <div class="h-[calc(100vh-70px)]">
            <x-carousel class="h-72 z-10" dark>
                <x-carousel.item image="{{ asset('slider-banner/1.jpg') }}" alt=""></x-carousel.item>
                <x-carousel.item image="{{ asset('slider-banner/2.jpg') }}" alt=""></x-carousel.item>
                <x-carousel.item image="{{ asset('slider-banner/3.jpg') }}" alt=""></x-carousel.item>
            </x-carousel>

            <div class="flex flex-col justify-center items-start px-6 md:px-8">
                <h1 class="text-xl md:text-4xl font-bold text-white z-20">E.E.T N° 2 Independencia</h1>
                <p class="text-sm md:text-lg font-bold text-white z-20">Formando mediante talleres prácticos y una fuerte vinculación con el mundo laboral</p>
            </div>
        </div>

        <flux:container class="w-full h-[100vh]">
            <!-- news -->
            <flux:heading level="2" accent class="md:text-3xl text-xl mt-8 text-center">Noticias recientes</flux:heading>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">
                <x-articles.card />
                <x-articles.card />
                <x-articles.card />
            </div>
        </flux:container>
    </main>
</x-layouts.app-header>
