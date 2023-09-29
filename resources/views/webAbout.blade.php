@extends('layouts.web')

@section('content')
    <section
        class="pt-10 text-gray-600 body-font h-1/3 bg-gray-600 bg-blend-multiply bg-cover bg-no-repeat bg-center bg-[url('https://images.unsplash.com/photo-1561350111-7daa4f284bc6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80')]">
        <div class="container  py-24 mx-auto ">
            <div class="flex flex-col text-center w-full px-2">
                <h1 class=" mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-5xl dark:text-white">Welcome to Denmarz Pizza House!
                </h1>
                <p class="lg:w-2/3 mx-auto sm:text-sm md:text-lg text-gray-100 leading-relaxed text-base">At Denmarz Pizza House, we're
                    not just about pizzas; we're about creating memorable experiences for every bite. Founded 2019 , our
                    passion for crafting mouthwatering pizzas and delivering exceptional service has been at the heart of
                    our journey.</p>
            </div>

        </div>
    </section>

    <section class="text-gray-600 body-font ">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex items-center lg:w-5/6 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                <div
                    class="max-sm:w-full sm:w-1/3 sm:h-80  w-20 sm:mr-10 inline-flex items-center justify-center rounded-full  text-indigo-500 flex-shrink-0">
                    <img alt="ecommerce" class="object-cover object-center  block mx-auto rounded-lg"
                                src="{{ asset('storage/images/one-man-preparing.jpg') }}">
                </div>
                <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Our Story:</h2>
                    <p class="leading-relaxed text-base">From a humble beginning in Denmarz's kitchen,
                        where a love for the perfect pizza crust and the finest toppings ignited,
                        we've grown into a beloved local pizzeria. Denmarz's dedication to quality,
                        flavor, and the joy of sharing a meal with loved ones set the foundation for what Denmarz Pizza House represents today
                    </p>
                    
                </div>
            </div>
            <div class="flex items-center lg:w-5/6 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                
                <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Our Commitment:</h2>
                    <p class="leading-relaxed text-base">
                        At Denmarz Pizza House,
                         we are committed to using only the freshest,
                          locally sourced ingredients to create our masterpieces.
                           Our talented chefs pour their heart and creativity into every pizza, 
                           ensuring that each bite is a burst of flavor that will delight your taste buds.
                    </p>
                    
                </div>
                <div
                    class="max-sm:w-full max-sm:mt-5 sm:w-1/3 sm:h-40 md:h-80 w-20 sm:ml-10 inline-flex overflow-hidden items-center justify-center rounded-lg  text-indigo-500 flex-shrink-0">
                    <img alt="ecommerce" class="object-cover object-center  block mx-auto rounded-lg"
                                src="{{ asset('storage/images/fresh-ingredients.jpg') }}">
                </div>
            </div>
            <div class="flex items-center lg:w-5/6 mx-auto  pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
                <div
                    class="max-sm:w-full  sm:w-1/3 sm:h-40 md:h-80 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full  text-indigo-500 flex-shrink-0">
                    <img alt="ecommerce" class="object-cover object-center  block mx-auto rounded-lg"
                                src="{{ asset('storage/images/close-up-friends.jpg') }}">
                </div>
                <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Our Promise:</h2>
                    <p class="leading-relaxed text-base">When you choose Denmarz Pizza House, you're choosing not just a pizza, but a culinary experience crafted with love and attention to detail. Whether you're indulging in a classic Margherita, exploring unique flavor combinations,
                         or sharing a laughter-filled meal with friends and family,
                         we're here to make each moment memorable.
                    </p>
                    
                </div>
            </div>
            
    </section>
@endsection
