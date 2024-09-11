@extends('layouts.client')
@section('content')
    <section class="" style="">
        <!-- Start Breadcrumbs -->
        <section class="max-w-7xl mx-auto my-4 border-2 border-x-0 border-t-0 py-3" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
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
                        <a href="{{ url('/allfaculty') }}"
                            class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Faculty
                        </a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="{{ url('/faculty') }}"
                            class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Faculty
                            of Veterinary Medicine
                        </a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="{{ url('/department') }}"
                            class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">
                            Department
                        </a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="{{ url('/sub_department') }}"
                            class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">
                            Veterinary Epidemiology and Public Health
                        </a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="{{ url('/management_team_department') }}"
                            class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">
                            Management Team
                        </a>
                    </div>
                </li>
            </ol>
        </section>
        <!-- End Breadcrumbs -->

        <!-- Start Main Content -->
        <div class="p-2 max-w-7xl mx-auto grid grid-cols-12 gap-4 ">
            <!-- Start Left section -->
            {{-- <div class="col-span-12 lg:col-span-2  ">
                <div class="cursor-pointer   border-2 border-t-[#15803d] rounded-md pl-8 py-4 pr-2">
                    <ul class="space-y-3 ">
                        <!-- item1 -->
                        <li
                            class="w-full hover:underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="#"> Description</a>
                        </li>
                        <!-- item1 -->
                        <li
                            class="w-full hover:underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="#">Management Team
                            </a>
                        </li>
                        <!-- item2 -->
                        <li
                            class="w-full hover:underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="#"> Programs</a>
                        </li>
                        <!-- item3 -->
                        <li
                            class="w-full hover:underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="vision.html">Trainings</a>
                        </li>
                        <!-- item3 -->
                        <li
                            class="w-full hover:underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="vision.html">Activities</a>
                        </li>
                    </ul>
                </div>
            </div> --}}
            <!-- End Left Section -->

            <!-- Start Middle section -->
            <div
                class="relative col-span-12 lg:col-span-12 overflow-x-auto shadow-md sm:rounded-lg max-w-screen-xl border-2 border-t-[#15803d] mx-auto ">
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
                            {{-- <th scope="col" class="px-6 py-3">
                                Education
                            </th> --}}
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            {{-- <th scope="col" class="px-6 py-3">
                                Degree
                            </th> --}}
                        </tr>
                    </thead>
                    <tbody class="">

                        <tr class="text-black font-poppins">
                            <th scope="row" class="px-6 py-4 border border-[#15803d]  whitespace-nowrap dark:text-white">
                                <img src="{{ asset('assets/images/teacher2.png') }}"
                                    class="h-44 aspect-square object-cover">
                            </th>
                            <td class="px-6 py-4 border border-[#15803d]">
                                CHEA BUNTHON
                            </td>
                            <td class="px-6 py-4 border border-[#15803d]">
                                Vice-Dean
                            </td>
                            {{-- <td class="px-6 py-4 border border-[#15803d]">
                                Master
                            </td> --}}
                            <td class="px-6 py-4 border border-[#15803d]">
                                cheabunthon@rua.edu.kh
                            </td>
                            {{-- <td class="px-6 py-4 border border-[#15803d] ">
                                <a href="{{ asset('assets/New Image/degree.jpg') }}" class="glightbox2"
                                    data-gallery="gallery1">
                                    <img class="w-full object-cover" src="{{ asset('assets/New Image/degree.jpg') }}"
                                        alt="Image Description" />
                                </a>
                            </td> --}}

                        </tr>
                        <tr class="text-black font-poppins">
                            <th scope="row" class="px-6 py-4 border border-[#15803d]  whitespace-nowrap dark:text-white">
                                <img src="{{ asset('assets/images/teacher1.png') }}"
                                    class="h-44 aspect-square object-cover">
                            </th>
                            <td class="px-6 py-4 border border-[#15803d]">
                                KANG KROESNA
                            </td>
                            <td class="px-6 py-4 border border-[#15803d]">
                                Dean
                            </td>
                            {{-- <td class="px-6 py-4 border border-[#15803d]">
                                PHD
                            </td> --}}
                            <td class="px-6 py-4 border border-[#15803d]">
                                kkroesna@rua.edu.kh
                            </td>
                            {{-- <td class="px-6 py-4 border border-[#15803d] ">
                                <a href="{{ asset('assets/New Image/degree.jpg') }}" class="glightbox2"
                                    data-gallery="gallery2">
                                    <img class="w-full object-cover" src="{{ asset('assets/New Image/degree.jpg') }}"
                                        alt="Image Description" />
                                </a>
                            </td> --}}

                        </tr>
                        <tr class="text-black font-poppins">
                            <th scope="row" class="px-6 py-4 border border-[#15803d]  whitespace-nowrap dark:text-white">
                                <img src="{{ asset('assets/images/teacher3.png') }}"
                                    class="h-44 aspect-square object-cover">
                            </th>
                            <td class="px-6 py-4 border border-[#15803d]">
                                THENG KOUCH
                            </td>
                            <td class="px-6 py-4 border border-[#15803d]">
                                Vice-Dean
                            </td>
                            {{-- <td class="px-6 py-4 border border-[#15803d]">
                                PHD
                            </td> --}}
                            <td class="px-6 py-4 border border-[#15803d]">
                                thengkouch@rua.edu.kh
                            </td>
                            {{-- <td class="px-6 py-4 border border-[#15803d] ">
                                <a href="{{ asset('assets/New Image/degree.jpg') }}" class="glightbox2"
                                    data-gallery="gallery3">
                                    <img class="w-full object-cover" src="{{ asset('assets/New Image/degree.jpg') }}"
                                        alt="Image Description" />
                                </a>
                            </td> --}}


                        </tr>
                        <tr class="text-black font-poppins">
                            <th scope="row"
                                class="px-6 py-4 border border-[#15803d]  whitespace-nowrap dark:text-white">
                                <img src="{{ asset('assets/images/teacher1.png') }}"
                                    class="h-44 aspect-square object-cover">
                            </th>
                            <td class="px-6 py-4 border border-[#15803d]">
                                KANG KROESNA
                            </td>
                            <td class="px-6 py-4 border border-[#15803d]">
                                Dean
                            </td>
                            {{-- <td class="px-6 py-4 border border-[#15803d]">
                                PHD
                            </td> --}}
                            <td class="px-6 py-4 border border-[#15803d]">
                                kkroesna@rua.edu.kh
                            </td>
                            {{-- <td class="px-6 py-4 border border-[#15803d] ">
                                <a href="{{ asset('assets/New Image/degree.jpg') }}" class="glightbox2"
                                    data-gallery="gallery4">
                                    <img class="w-full object-cover" src="{{ asset('assets/New Image/degree.jpg') }}"
                                        alt="Image Description" />
                                </a>
                            </td> --}}

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Middle section -->

        </div>
        <!-- End Main Content -->
    </section>
@endsection
