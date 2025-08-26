<flux:header class="bg-navbar-light dark:bg-navbar w-full">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-3" inset="left" />


    <flux:brand href="/" logo="{{ asset('favicon.ico') }}" name="E.E.T. N° 2 Independencia" class="px-2" />

    <flux:spacer class="-lg:hidden"></flux:spacer>

    <flux:navbar class="-mb-px max-lg:hidden pr-10">
        <flux:navbar.item :current="request()->routeIs('home')" href="{{ route('home') }}">Inicio</flux:navbar.item>
        <flux:navbar.item :current="request()->routeIs('news')" href="{{ route('news') }}">Noticias</flux:navbar.item>
        <flux:navbar.item :current="request()->routeIs('formation')" href="{{ route('formation') }}">Formación profesional</flux:navbar.item>
        <flux:dropdown position="bottom">
            <flux:button variant="ghost" class="group">
                <span class="flex items-center gap-2">
                    <span class="text-zinc-500 dark:text-zinc-300">Tecnicaturas</span>
                    <flux:icon.chevron-down variant="mini" class="text-zinc-500 dark:text-white" />
                </span>
            </flux:button>

            <flux:menu>
                <flux:menu.item :current="request()->routeIs('computation')" href="{{ route('computation') }}">Computación</flux:menu.item>
                <flux:menu.item :current="request()->routeIs('bussiness')" href="{{ route('bussiness') }}">Adm. empresarial</flux:menu.item>
                <flux:menu.item :current="request()->routeIs('gastronomy')" href="{{ route('gastronomy') }}">Gastronomía</flux:menu.item>
            </flux:menu>
        </flux:dropdown>
        <flux:navbar.item :current="request()->routeIs('contact')" href="{{ route('contact') }}">Contacto</flux:navbar.item>
    </flux:navbar>

    <flux:spacer class="-lg:hidden"></flux:spacer>

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

<flux:sidebar stashable sticky class="lg:hidden bg-zinc-50 dark:bg-zinc-900 border rtl:border-r-0 rtl:border-l border-zinc-200 dark:border-zinc-700">
    <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

    <flux:brand href="/" logo="{{ asset('favicon.ico') }}" name="Técnica 2 Concordia" class="px-2 dark:hidden" />
    <flux:brand href="/" logo="{{ asset('favicon.ico') }}" name="Técnica 2 Concordia" class="px-2 hidden dark:flex" />

    <flux:navlist variant="outline">
        <flux:navlist.item :current="request()->routeIs('home')" href="{{ route('home') }}">Inicio</flux:navlist.item>
        <flux:navlist.item :current="request()->routeIs('news')" href="{{ route('news') }}">Noticias</flux:navlist.item>
        <flux:navlist.item :current="request()->routeIs('formation')" href="{{ route('formation') }}">Formación profesional</flux:navlist.item>
        <flux:navlist.item :current="request()->routeIs('events')" href="{{ route('events') }}">Eventos</flux:navlist.item>
        <flux:navlist.item :current="request()->routeIs('contact')" href="{{ route('contact') }}">Contacto</flux:navlist.item>
    </flux:navlist>
</flux:sidebar>
