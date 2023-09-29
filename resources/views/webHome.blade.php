@extends('layouts.web')

@section('content')
    <section
        class=" bg-gray-500 bg-blend-multiply bg-cover bg-center bg-no-repeat bg-[url('https://images.unsplash.com/photo-1561350111-7daa4f284bc6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80')]">
        <div class="h-screen grid max-w-screen-xl  px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12  ">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    The Best Pizza in Town.</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">We are
                    serving hand-tossed pizza using mozzarella cheese in Italian style.<br>Freshly baked everyday.</p>

                <a href="#"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Get started
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="{{ route('register') }}"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Register
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ asset('storage/images/pizza-png-19310.png') }}" alt="denmarz Features">
            </div>
        </div>
    </section>
    {{-- ----how it works --}}
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="text-center mb-20 ">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">How it Works
                </h1>
                <div class="flex mt-6 justify-center">
                    <div class="w-16 h-1 rounded-full bg-red-500 inline-flex"></div>
                </div>
            </div>
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6 ">
                <div class="p-4 max-md:w-2/4 md:w-1/4 flex flex-col text-center items-center hover:bg-gray-200 rounded-md">
                    <div
                        class="w-full  inline-flex items-center justify-center rounded-full  text-indigo-500 mb-5 flex-shrink-0">
                        <img src="{{ asset('storage/images/Mobile-login.jpg') }}" alt="denmarz Features">
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Create Account</h2>

                    </div>
                </div>

                <div
                    class="p-4 max-md:w-2/4 md:w-1/4 flex flex-col text-center items-center hover:bg-gray-100 hover:rounded-lg ">
                    <div class="w-full  inline-flex items-center justify-center   text-indigo-500 mb-5 flex-shrink-0">
                        <img src="{{ asset('storage/images/buildpizza.png') }}" alt="denmarz Features">
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Order Pizza</h2>

                    </div>
                </div>
                <div
                    class="p-4 max-md:w-2/4 md:w-1/4 flex flex-col text-center items-center hover:bg-gray-100 hover:rounded-lg ">
                    <div class="w-full  inline-flex items-center justify-center  text-indigo-500 mb-5 flex-shrink-0">
                        <img src="{{ asset('storage/images/Map-light.jpg') }}" alt="denmarz Features">
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Confirm & Pay</h2>

                    </div>
                </div>

                <div
                    class="p-4 max-md:w-2/4 md:w-1/4 flex flex-col text-center items-center hover:bg-gray-100 hover:rounded-lg ">
                    <div class="w-full  inline-flex items-center justify-center l  text-indigo-500 mb-5 flex-shrink-0">
                        <img src="{{ asset('storage/images/pizza_delivery.png') }}" alt="denmarz Features">
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Track & Wait</h2>

                    </div>
                </div>

            </div>

        </div>

    </section>
    {{-- ------------feature products --}}
    {{-- bg-[url('/storage/app/public/images/bg.png')] --}}

    <section class="text-gray-600 body-font  bg-gray-50  ">
        <div class="container px-5 py-24 mx-auto">
            <div class="text-center mb-20 ">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Featured Products
                </h1>
                <div class="flex mt-6 justify-center">
                    <div class="w-16 h-1 rounded-full bg-red-500 inline-flex"></div>
                </div>
            </div>
            <div class="flex flex-wrap -m-4 justify-evenly ">
                @foreach ($pizza as $pizza)
                    <div class="lg:w-3/12 md:w-1/2 p-4 w-full h-auto hover:bg-white rounded-lg ">

                        <a class="block h-fit rounded overflow-hidden ">
                            <img alt="ecommerce" class="object-cover object-center w-2/3 h-2/3 block mx-auto max-md:w-2/3 max-md:h-2/3"
                                src="{{ asset('storage/images/' . $pizza->Img) }}">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-red-500 font-bold text-lg tracking-widest title-font mb-1">
                                {{ $pizza->PizzaName }}</h3>
                            <h2
                                class="text-gray-500  title-font text-sm font-medium overflow-hidden h-14 hover:line-clamp-none hover:h-auto  text-ellipsis line-clamp-3">
                                {{ $pizza->Description }}</h2>
                            <p class="mt-1 font-bold ">₱{{ $pizza->R }}</p>
                        </div>
                        <a href="{{ route('menu.order', ['id' => $pizza->PizzaID]) }}" class="mt-5 inline-block px-3 py-1 rounded-lg bg-gray-700  hover:bg-gray-500 text-white">
                            Place Order
                        </a>
                    </div>
                @endforeach
                <a class="mt-10 font-semibold hover:underline underline-offset-8 hover:text-red-500" href="{{ route('menu') }}">View
                    More</a>
            </div>

        </div>

    </section>

    {{-- -----------newsletter --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="flex flex-row  max-lg:flex-col items-center py-8 px-4 mx-auto max-w-screen-xl lg:py-10 lg:px-6">
            <div class="mx-auto  max-w-screen-md sm:text-center w-1/3 max-lg:w-full ">
                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl dark:text-white">Sign up
                    for our newsletter</h2>
                <p class="mx-auto mb-8 max-w-2xl font-light text-gray-500 md:mb-12 sm:text-xl dark:text-gray-400">Stay up
                    to date with the roadmap progress, announcements and exclusive discounts feel free to sign up with your
                    email.</p>

            </div>
            <div class="mx-auto max-w-screen-md sm:text-center w-2/3 max-md:w-full">
                <form action="{{ route('subscribe.store') }}" method="post">
                    @csrf
                    <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                        <div class="relative w-full">
                            <label for="email"
                                class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email
                                address</label>
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                    </path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                            </div>
                            <input
                                class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Enter your email" type="email" name="email" id="email" required="">
                        </div>
                        <div>
                            <button type="submit"
                                class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-primary-700 border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Subscribe</button>
                        </div>
                    </div>
                    <div
                        class="mx-auto max-w-screen-sm text-sm text-left text-gray-500 newsletter-form-footer dark:text-gray-300">
                        We care about the protection of your data. <a href="#"
                            class="font-medium text-primary-600 dark:text-primary-500 hover:underline">Read our Privacy
                            Policy</a>.</div>
                </form>
            </div>
        </div>
    </section>
@endsection
