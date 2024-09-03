@extends('layouts.client')
@section('content')
    <section class="font-poppins" style="">
        <!-- Start Breadcrumbs -->
        <section class="max-w-7xl mx-auto my-4 border-2 border-x-0 border-t-0 py-3" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse text-black">
                <li class="inline-flex items-center">
                    <a href="{{ url('/') }}"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">Home</a>
                </li>

                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="#"
                            class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">
                            Management
                        </a>
                    </div>
                </li>

            </ol>
        </section>
        <!-- End Breadcrumbs -->



        <div
            class="relative overflow-x-auto shadow-md sm:rounded-lg max-w-screen-xl border-2 border-t-[#15803d] mx-auto mt-10">
            <table
                class=" text-sm border-separate border-spacing-2 text-left w-full  rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="border  text-xs text-white uppercase bg-[#15803d] dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Photo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            name
                        </th>

                        <th scope="col" class="px-6 py-3">
                            Position
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Education
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Degree
                        </th>
                    </tr>
                </thead>
                <tbody class="">
                    <tr class="text-black font-poppins">
                        <th scope="row" class="px-6 py-4 border border-[#15803d]  whitespace-nowrap dark:text-white">
                            <img src="{{ asset('assets/images/teacher2.png') }}" class="h-44 aspect-square object-cover">
                        </th>
                        <td class="px-6 py-4 border border-[#15803d]">
                            CHEA BUNTHON
                        </td>
                        <td class="px-6 py-4 border border-[#15803d]">
                            Vice-Dean
                        </td>
                        <td class="px-6 py-4 border border-[#15803d]">
                            Master
                        </td>
                        <td class="px-6 py-4 border border-[#15803d]">
                            cheabunthon@rua.edu.kh
                        </td>
                        <td class="px-6 py-4 border border-[#15803d] ">
                            <a href="{{ asset('assets/New Image/degree.jpg') }}" class="glightbox2" data-gallery="gallery1">
                                <img class="w-full object-cover" src="{{ asset('assets/New Image/degree.jpg') }}"
                                    alt="Image Description" />
                            </a>
                        </td>

                    </tr>
                    <tr class="text-black font-poppins">
                        <th scope="row" class="px-6 py-4 border border-[#15803d]  whitespace-nowrap dark:text-white">
                            <img src="{{ asset('assets/images/teacher1.png') }}" class="h-44 aspect-square object-cover">
                        </th>
                        <td class="px-6 py-4 border border-[#15803d]">
                            KANG KROESNA
                        </td>
                        <td class="px-6 py-4 border border-[#15803d]">
                            Dean
                        </td>
                        <td class="px-6 py-4 border border-[#15803d]">
                            PHD
                        </td>
                        <td class="px-6 py-4 border border-[#15803d]">
                            kkroesna@rua.edu.kh
                        </td>
                        <td class="px-6 py-4 border border-[#15803d] ">
                            <a href="{{ asset('assets/New Image/degree.jpg') }}" class="glightbox2" data-gallery="gallery2">
                                <img class="w-full object-cover" src="{{ asset('assets/New Image/degree.jpg') }}"
                                    alt="Image Description" />
                            </a>
                        </td>

                    </tr>
                    <tr class="text-black font-poppins">
                        <th scope="row" class="px-6 py-4 border border-[#15803d]  whitespace-nowrap dark:text-white">
                            <img src="{{ asset('assets/images/teacher3.png') }}" class="h-44 aspect-square object-cover">
                        </th>
                        <td class="px-6 py-4 border border-[#15803d]">
                            THENG KOUCH
                        </td>
                        <td class="px-6 py-4 border border-[#15803d]">
                            Vice-Dean
                        </td>
                        <td class="px-6 py-4 border border-[#15803d]">
                            PHD
                        </td>
                        <td class="px-6 py-4 border border-[#15803d]">
                            thengkouch@rua.edu.kh
                        </td>
                        <td class="px-6 py-4 border border-[#15803d] ">
                            <a href="{{ asset('assets/New Image/degree.jpg') }}" class="glightbox2" data-gallery="gallery3">
                                <img class="w-full object-cover" src="{{ asset('assets/New Image/degree.jpg') }}"
                                    alt="Image Description" />
                            </a>
                        </td>


                    </tr>
                    <tr class="text-black font-poppins">
                        <th scope="row" class="px-6 py-4 border border-[#15803d]  whitespace-nowrap dark:text-white">
                            <img src="{{ asset('assets/images/teacher1.png') }}" class="h-44 aspect-square object-cover">
                        </th>
                        <td class="px-6 py-4 border border-[#15803d]">
                            KANG KROESNA
                        </td>
                        <td class="px-6 py-4 border border-[#15803d]">
                            Dean
                        </td>
                        <td class="px-6 py-4 border border-[#15803d]">
                            PHD
                        </td>
                        <td class="px-6 py-4 border border-[#15803d]">
                            kkroesna@rua.edu.kh
                        </td>
                        <td class="px-6 py-4 border border-[#15803d] ">
                            <a href="{{ asset('assets/New Image/degree.jpg') }}" class="glightbox2"
                                data-gallery="gallery4">
                                <img class="w-full object-cover" src="{{ asset('assets/New Image/degree.jpg') }}"
                                    alt="Image Description" />
                            </a>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>

    </section>
@endsection
