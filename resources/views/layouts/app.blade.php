<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Uk-Dion Group') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">



        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        {{-- alpine --}}
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


        <style>
            [x-cloak] {
                display: none;
            }
    
            .duration-300 {
                transition-duration: 300ms;
            }
    
            .ease-in {
                transition-timing-function: cubic-bezier(0.4, 0, 1, 1);
            }
    
            .ease-out {
                transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
            }
    
            .scale-90 {
                transform: scale(.9);
            }
    
            .scale-100 {
                transform: scale(1);
            }
        </style>

        @livewireStyles

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @livewireScripts
    </body>
</html>
