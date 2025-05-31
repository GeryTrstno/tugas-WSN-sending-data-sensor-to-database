<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-[#705ebd]  ">
        <flux:header container class="border-b border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
            <flux:heading size="lg">ESP32 Dashboard with HC-SR04</flux:heading>
            <flux:spacer/>
            <flux:navbar class="me-1.5 space-x-0.5 rtl:space-x-reverse py-0!">
                <flux:navbar.item>
                    <a href="/" class="flex items-center gap-2">
                        <span>Dashboard</span>
                    </a>
                </flux:navbar.item>
                <flux:navbar.item>
                    <a href="/" class="flex items-center gap-2">
                        <span>About</span>
                    </a>
                </flux:navbar.item>

            </flux:navbar>
        </flux:header>

        {{ $slot }}

        @fluxScripts
    </body>
</html>
