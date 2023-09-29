@extends('layouts.web')


@section('content')
    <section class="text-gray-600 body-font ">
        <div class="absolute inset-0 bg-gray-300 ">
            <iframe style="filter: grayscale(1) contrast(1.2) opacity(0.4);"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d832.5771999228609!2d126.21126809461461!3d6.958861263181828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32fbc99a387899f1%3A0xaa25c502c1fe10ac!2sDenmarz%20Pizza%20House-Madang!5e0!3m2!1sen!2sph!4v1695932471783!5m2!1sen!2sph"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <form action="{{ route('feedback.store') }}" method="post">
            @csrf
            <div class="container px-5 py-24 mx-auto flex">

                <div
                    class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
                    <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
                    <p class="leading-relaxed mb-5 text-gray-600">We would love to hear your thoughts.
                    </p>
                    <div class="relative mb-4">
                        <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                        <input type="text" id="name" name="name"
                            placeholder="Please provide a full Name ."
                            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                        <input type="email" id="email" name="email"
                            placeholder="Please provide a valid email address."
                            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                        <textarea id="message" name="message" placeholder="Don't forget to write your message!"
                            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                    </div>
                    <button
                        class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>

                </div>


            </div>
        </form>
    </section>
@endsection
