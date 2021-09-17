<!DOCTYPE html>
<html x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
            rel="stylesheet"
        />

        <!-- Styles -->
        <!-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- @livewireStyles -->

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer>
        </script>
        <script src="{{ asset('assets/js/init-alpine.js') }}"></script>

        <!-- Charts -->
        <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      defer
    ></script>
        <script src="{{ asset('assets/js/charts-lines.js') }}" defer></script>
        <script src="{{ asset('assets/js/charts-pie.js') }}" defer></script>
        <script src="{{ asset('assets/js/charts-bars.js') }}" defer></script>

        <!-- <script src="{{ mix('js/app.js') }}" defer></script> -->

    </head>

    <body class="font-sans antialiased">
        {{ $slot }}
    </body>

</html>
