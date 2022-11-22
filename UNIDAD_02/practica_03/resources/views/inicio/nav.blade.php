<nav x-data="{ open: false }" class="bg-white w-full border-b-4 border-b-green-600 sticky top-0 z-50">
    <div class="mx-auto max-w-7xl px-2 md:px-6 lg:px-4">
        <div class="relative flex h-20 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center md:hidden">
                <!-- Mobile menu button-->
                <button @click="open = !open" type="button"
                    class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-green-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>

                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
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

            <div class="absolute inset-y-0 right-0 flex items-center pr-2 md:static md:inset-auto md:ml-6 md:pr-0">
                <button type="button"
                    class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                    <span class="sr-only">View notifications</span>
                    <!-- Heroicon name: outline/bell -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                </button>

                <!-- Profile dropdown -->
                <div x-data="{ open: false }" class="relative ml-3">
                    <div>
                        <button @click="open = !open" type="button"
                            class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </button>
                    </div>

                    <div x-show="open" @click.outside="open = false"
                        class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <!-- Active: "bg-gray-100", Not Active: "" -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                <h1
                                    class="relative text-sm text-gray-700 hover:text-white hover:bg-gray-500 block px-3 py-2 rounded-md">
                                    Your Profile</h1>
                            </x-jet-dropdown-link>
                        </form>
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                <h1
                                    class="relative text-sm text-gray-700 hover:text-white hover:bg-gray-500 block px-3 py-2 rounded-md">
                                    Settings</h1>
                            </x-jet-dropdown-link>
                        </form>

                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                <h1
                                    class="relative text-sm text-gray-700 hover:text-white hover:bg-gray-500 block px-3 py-2 rounded-md">
                                    Log out</h1>
                            </x-jet-dropdown-link>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="open" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pt-2 pb-3 text-sm font-bold text-gray-800 border-t-4 border-t-green-600">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="/inicio"
                class="bg-green-600 hover:bg-green-600 hover:text-white text-white block px-3 py-2 rounded-md">Inicio</a>
            <a href="/producto" class="hover:bg-green-600 hover:text-white block px-3 py-2 rounded-md ">Productos</a>
            <a href="#" class=" hover:bg-green-600 hover:text-white block px-3 py-2 rounded-md ">¿Quienes
                somos?</a>
            <a href="#" class=" hover:bg-green-600 hover:text-white block px-3 py-2 rounded-md ">Contactanos</a>
        </div>
    </div>
</nav>