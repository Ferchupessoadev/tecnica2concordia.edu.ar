<flux:header class="bg-navbar-light dark:bg-navbar w-full">
    <img class="size-10" src="{{ asset('favicon.ico') }}" alt="{{ config('app.name') }}">

    <flux:brand href="/" name="Técnica 2 Concordia" class="hidden lg:flex" />

    <flux:spacer class="-lg:hidden"></flux:spacer>

    <flux:navbar class="-mb-px max-lg:hidden pr-10">
        <h2>Expo técnica 2025</h2>
    </flux:navbar>

    <div class="flex gap-3 items-center">
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

    <flux:separator vertical class="max-lg:hidden m-2"></flux:separator>

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
</flux:header>
