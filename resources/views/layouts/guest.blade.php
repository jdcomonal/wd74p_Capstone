<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
       

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased ">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0
        bg-gray-500 bg-blend-multiply bg-cover bg-center bg-no-repeat bg-[url('https://images.unsplash.com/photo-1561350111-7daa4f284bc6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80')]
        ">
            
            

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
               
                    <div class="flex justify-center mb-2">
                        {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                        <img class=" w-60" src="{{ asset('storage/images/logo_denmarz1.png') }}" alt="Denmarz LOGO">
                        
                    </div>
                    
               
                {{-- <h1>hello guest</h1> --}}
                {{ $slot }}
            </div>
            
        </div>
    </body>
</html>
