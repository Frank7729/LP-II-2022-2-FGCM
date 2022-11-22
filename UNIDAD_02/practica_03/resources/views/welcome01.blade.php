<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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

<body>
    @include('welcome.header')

    <nav x-data="{ open: false, open1: false }" class="bg-white w-full border-b-4 border-b-green-600 sticky top-0 z-50">
        <div class="mx-auto max-w-7xl px-2 md:px-6 lg:px-4">
            <div class="relative flex h-20 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center md:hidden">
                    <!-- Mobile menu button left-->
                    <button @click="open = !open" type="button"
                        class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-green-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>

                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>

                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="flex flex-1 items-center justify-center md:items-stretch md:justify-start">
                    <div class="flex flex-shrink-0 items-center">
                        <img class="block h-10 w-auto lg:hidden" src="img/deva.png" alt="">
                        <img class="hidden h-14 w-auto lg:block" src="img/deva.png" alt="">
                    </div>
                    <div class="hidden md:ml-6 md:block">
                        <div class="flex space-x-4 py-3 text-sm font-bold text-gray-800">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="/inicio"
                                class="bg-green-600 hover:bg-green-600 hover:text-white text-white px-3 py-2 rounded-md">Inicio</a>

                            <a href="/producto"
                                class="hover:bg-green-600 hover:text-white px-3 py-2 rounded-md ">Productos</a>

                            <a href="#" class="hover:bg-green-600 hover:text-white px-3 py-2 rounded-md ">¿Quienes
                                somos?</a>

                            <a href="#"
                                class=" hover:bg-green-600 hover:text-white px-3 py-2 rounded-md ">Contactanos</a>
                        </div>
                    </div>
                </div>

                <div
                    class="absolute inset-y-0 right-0 flex items-center pr-2 md:static md:inset-auto md:ml-6 md:pr-0 md:hidden">
                    <!-- Mobile menu button right-->
                    <button @click="open1 = !open" type="button"
                        class="inline-flex items-end justify-center rounded-md p-2 text-gray-400 hover:bg-green-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="user-mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            troke-width="1.5" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="absolute inset-y-0 right-0 flex items-center pr-2 md:static md:inset-auto md:ml-6 md:pr-0">
                    <div class="relative ml-3 md:ml-6 md:block hidden">
                        @if (Route::has('login'))
                            <div class="flex space-x-4 py-3">

                                    <a href="{{ route('login') }}"
                                        class="text-base text-gray-700 dark:text-neutral-900 underline bg-gray-600 p-2 rounded-xl
                                            hover:bg-gray-500
                                            hover:text-white"><b>Login</b></a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="text-base text-gray-700 dark:text-neutral-900 underline bg-gray-600 p-2 rounded-xl
                                                hover:bg-gray-500
                                                hover:text-white"><b>Register</b></a>
                                    @endif

                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div x-show="open" @click.outside="open = false" class="md:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pt-2 pb-3 text-sm font-bold text-gray-800 border-t-4 border-t-green-600">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="/inicio"
                    class="bg-green-600 hover:bg-green-600 hover:text-white text-white block px-3 py-2 rounded-md">Inicio</a>

                <a href="/producto"
                    class=" hover:bg-green-600 hover:text-white block px-3 py-2 rounded-md ">Productos</a>

                <a href="#" class=" hover:bg-green-600 hover:text-white block px-3 py-2 rounded-md ">¿Quienes
                    somos?</a>

                <a href="#"
                    class=" hover:bg-green-600 hover:text-white block px-3 py-2 rounded-md ">Contactanos</a>
            </div>
        </div>
        <div x-show="open1" @click.outside="open1 = false" class="md:hidden" id="user-mobile-menu">
            <div class="space-y-1 px-2 pt-2 pb-3 text-sm font-bold text-gray-800 border-t-4 border-t-green-600">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <div class="relative ml-3">
                    @if (Route::has('login'))
                        <div class="flex space-x-4 py-3">


                                <a href="{{ route('login') }}"
                                    class="text-base text-gray-700 dark:text-gray-500 underline">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="ml-4 text-base text-gray-700 dark:text-gray-500 underline">Register</a>
                                @endif

                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    @include('welcome.slider')

    @include('welcome.contents')

    @include('welcome.footer')
</body>

</html>
