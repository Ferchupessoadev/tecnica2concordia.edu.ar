<x-layouts.app-header title="E.E.T. N° 2 Independencia">
    <main class="flex flex-col items-between gap-10">
        <div class="h-max md:h-[calc(100vh-70px)] flex gap-4 flex-col md:flex-row py-8 bg-zinc-200 dark:bg-surface shadow">
            <div class="flex flex-col justify-center items-start px-6 md:px-8 w-full md:w-[60%] gap-5">
                <div class="flex flex-col">
                    <h1 class="text-3xl font-extrabold text-red-900">E.E.T N° 2 Independencia</h1>
                    <p class="text-lg text-gray-900 dark:text-gray-300">La Escuela Técnica N° 2 "Independencia" de Concordia forma a sus estudiantes mediante talleres prácticos y una fuerte vinculación con el mundo laboral, preparándolos para enfrentar desafíos profesionales y académicos.</p>
                </div>
                <div class="flex flex-col gap-2">
                    <a href="https://maps.app.goo.gl/hqNWKqgmKZR8wqFY9" target="_blank" class="dark:text-white text-gray-900 text-sm z-10 flex items-center gap-2">
                        <flux:icon.map-pin class="size-5" />
                        <span>Alberdi 223, Concordia, Entre Ríos</span>
                    </a>
                    <a href="https://www.instagram.com/tecnica2independencia/" target="_blank" class="dark:text-white text-gray-900 text-sm z-10 flex items-center gap-2">
                        <flux:icon.phone class="size-5" />
                        <span>(0351) 15-3333</span>
                    </a>
                </div>
            </div>

            <div class="w-full md:w-[40%] flex justify-center items-center px-6">
                <img class="border-white border-2 rounded-xl w-full h-72 object-cover md:h-max" src="{{ asset('banner.jpg') }}" alt="">
            </div>
        </div>

        <flux:container class="w-full h-[100vh]">
            <!-- news -->
            <flux:heading level="2" accent class="md:text-4xl text-xl mt-8">Noticias recientes</flux:heading>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 my-8">
                <x-articles.card />
                <x-articles.card />
                <x-articles.card />
            </div>
            <a
                href="{{ route('news') }}"
                class="flex items-center gap-2 text-sm text-gray-900 dark:text-white hover:underline"
            ><flux:icon.arrow-right class="size-5" />{{ __('Ver mas noticias') }}</a>
        </flux:container>
    </main>
</x-layouts.app-header>
