<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Livewire Basics' }}</title>

    @vite('resources/js/app.js')
</head>

<body>
    <nav class="bg-gray-800 text-white p-4">
        <ul class="flex space-x-6 max-w-7xl mx-auto">
            <li>
                <a wire:navigate href="{{ route('home') }}"
                    class="py-2 hover:text-gray-300 {{ request()->routeIs('home') ? 'text-blue-400' : '' }}">
                    Home
                </a>
            </li>
            <li>
                <a wire:navigate href="{{ route('counter') }}"
                    class="py-2 hover:text-gray-300 {{ request()->routeIs('counter') ? 'text-blue-400' : '' }}">
                    Counter
                </a>
            </li>
            <li>
                <a wire:navigate href="{{ route('todos') }}"
                    class="py-2 hover:text-gray-300 {{ request()->routeIs('todos') ? 'text-blue-400' : '' }}">
                    Todos
                </a>
            </li>
            <li>
                <a wire:navigate href="{{ route('show-posts') }}"
                    class="py-2 hover:text-gray-300 {{ request()->routeIs('show-posts') ? 'text-blue-400' : '' }}">
                    Show Posts
                </a>
            </li>
            <li>
                <a wire:navigate href="{{ route('create-post') }}"
                    class="py-2 hover:text-gray-300 {{ request()->routeIs('create-post') ? 'text-blue-400' : '' }}">
                    Create Posts
                </a>
            </li>
        </ul>
    </nav>

    <main class="max-w-7xl mx-auto p-4">
        {{ $slot }}
    </main>
</body>

</html>