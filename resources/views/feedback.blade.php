@extends('layouts.app') <!-- Extend the layout -->

@section('content')

<div class="p-4 sm:ml-64  ">
    <div class="p-4  rounded-lg  mt-14">

        <nav class="flex " aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <div class="inline-flex items-center text-sm font-medium text-gray-700 dark:text-gray-700 ">
                        <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        FeedBacks
                    </div>
                </li>

            </ol>
        </nav>


        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
                

                <div class="bg-white shadow-sm sm:rounded-lg">
                    <div class="py-4 text-gray-900">
                        {{-- ---------------------------------- --}}
                        
                        <div class=" overflow-x-auto shadow-md sm:rounded-lg">
                            <table id="myTable" class="w-full text-sm text-left text-black-500">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 ">
                                            Name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                           Email
                                        </th>

                                        <th scope="col" class="px-6 py-3 max-lg:hidden">
                                           Message
                                        </th>
                                        
                                        <th scope="col" class="px-6 py-3">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($feedback as $feedback)
                                        <tr class="bg-white border-b hover:bg-gray-100 ">
                                            
                                            <td class="px-6 py-4">
                                                {{ $feedback->name }}
                                            </td>
                                            <td class="px-6 py-4 max-lg:hidden">
                                                {{ $feedback->email }}
                                            </td>
                                            <td class="px-6 py-4 max-lg:hidden">
                                                {{ $feedback->message }}
                                            </td>
                                           
                                            
                                            <td class="px-6 py-4 ">
                                                
                                                <a href="{{ $feedback->id }}" class="mx-1 font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>     
                                            </td>
                                        </tr>
                                    @endforeach


                                    </tr>
                                </tbody>
                            </table>
                        </div>


                        {{-- ------------------------------------------- --}}
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>




   
</div>

@endsection
