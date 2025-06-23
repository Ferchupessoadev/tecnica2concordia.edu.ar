<x-layouts.app-header title="E.E.T. N° 2 Independencia">
    <main class="flex flex-col items-between">
        <div class="background-primary">
            <flux:container>
                <div class="flex items-center md:flex-row flex-col justify-center gap-3 h-[calc(100vh-4.2rem)]">
                    <div class="flex flex-col justify-center gap-6">
                        <div>
                            <flux:heading class="md:text-3xl text-xl" level="1">E.E.T. N° 2 "Independencia"</flux:heading>
                            <flux:text variant="strong" class="md:text-lg text-md">
                                La Escuela Técnica N° 2 "Independencia" de Concordia forma a sus estudiantes mediante talleres prácticos y una fuerte vinculación con el mundo laboral, preparándolos para enfrentar desafíos profesionales y académicos.
                            </flux:text>
                        </div>
                        <flux:heading level="4">Redes sociales</flux:heading>
                        <div class="flex gap-3 items-center">
                            <a target="_blank" href="https://www.instagram.com/escuelatecnican2/">
                                <img src="{{ asset('instagram.ico') }}" class="transition-normal duration-300 size-7 md:size-10 hover:scale-110">
                            </a>
                            <a target="_blank" href="https://www.facebook.com/profile.php?id=100064268132995">
                                <img src="{{ asset('facebook.ico') }}" class="transition-normal duration-300 size-7 md:size-10 hover:scale-110">
                            </a>
                        </div>
                    </div>
                    <img src="{{ asset('banner.jpg') }}" class="md:h-[70%] h-56 object-cover border-2 border-navbar dark:border-white rounded">
                </div>
            </flux:container>
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
