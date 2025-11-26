<div class="flex flex-col items-center">
    <div class="dark:bg-black/70 bg-gray-500/50 flex flex-col items-center p-4 rounded">
        <div class="flex flex-col items-center justify-center gap-2">
            <img
                class="w-24 h-24"
                src="{{ asset('favicon.ico') }}"
                alt="E.E.T No. 2 Concordia"
            >
            <p class="text-2xl">Login admin</p>
        </div>
        <form
            wire:submit="login"
            class="flex flex-col gap-5 items-center justify-center my-4 w-96"
        >
            <div class="flex flex-col w-full">
                <input class="px-4 py-3 bg-[rgba(255,255,255,0.1)] text-sm w-full rounded" type="text" wire:model="email" placeholder="Email">
                @error('email') <span class="text-red-400 text-sm mt-1">El email es requerido y debe ser valido</span> @enderror
            </div>
            <div class="flex flex-col w-full items-end">
                <input class="px-4 py-3 bg-[rgba(255,255,255,0.1)] text-sm w-full rounded" type="password" wire:model="password" placeholder="Contraseña">
                @error('password') <span class="text-red-400 text-sm mt-1">{{ $message }}</span> @enderror
                <a href="{{ route('reset.password') }}" class="text-sm w-max text-white mt-2 underline hover:text-gray-400">¿Olvidaste tu contraseña?</a>
            </div>
            <button class="px-10 py-2 dark:bg-gray-800 bg-gray-600 rounded text-white cursor-pointer" type="submit">Login</button>
        </form>
    </div>
</div>
