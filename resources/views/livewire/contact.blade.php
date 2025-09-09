<section class="flex flex-col items-center p-5">

    <form wire:submit="send" class="flex flex-col gap-5 w-full md:w-1/2">
        <div class="flex flex-col">
            <h2 class="text-2xl font-bold">Contacto</h2>
            <p class="text-lg mb-4 text-gray-400">Formulario de contacto</p>
        </div>

        <div class="flex flex-col gap-3 items-center">
            <x-input-contact type="text" placeholder="Nombre" name="name" wire:model="name"></x-input-contact>
            <x-input-contact type="text" placeholder="Asunto" name="subject" wire:model="subject"></x-input-contact>
            <x-input-contact type="textarea" placeholder="Mensaje" name="message" wire:model="message"></x-input-contact>
            <input type="submit" value="Enviar" class="transition-colors duration-300 ease-in-out px-10 py-3 bg-[rgba(255,255,255,0.1)] text-sm w-max rounded text-white cursor-pointer hover:bg-red-950">
        </div>
    </form>
</section>
