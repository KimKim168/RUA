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
                        <a href="{{ url('/foundation') }}"
                            class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">
                            Foundation
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
                        <a href="{{ url('/assessment') }}"
                            class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">
                            Grading System
                        </a>
                    </div>
                </li>

            </ol>
        </section>
        <!-- End Breadcrumbs -->

        <!-- Start Main Content -->
        <div class="p-2 max-w-7xl mx-auto grid grid-cols-12 gap-4">
            <!-- Start Left section -->
            <div class="col-span-12 lg:col-span-3">
                <div class="cursor-pointer border-2 border-t-[#15803d] rounded-md pl-8 py-4 pr-2">
                    <ul class="space-y-3   text-sm">


                        <!-- item1 -->
                        <li
                            class="w-full hover:underline text-left  rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="#">Introduction
                            </a>
                        </li>
                        <!-- item1 -->
                        <li
                            class="w-full hover:underline text-left  rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="#">Background
                            </a>
                        </li>
                        <!-- item1 -->
                        <li
                            class="w-full hover:underline text-left  rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="#">Mission
                            </a>
                        </li>
                        <!-- item1 -->
                        <li
                            class="w-full hover:underline text-left  rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="#">Objective
                            </a>
                        </li>
                        <!-- item1 -->
                        <li
                            class="w-full hover:underline text-left  rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="#">Admission
                            </a>
                        </li>
                        <!-- item3 -->
                        <li
                            class="w-full underline text-left  rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="{{ url('/curriculum') }}">Curriculum</a>
                        </li>
                        <!-- item1 -->
                        <li
                            class="w-full underline text-left  rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="{{ url('/assessment') }}">Assessment
                            </a>
                        </li>
                        <!-- item2 -->
                        <li
                            class="w-full underline text-left  rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="{{ url('/gradingsystem') }}">Grading System
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
            <!-- End Left Section -->

            <!-- Start Middle section -->
            <div class="col-span-12 lg:col-span-6 border-2 border-t-[#15803d] rounded-md">
                <!-- Blog Article -->
                <div class="max-w-3xl px-4 pt-6 pb-12 sm:px-6 lg:px-8 mx-auto">
                    <div class="max-w-2xl">
                        <!-- Content -->
                        <div class="space-y-4 md:space-y-3">
                            <div class="space-y-3">
                                <h2 class="text-3xl font-domine font-bold md:text-3xl dark:text-white">
                                    Grading System
                                </h2>
                            </div>

                            {{-- <figure class="border-2">
                                <a href="{{ asset('assets/New Image/photo_2024-06-27_14-02-28 (6).jpg') }}"
                                    class="glightbox2">
                                    <img class="w-full object-cover"
                                        src="{{ asset('assets/New Image/photo_2024-06-27_14-02-28 (6).jpg') }}"
                                        alt="Image Description" />
                                </a>
                            </figure> --}}
                            <p class="text-md text-gray-800 dark:text-neutral-200 text-justify">
                                Students are assessed based on the following grading
                            </p>

                            {{-- Table --}}
                            <section class=" dark:bg-gray-900 py-3 sm:py-5">
                                <div class="  ">
                                    <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
                                        <div class="overflow-x-auto">
                                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                                <thead
                                                    class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                    <tr>
                                                        <th scope="col" class="px-4 py-3">Percentage</th>
                                                        <th scope="col" class="px-4 py-3">Grade</th>
                                                        <th scope="col" class="px-4 py-3">Grade Point</th>
                                                        <th scope="col" class="px-4 py-3">Definition</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {{-- tr 1 --}}
                                                    <tr
                                                        class="h-20 border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                                                        <th scope="row"
                                                            class=" items-center px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            85% - 100%
                                                        </th>
                                                        <td class="px-4 py-2">
                                                            <span
                                                                class="bg-primary-100 text-primary-800 text-sm font-medium px-2 py-0.5 rounded dark:bg-primary-900 dark:text-primary-300">A</span>
                                                        </td>
                                                        <td
                                                            class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            <div class="flex items-center">
                                                                {{-- <div
                                                                    class="inline-block w-4 h-4 mr-2 bg-red-700 rounded-full">
                                                                </div> --}}
                                                                4.00
                                                            </div>
                                                        </td>
                                                        <td
                                                            class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            Excellent
                                                        </td>
                                                    </tr>
                                                    {{-- End tr 1 --}}

                                                    {{-- tr 2 --}}
                                                    <tr
                                                        class="h-20 border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                                                        <th scope="row"
                                                            class=" items-center px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            80% - 84%
                                                        </th>
                                                        <td class="px-4 py-2">
                                                            <span
                                                                class="bg-primary-100 text-primary-800 text-sm font-medium px-2 py-0.5 rounded dark:bg-primary-900 dark:text-primary-300">
                                                                B+
                                                            </span>
                                                        </td>
                                                        <td
                                                            class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            <div class="flex items-center">
                                                                {{-- <div
                                                                    class="inline-block w-4 h-4 mr-2 bg-red-700 rounded-full">
                                                                </div> --}}
                                                                3.50
                                                            </div>
                                                        </td>
                                                        <td
                                                            class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            Very Good
                                                        </td>
                                                    </tr>

                                                    {{-- tr 3 --}}
                                                    <tr
                                                        class="h-20 border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                                                        <th scope="row"
                                                            class=" items-center px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            70% - 79%
                                                        </th>
                                                        <td class="px-4 py-2">
                                                            <span
                                                                class="bg-primary-100 text-primary-800 text-sm font-medium px-2 py-0.5 rounded dark:bg-primary-900 dark:text-primary-300">B</span>
                                                        </td>
                                                        <td
                                                            class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            <div class="flex items-center">
                                                                {{-- <div
                                                                    class="inline-block w-4 h-4 mr-2 bg-red-700 rounded-full">
                                                                </div> --}}
                                                                3.00
                                                            </div>
                                                        </td>
                                                        <td
                                                            class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            Good
                                                        </td>
                                                    </tr>
                                                    {{-- tr 3 --}}

                                                    {{-- tr 4 --}}
                                                    <tr
                                                        class="h-20 border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                                                        <th scope="row"
                                                            class=" items-center px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            65% - 69%
                                                        </th>
                                                        <td class="px-4 py-2">
                                                            <span
                                                                class="bg-primary-100 text-primary-800 text-sm font-medium px-2 py-0.5 rounded dark:bg-primary-900 dark:text-primary-300">
                                                                C+
                                                            </span>
                                                        </td>
                                                        <td
                                                            class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            <div class="flex items-center">
                                                                {{-- <div
                                                                    class="inline-block w-4 h-4 mr-2 bg-red-700 rounded-full">
                                                                </div> --}}
                                                                2.50
                                                            </div>
                                                        </td>
                                                        <td
                                                            class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            Fairly Good
                                                        </td>
                                                    </tr>
                                                    {{-- End tr 4 --}}

                                                    {{-- tr 5 --}}
                                                    <tr
                                                        class="h-20 border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                                                        <th scope="row"
                                                            class=" items-center px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            50% - 64%
                                                        </th>
                                                        <td class="px-4 py-2">
                                                            <span
                                                                class="bg-primary-100 text-primary-800 text-sm font-medium px-2 py-0.5 rounded dark:bg-primary-900 dark:text-primary-300">
                                                                C
                                                            </span>
                                                        </td>
                                                        <td
                                                            class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            <div class="flex items-center">
                                                                {{-- <div
                                                                    class="inline-block w-4 h-4 mr-2 bg-red-700 rounded-full">
                                                                </div> --}}
                                                                2.00
                                                            </div>
                                                        </td>
                                                        <td
                                                            class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            Fair
                                                        </td>
                                                    </tr>
                                                    {{-- End tr 5 --}}

                                                    {{-- tr 6 --}}
                                                    <tr
                                                        class="h-20 border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                                                        <th scope="row"
                                                            class=" items-center px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            &lt;49%
                                                        </th>
                                                        <td class="px-4 py-2">
                                                            <span
                                                                class="bg-primary-100 text-primary-800 text-sm font-medium px-2 py-0.5 rounded dark:bg-primary-900 dark:text-primary-300">
                                                                D
                                                            </span>
                                                        </td>
                                                        <td
                                                            class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            <div class="flex items-center">
                                                                {{-- <div
                                                                    class="inline-block w-4 h-4 mr-2 bg-red-700 rounded-full">
                                                                </div> --}}
                                                                1.50
                                                            </div>
                                                        </td>
                                                        <td
                                                            class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            Fail
                                                        </td>
                                                    </tr>
                                                    {{-- End tr 6 --}}
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- End Content -->
                    </div>
                </div>
                <!-- End Blog Article -->
            </div>
            <!-- End Middle section -->

            <!-- Start Right Section -->
            <div class="col-span-12 space-y-6 lg:col-span-3 ">

                <div id="contactbox" class="p-6 bg-white rounded-lg border-2  border-t-[#15803d]">
                    <h2 class="text-2xl font-semibold mb-4 font-domine">Contact Info</h2>
                    <img src="https://rupp.edu.kh/images/contact.jpg" alt="Contact Image"
                        class="w-full h-auto mb-4 rounded-lg" />

                    <div class="mb-6">
                        <h3 class="text-md font-semibold mb-2">
                            Dean, Faculty of Development Studies (FDS)
                        </h3>
                        <dl>
                            <dt class="text-md font-medium">
                                Rath Sethik, PhD
                            </dt>
                            <dt class="tel text-gray-600">
                                <b>Tel:</b> (855)12 556 579
                            </dt>
                            <dt class="email text-gray-600">
                                <b>Email:</b>
                                <a href="mailto:rath.sethik@email.kh"
                                    class="text-blue-600 hover:underline">rath.sethik@email.kh</a>
                            </dt>
                        </dl>
                    </div>

                    <div class="mb-6">
                        <h3 class="text-md font-semibold mb-2">
                            Vice Dean of FDS
                        </h3>
                        <dl class="mb-4">
                            <dt class="text-md font-medium">Heng Naret, PhD</dt>
                            <dt class="text-gray-600">
                                <b>Tel:</b> (855)12 830 386
                            </dt>
                            <dt class="text-gray-600">
                                <b>Email:</b>
                                <a href="mailto:heng.naret@email.kh"
                                    class="text-blue-600 hover:underline">heng.naret@email.kh</a>
                            </dt>
                        </dl>
                        <dl>
                            <dt class="text-md font-medium">
                                Seak Sophat, PhD
                            </dt>
                            <dt class="text-gray-600">
                                <b>Tel:</b> (855)16 506 888
                            </dt>
                            <dt class="text-gray-600">
                                <b>Email:</b>
                                <a href="mailto:seak.sophat@email.kh"
                                    class="text-blue-600 hover:underline">seak.sophat@email.kh</a>
                            </dt>
                        </dl>
                    </div>
                </div>
            </div>

            <!-- End Right Section -->
        </div>
        <!-- End Main Content -->
    </section>
@endsection
