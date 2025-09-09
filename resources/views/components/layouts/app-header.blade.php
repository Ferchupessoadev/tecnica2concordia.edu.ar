<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title }}</title>
        @fluxAppearance
        @vite('resources/css/app.css')
    </head>
    <body class="bg-[var(--color-surface)] dark:bg-[var(--color-surface)] text-[var(--color-surface-content)] flex min-h-screen flex-col font-oswald">
        <x-header></x-header>
        {{ $slot }}
        @fluxScripts
    </body>
</html>
