<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pizza House') }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>



<body class="font-sans antialiased">
    <div class="min-h-screen ">

        {{-- @include('layouts.navigation') --}}

        @include('layouts.webnav')

        <!-- Page Content -->
        <main class="">
            {{-- {{ $slot }} --}}
            @yield('content')
        </main>

        @include('layouts.webFooter')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    {{-- <script src="{{ asset('js/modal.js') }}"></script>
    <script src="{{ asset('js/imagePreview.js') }}"></script>
    <script src="{{ asset('js/TableSearch.js') }}"></script> --}}
    <script src="{{ asset('js/updatePrice.js') }}"></script>
    <script src="{{ asset('js/size-select.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   

    @include('sweetalert::alert')

</body>

</html>
