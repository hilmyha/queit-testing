<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">

        {{-- session from fortify user controller --}}
        @if (session('status') == 'verification-link-sent')
            <div class="absolute z-20 m-3 right-0 flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50" role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-medium">Danger alert!</span> Change a few things up and try submitting again.
                </div>
            </div>
        @endif

        <div class="flex min-h-screen">
            <div class="relative hidden lg:block h-screen w-1/2 bg-gradient-to-r from-red-600 to-white-500 overflow-hidden">
                <div class="py-12 px-16 container absolute flex flex-col h-full z-20 top-0 justify-end">
                    <div class="w-full flex items-center gap-2">
                        <x-application-logo class="w-12 h-12 fill-current text-white" />
                        <span class="text-white text-xl font-bold">QueIT</span>
                    </div>
                </div>
            </div>
            <div class="h-screen w-full lg:w-1/2 bg-white flex items-center">
                <div class="p-12 w-full lg:p-28">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>