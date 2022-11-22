<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" class="block h-10 w-auto lg:hidden" href="./img/deva.png" />
    <link rel="icon" type="image/png" class="hidden h-14 w-auto lg:block" href="./img/deva.png" />
    <title>DEVAPerú</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

</head>

<style>
    @keyframes movi {

        /*from {
            background-position: bottom 10% left 20%;
        }   to {
            background-position: top 20% right 80%;
        }     */
        from {
            background-position: left 70%;
            background-size: 100%
        }

        to {
            background-position: left 100%;
            background-size: 150%
        }
    }
</style>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="bg-gray-100">
        @include('inicio.header')
        @livewire('navigation')
        @include('inicio.slider')
        @include('inicio.contents')
        @include('inicio.footer')
    </div>

    @stack('modals')

    @livewireScripts
    <script type="text/javascript">
        Livewire.on('alert', function(message) {
            Swal.fire(
                'Mensaje del sistema',
                message,
                'success'
            )
        })
    </script>
    @stack('js')
</body>

</html>
