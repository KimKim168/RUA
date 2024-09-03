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
                        <a href="{{ url('/languages') }}"
                            class="ms-1 text-sm  font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">
                            Vocational Training & Foreign Languages
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

                    {{-- Vocational Training --}}
                    <div>
                        <div
                            class="text-center text-xl font-domine mb-3 font-medium border-b-2 border-[#15803d] border-dashed ">
                            Vocational Training
                        </div>
                        <ul class="space-y-3 text-sm">
                            <!-- item1 -->
                            <li
                                class="w-full hover:underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                                <a href="#">Introduction</a>
                            </li>
                            <!-- item2 -->
                            <li
                                class="w-full hover:underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                                <a href="#">Mission </a>
                            </li>
                            <!-- item3 -->
                            <li
                                class="w-full hover:underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                                <a href="#">Management</a>
                            </li>
                            <!-- item1 -->
                            <li
                                class="w-full hover:underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                                <a href="#">Training Course</a>
                            </li>
                        </ul>
                    </div>
                    {{-- End Vocational Training --}}
                    {{-- Foreign Language Training --}}
                    <div>
                        <div
                            class="text-center text-xl font-domine mb-3 mt-3 font-medium border-b-2 border-[#15803d] border-dashed ">
                            Foreign Languages
                        </div>
                        <ul class="space-y-3 text-sm">
                            <!-- item1 -->
                            <li
                                class="w-full hover:underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                                <a href="#">Japan</a>
                            </li>
                            <!-- item2 -->
                            <li
                                class="w-full hover:underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                                <a href="#">English </a>
                            </li>
                            <!-- item3 -->
                            <li
                                class="w-full hover:underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                                <a href="#">Chines</a>
                            </li>

                        </ul>
                    </div>
                    {{-- Foreign Language Training --}}
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
                                <h2 class="text-2xl font-domine font-bold md:text-3xl dark:text-white">
                                    Vocational Training & Foreign Languages
                                </h2>
                            </div>

                            <figure class="border-2">
                                <a href="{{ asset('assets/New Image/photo_2024-06-26_10-27-16.jpg') }}" class="glightbox2">
                                    <img class="w-full object-cover"
                                        src="{{ asset('assets/New Image/photo_2024-06-26_10-27-16.jpg') }}"
                                        alt="Image Description" />
                                </a>
                            </figure>

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
                    <h2 class="text-2xl font-semibold mb-4 font-domine">Scholarship</h2>
                    <img src="{{ asset('assets/New Image/11889966_490084771173694_6492652541950480321_o.jpg') }}"
                        alt="Contact Image" class="w-full h-auto mb-4 rounded-lg" />

                    <div class="mb-6">
                        <h3 class="text-md  mb-2 font-poppins">
                            Students who are looking for a scholarship, RUPP provides a number of sources of scholarships.
                        </h3>

                    </div>
                </div>
            </div>

            <!-- End Right Section -->
        </div>
        <!-- End Main Content -->
    </section>
@endsection
