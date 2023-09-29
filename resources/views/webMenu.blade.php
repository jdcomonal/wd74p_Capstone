@extends('layouts.web')


@section('content')
    <section
        class="pt-5 text-gray-600  body-font bg-gray-600 bg-blend-multiply bg-cover bg-no-repeat bg-center bg-[url('https://images.unsplash.com/photo-1561350111-7daa4f284bc6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80')]">
        <div class="container  py-10 mx-auto flex pt-20  flex-col text-center w-full px-2 ">
            <h1 class=" mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-5xl dark:text-white">
                Pizza Menu
            </h1>
        </div>
    </section>
    <section class="text-gray-600 body-font  bg-gray-50  ">
        <div class="container px-5 py-24 mx-auto">
           
            <div class="flex flex-wrap -m-4 justify-center ">
                @foreach ($pizza as $pizza)
                    <div class="lg:w-3/12 md:w-1/2 p-4 mx-4 my-4 w-full h-auto bg-white rounded-xl hover:shadow-md ">

                        <a class="block h-fit rounded overflow-hidden ">
                            <img alt="ecommerce"
                                class="object-cover object-center w-2/3 h-2/3 block mx-auto max-md:w-2/3 max-md:h-2/3"
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
                        <a href="{{ route('menu.order', ['id' => $pizza->PizzaID]) }}"
                            class="mt-5 inline-block px-3 py-1 rounded-lg bg-gray-700  hover:bg-gray-500 text-white">
                            Place Order
                        </a>
                    </div>
                @endforeach
                
            </div>

        </div>

    </section>
@endsection
