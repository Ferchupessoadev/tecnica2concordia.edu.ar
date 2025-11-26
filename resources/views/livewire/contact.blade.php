<section class="flex flex-col items-center p-5 gap-5">
    <form wire:submit="send" class="flex flex-col gap-5 w-full md:w-1/2 bg-gray-300 dark:bg-navbar p-5 rounded-md">
        <div class="flex flex-col">
            <h2 class="text-3xl font-bold">Contacto</h2>
            <p class="text-lg mb-4 text-gray-400">Formulario de contacto</p>
        </div>
        <div class="flex flex-col gap-3 items-center">
            <x-input-contact type="text" placeholder="Nombre" name="name" wire:model="name"></x-input-contact>
            <x-input-contact type="text" placeholder="Asunto" name="subject" wire:model="subject"></x-input-contact>
            <x-input-contact type="textarea" placeholder="Mensaje" name="message" wire:model="message"></x-input-contact>
            <input type="submit" value="Enviar" class="transition-colors duration-300 ease-in-out px-10 py-3 bg-gray-950 dark:bg-[rgba(255,255,255,0.1)] text-sm w-max rounded text-white cursor-pointer hover:bg-gray-600">
        </div>
    </form>
    <div class="flex flex-col gap-5 items-center">
        <flux:heading level="2" accent class="md:text-3xl text-xl text-center">Siguenos</flux:heading>
        <div class="flex gap-4">
            <flux:link external href="https://www.instagram.com/escuelatecnican2/">
                <img src="{{ asset('instagram.ico') }}" class="size-6">
            </flux:link>
            <flux:link external href="https://www.facebook.com/profile.php?id=100064268132995">
                <img src="{{ asset('facebook.ico') }}" class="size-6">
            </flux:link>
            <flux:link external href="https://www.youtube.com/@tecnican2independencia382">
                <img src="{{ asset('youtube.ico') }}" class="size-6">
            </flux:link>
        </div>
    </div>
</section>
