<nav class="bg-white fixed w-full drop-shadow-md z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
        <div class="flex items-center">
            <img src={{ asset('storage/images/logo_denmarz1.png') }} class="h-14 mr-3" alt="Denmarz Logo" />
        </div>


        <div class="flex items-center md:order-2">
            {{-- {{dd(is_null(Auth::user()))}} --}}

            @if (!is_null(Auth::user()))

                @if (Auth::user()->type == 'admin')
                    <a href="{{ url('/dashboard') }}"
                        class="font-bold block py-2 pl-3 pr-4  rounded md:bg-transparent  md:p-0  hover:text-red-400 text-gray-900">Dashboard</a>
                @else
                    <a href="{{route('cart')}}" class="mr-6">
                        <svg class="w-6 h-6 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 18 21">
                            <path
                                d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                        </svg>
                    </a>
                    <button type="button"
                        class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                        data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        <svg class="w-7 h-7 text-gray-800 dark:text-white " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                        </svg>
                    </button>
                @endif
            @else
                <a href="{{ route('login') }}"
                    class="inline-flex items-center justify-center px-5 py-1   text-base font-medium text-center text-red-600 border border-red-400 rounded-lg hover:bg-red-500 hover:text-white focus:ring-4 focus:ring-gray-100  "
                    >Log in
                </a>
                

            @endif
            @if (!is_null(Auth::user()))
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-    none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{Auth::user()->name}}</span>
                        <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{Auth::user()->email}}</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">

                        <li>
                            <x-dropdown-link :href="route('settings.edit')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                                {{ __('Settings') }}
                            </x-dropdown-link>
                        </li>

                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Sign out') }}
                                </x-dropdown-link>
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- end Dropdown menu -->
            @endif
            <button data-collapse-toggle="navbar-user" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-user" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>


        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white ">

                <li class="">
                    <a href="{{ route('home') }}"
                        class="{{ request()->routeIs('home') ? 'text-red-500 rounded-lg underline underline-offset-8' : '' }} 
                                 font-bold block py-2 pl-3 pr-4  rounded md:bg-transparent  md:p-0  hover:text-red-400 hover:underline hover:underline-offset-8"
                        aria-current="page">Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}"
                        class="{{ request()->routeIs('about') ? 'text-red-500 rounded-lg underline underline-offset-8' : '' }} 
                                 font-bold block py-2 pl-3 pr-4  rounded md:bg-transparent  md:p-0  hover:text-red-400 hover:underline hover:underline-offset-8"
                        aria-current="page">About
                    </a>
                </li>
                <li>
                    <a href="{{ route('menu') }}"
                        class="{{ request()->routeIs('menu') ? 'text-red-500 rounded-lg underline underline-offset-8' : '' }} 
                                 font-bold block py-2 pl-3 pr-4  rounded md:bg-transparent  md:p-0  hover:text-red-400 hover:underline hover:underline-offset-8"
                        aria-current="page">Menu
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}"
                        class="{{ request()->routeIs('contact') ? 'text-red-500 rounded-lg underline underline-offset-8' : '' }} 
                                 font-bold block py-2 pl-3 pr-4  rounded md:bg-transparent  md:p-0  hover:text-red-400 hover:underline hover:underline-offset-8"
                        aria-current="page">Contact
                    </a>
                </li>
                @if (!is_null(Auth::user()) && Auth::user()->type == 'customer')
                    <li>
                        <a href="#"
                            class="font-bold block py-2 pl-3 pr-4  rounded md:bg-transparent  md:p-0  hover:text-red-400 text-gray-900">
                            Track Order</a>
                    </li>
                @endif


            </ul>
        </div>
    </div>
</nav>
