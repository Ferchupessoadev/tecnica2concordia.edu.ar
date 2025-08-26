<header class="bg-[var(--color-surface)] dark:bg-[var(--color-surface)] text-[var(--color-surface-content)]">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('favicon.ico') }}" class="mr-3 h-8" alt="">
                    <p class="self-center text-2xl whitespace-nowrap dark:text-white">Técnica 2 concordia</p>
                </a>
            </div>
            <div>
            <flux:dropdown x-data align="end">
                <flux:button variant="subtle" square class="group" aria-label="Preferred color scheme">
                    <flux:icon.sun x-show="$flux.appearance === 'light'" variant="mini" class="text-zinc-500 dark:text-white" />
                    <flux:icon.moon x-show="$flux.appearance === 'dark'" variant="mini" class="text-zinc-500 dark:text-white" />
                    <flux:icon.moon x-show="$flux.appearance === 'system' && $flux.dark" variant="mini" />
                    <flux:icon.sun x-show="$flux.appearance === 'system' && ! $flux.dark" variant="mini" />
                </flux:button>

                <flux:menu>
                    <flux:menu.item icon="sun" x-on:click="$flux.appearance = 'light'">Light</flux:menu.item>
                    <flux:menu.item icon="moon" x-on:click="$flux.appearance = 'dark'">Dark</flux:menu.item>
                    <flux:menu.item icon="computer-desktop" x-on:click="$flux.appearance = 'system'">System</flux:menu.item>
                </flux:menu>
            </flux:dropdown>
            </div>
        </div>
    </div>
</header>
