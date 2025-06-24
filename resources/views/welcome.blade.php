<x-layouts.app-header title="E.E.T. N° 2 Independencia">
    <main class="flex flex-col items-between">
        <div class="h-[calc(100vh-70px)]">
            <x-carousel class="h-full z-10" dark>
                <x-carousel.item image="{{ asset('slider-banner/1.jpg') }}" alt=""></x-carousel.item>
                <x-carousel.item image="{{ asset('slider-banner/2.jpg') }}" alt=""></x-carousel.item>
                <x-carousel.item image="{{ asset('slider-banner/3.jpg') }}" alt=""></x-carousel.item>
            </x-carousel>
            <div class="absolute inset-0 flex flex-col justify-center items-start px-6 md:px-8">
                <h1 class="text-2xl md:text-5xl font-bold text-center text-white z-10">E.E.T. N° 2 Independencia</h1>
                <p class="text-lg md:text-2xl font-bold text-center text-white z-10">Formando mediante talleres prácticos y una fuerte vinculación con el mundo laboral.</p>
                <div class="flex gap-3 items-center z-10 mt-4">
                    <a target="_blank" href="https://www.instagram.com/escuelatecnican2/">
                        <img src="{{ asset('instagram.ico') }}" class="transition-normal duration-300 size-7 md:size-10 hover:scale-110">
                    </a>
                    <a target="_blank" href="https://www.facebook.com/profile.php?id=100064268132995">
                        <img src="{{ asset('facebook.ico') }}" class="transition-normal duration-300 size-7 md:size-10 hover:scale-110">
                    </a>
                </div>
            </div>
        </div>

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
