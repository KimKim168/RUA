@extends('layouts.client')
@section('content')
    <section class="px-6" style="font-family: Poppins, Arial, Helvetica, sans-serif">


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
                        <a href="faculty.html"
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
                        <a href="{{ url('/profile') }}"
                            class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Faculty
                            Profile
                        </a>
                    </div>
                </li>
            </ol>
        </section>
        <!-- End Breadcrumbs -->

        <!-- Start Main Content -->
        <div class="p-2 max-w-7xl mx-auto grid grid-cols-12 gap-4">
            <div class="col-span-12 lg:col-span-3">
                <div class="cursor-pointer border rounded-md pl-8 py-4 pr-2">
                    <ul class="space-y-3">
                        <!-- item1 -->
                        <li
                            class="w-full hover:underline text-leftfont-medium rtl:text-right text-gray-500 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="#"> Message From Dean </a>
                        </li>
                        <!-- item1 -->
                        <li
                            class="w-full hover:underline text-leftfont-medium rtl:text-right text-gray-500 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="#"> Vision
                            </a>
                        </li>
                        <!-- item2 -->
                        <li
                            class="w-full hover:underline text-leftfont-medium rtl:text-right text-gray-500 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="#"> Mission
                            </a>
                        </li>
                        <!-- item3 -->
                        <li
                            class="w-full hover:underline text-leftfont-medium rtl:text-right text-gray-500 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="vision.html">Academic program </a>
                        </li>
                        <!-- item4 -->
                        <li
                            class="w-full hover:underline text-leftfont-medium rtl:text-right text-gray-500 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="#">Admission
                            </a>
                        </li>
                        <!-- item5 -->
                        <li
                            class="w-full hover:underline text-leftfont-medium rtl:text-right text-gray-500 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="#">Department </a>
                        </li>
                        <!-- item6 -->
                        <li
                            class="w-full underline text-leftfont-medium rtl:text-right text-gray-500 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="{{ url('/profile') }}">Faculty Profile</a>
                        </li>
                        <!-- item7 -->
                        <li
                            class="w-full hover:underline text-leftfont-medium rtl:text-right text-gray-500 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="">Resource and Laboratory
                            </a>
                        </li>
                        <!-- item8 -->
                        <li
                            class="w-full hover:underline text-leftfont-medium rtl:text-right text-gray-500 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="#">
                                Project
                            </a>
                        </li>
                        <!-- item9 -->
                        <li
                            class="w-full hover:underline text-leftfont-medium rtl:text-right text-gray-500 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="#">Publication
                            </a>
                        </li>

                        <!-- item10 -->
                        <li
                            class="w-full hover:underline text-leftfont-medium rtl:text-right text-gray-500 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="#">Students life
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Start Middle section -->
            <div class="col-span-12 lg:col-span-6 border rounded-md">
                <!-- Blog Article -->
                <div class="max-w-3xl px-4 pt-6 pb-12 sm:px-6 lg:px-8 mx-auto">
                    <div class="max-w-2xl">
                        <!-- Content -->
                        <div class="space-y-5 md:space-y-8">
                            <div class="space-y-3">
                                <h2 class="text-2xl font-bold md:text-3xl dark:text-white">
                                    Faculty Profile
                                </h2>
                            </div>


                            <div id="accordion-collapse" data-accordion="collapse">
                                <div>
                                    <!-- Teacher info 1 -->
                                    <div>
                                        <h2 id="accordion-collapse-heading-1">
                                            <button type="button"
                                                class="flex items-center justify-between w-full p-3 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                                data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                                aria-controls="accordion-collapse-body-3">
                                                <span>KANG KROESNA, PHD (Faculty of Veterinary Medicine)</span>
                                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 10 6">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                                </svg>
                                            </button>
                                        </h2>
                                        <div id="accordion-collapse-body-1" class="hidden font-sans"
                                            aria-labelledby="accordion-collapse-heading-1">
                                            <div
                                                class="p-4 pt-6 border border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                                <div class="relative overflow-x-auto">
                                                    <div class="block ">
                                                        <div class="grid grid-cols-12 gap-8">
                                                            <div class="col-span-5 mb-5 ">
                                                                <img src="{{ asset('assets/images/teacher1.png') }}"
                                                                    class=" w-full h-full aspect-square" />
                                                            </div>
                                                            <div class=" col-span-7 max-w-sm text-sm space-y-4">
                                                                <div class="flex flex-col gap-2">
                                                                    <div class="flex nowrap">
                                                                        <p
                                                                            class="w-[110px] uppercase tracking-wide text-sm text-gray-500 dark:text-gray-300 font-semibold border-r border-gray-600 dark:border-gray-300 pr-5 mr-5 flex-shrink-0">
                                                                            Name
                                                                        </p>
                                                                        <p
                                                                            class="text-sm text-gray-600 dark:text-gray-200">
                                                                            កង ក្រឹស្នា(KANG KROESNA)


                                                                        </p>
                                                                    </div>


                                                                    <div class="flex nowrap">
                                                                        <p
                                                                            class="w-[110px] uppercase tracking-wide text-sm text-gray-500 dark:text-gray-300 font-semibold border-r border-gray-600 dark:border-gray-300 pr-5 mr-5 flex-shrink-0">
                                                                            Gender
                                                                        </p>
                                                                        <p
                                                                            class="text-sm text-gray-600 dark:text-gray-200">
                                                                            Female
                                                                        </p>
                                                                    </div>




                                                                    <div class="flex nowrap">
                                                                        <p
                                                                            class="w-[110px] uppercase tracking-wide text-sm text-gray-500 dark:text-gray-300 font-semibold border-r border-gray-600 dark:border-gray-300 pr-5 mr-5 flex-shrink-0">
                                                                            Phone
                                                                        </p>
                                                                        <p
                                                                            class="text-sm text-gray-600 dark:text-gray-200">
                                                                            016 967 679
                                                                        </p>
                                                                    </div>
                                                                    <div class="flex nowrap">
                                                                        <p
                                                                            class="w-[110px] uppercase tracking-wide text-sm text-gray-500 dark:text-gray-300 font-semibold border-r border-gray-600 dark:border-gray-300 pr-5 mr-5 flex-shrink-0">
                                                                            Email
                                                                        </p>
                                                                        <p
                                                                            class="space-x-1 space-y-1 text-sm text-gray-600 dark:text-gray-200">
                                                                            <span
                                                                                class="bg-blue-100 text-blue-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 whitespace-nowrap capitalize">
                                                                                kkroesna@rua.edu.kh
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="flex nowrap">
                                                                        <p
                                                                            class="w-[110px] uppercase tracking-wide text-sm text-gray-500 dark:text-gray-300 font-semibold border-r border-gray-600 dark:border-gray-300 pr-5 mr-5 flex-shrink-0">
                                                                            Position
                                                                        </p>
                                                                        <p
                                                                            class="space-x-1 space-y-1 text-sm text-gray-600 dark:text-gray-200">
                                                                            <span
                                                                                class="bg-blue-100 text-blue-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 whitespace-nowrap capitalize">
                                                                                Dean
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="flex nowrap">
                                                                        <p
                                                                            class="w-[110px] uppercase tracking-wide text-sm text-gray-500 dark:text-gray-300 font-semibold border-r border-gray-600 dark:border-gray-300 pr-5 mr-5 flex-shrink-0">
                                                                            Education
                                                                        </p>
                                                                        <p
                                                                            class="space-x-1 space-y-1 text-sm text-gray-600 dark:text-gray-200">
                                                                            <span
                                                                                class="bg-blue-100 text-blue-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 whitespace-nowrap capitalize">
                                                                                PHD
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#"
                                                            class="text-red-600 text-sm hover:underline ">Download
                                                            CV</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Teacher info 2 -->

                                    <div>
                                        <h2 id="accordion-collapse-heading-2">
                                            <button type="button"
                                                class="flex items-center justify-between w-full p-3 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                                data-accordion-target="#accordion-collapse-body-2" aria-expanded="true"
                                                aria-controls="accordion-collapse-body-3">
                                                <span>CHEA BUNTHON, Master (Faculty of Veterinary Medicine)</span>
                                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0"
                                                    aria-hidden="fale" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 10 6">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                                </svg>
                                            </button>
                                        </h2>
                                        <div id="accordion-collapse-body-2" class="hidden font-sans"
                                            aria-labelledby="accordion-collapse-heading-2">
                                            <div
                                                class="p-4 pt-6 border border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                                <div class="relative overflow-x-auto">
                                                    <div class="block ">
                                                        <div class="grid grid-cols-12 gap-8">
                                                            <div class="col-span-5 mb-5 ">
                                                                <img src="{{ asset('assets/images/teacher2.png') }}"
                                                                    class=" w-full h-full aspect-square" />
                                                            </div>
                                                            <div class=" col-span-7 max-w-sm text-sm space-y-4">
                                                                <div class="flex flex-col gap-2">
                                                                    <div class="flex nowrap">
                                                                        <p
                                                                            class="w-[110px] uppercase tracking-wide text-sm text-gray-500 dark:text-gray-300 font-semibold border-r border-gray-600 dark:border-gray-300 pr-5 mr-5 flex-shrink-0">
                                                                            Name
                                                                        </p>
                                                                        <p
                                                                            class="text-sm text-gray-600 dark:text-gray-200">
                                                                            ជា ប៊ុនថុន (CHEA BUNTHON)


                                                                        </p>
                                                                    </div>


                                                                    <div class="flex nowrap">
                                                                        <p
                                                                            class="w-[110px] uppercase tracking-wide text-sm text-gray-500 dark:text-gray-300 font-semibold border-r border-gray-600 dark:border-gray-300 pr-5 mr-5 flex-shrink-0">
                                                                            Gender
                                                                        </p>
                                                                        <p
                                                                            class="text-sm text-gray-600 dark:text-gray-200">
                                                                            Male
                                                                        </p>
                                                                    </div>




                                                                    <div class="flex nowrap">
                                                                        <p
                                                                            class="w-[110px] uppercase tracking-wide text-sm text-gray-500 dark:text-gray-300 font-semibold border-r border-gray-600 dark:border-gray-300 pr-5 mr-5 flex-shrink-0">
                                                                            Phone
                                                                        </p>
                                                                        <p
                                                                            class="text-sm text-gray-600 dark:text-gray-200">
                                                                            012 434 985
                                                                        </p>
                                                                    </div>
                                                                    <div class="flex nowrap">
                                                                        <p
                                                                            class="w-[110px] uppercase tracking-wide text-sm text-gray-500 dark:text-gray-300 font-semibold border-r border-gray-600 dark:border-gray-300 pr-5 mr-5 flex-shrink-0">
                                                                            Email
                                                                        </p>
                                                                        <p
                                                                            class="space-x-1 space-y-1 text-sm text-gray-600 dark:text-gray-200">
                                                                            <span
                                                                                class="bg-blue-100 text-blue-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 whitespace-nowrap capitalize">
                                                                                cheabunthon@rua.edu.kh
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="flex nowrap">
                                                                        <p
                                                                            class="w-[110px] uppercase tracking-wide text-sm text-gray-500 dark:text-gray-300 font-semibold border-r border-gray-600 dark:border-gray-300 pr-5 mr-5 flex-shrink-0">
                                                                            Position
                                                                        </p>
                                                                        <p
                                                                            class="space-x-1 space-y-1 text-sm text-gray-600 dark:text-gray-200">
                                                                            <span
                                                                                class="bg-blue-100 text-blue-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 whitespace-nowrap capitalize">
                                                                                Vice-Dean
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="flex nowrap">
                                                                        <p
                                                                            class="w-[110px] uppercase tracking-wide text-sm text-gray-500 dark:text-gray-300 font-semibold border-r border-gray-600 dark:border-gray-300 pr-5 mr-5 flex-shrink-0">
                                                                            Education
                                                                        </p>
                                                                        <p
                                                                            class="space-x-1 space-y-1 text-sm text-gray-600 dark:text-gray-200">
                                                                            <span
                                                                                class="bg-blue-100 text-blue-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 whitespace-nowrap capitalize">
                                                                                Master
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#"
                                                            class="text-red-600 text-sm hover:underline ">Download
                                                            CV</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- teacher info 3 -->
                                    <div>
                                        <h2 id="accordion-collapse-heading-3">
                                            <button type="button"
                                                class="flex items-center justify-between w-full p-3 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                                data-accordion-target="#accordion-collapse-body-3" aria-expanded="true"
                                                aria-controls="accordion-collapse-body-3">
                                                <span>THENG KOUCH, PHD (Faculty of Veterinary Medicine)</span>
                                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0"
                                                    aria-hidden="fale" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 10 6">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                                </svg>
                                            </button>
                                        </h2>
                                        <div id="accordion-collapse-body-3" class="hidden font-sans"
                                            aria-labelledby="accordion-collapse-heading-3">
                                            <div
                                                class="p-4 pt-6 border border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                                <div class="relative overflow-x-auto">
                                                    <div class="block ">
                                                        <div class="grid grid-cols-12 gap-8">
                                                            <div class="col-span-5 mb-5 ">
                                                                <img src="{{ asset('assets/images/teacher3.png') }}"
                                                                    class=" w-full h-full aspect-square" />
                                                            </div>
                                                            <div class=" col-span-7 max-w-sm text-sm space-y-4">
                                                                <div class="flex flex-col gap-2">
                                                                    <div class="flex nowrap">
                                                                        <p
                                                                            class="w-[110px] uppercase tracking-wide text-sm text-gray-500 dark:text-gray-300 font-semibold border-r border-gray-600 dark:border-gray-300 pr-5 mr-5 flex-shrink-0">
                                                                            Name
                                                                        </p>
                                                                        <p
                                                                            class="text-sm text-gray-600 dark:text-gray-200">
                                                                            ធឹង គុច (THENG KOUCH)


                                                                        </p>
                                                                    </div>


                                                                    <div class="flex nowrap">
                                                                        <p
                                                                            class="w-[110px] uppercase tracking-wide text-sm text-gray-500 dark:text-gray-300 font-semibold border-r border-gray-600 dark:border-gray-300 pr-5 mr-5 flex-shrink-0">
                                                                            Gender
                                                                        </p>
                                                                        <p
                                                                            class="text-sm text-gray-600 dark:text-gray-200">
                                                                            Male
                                                                        </p>
                                                                    </div>




                                                                    <div class="flex nowrap">
                                                                        <p
                                                                            class="w-[110px] uppercase tracking-wide text-sm text-gray-500 dark:text-gray-300 font-semibold border-r border-gray-600 dark:border-gray-300 pr-5 mr-5 flex-shrink-0">
                                                                            Phone
                                                                        </p>
                                                                        <p
                                                                            class="text-sm text-gray-600 dark:text-gray-200">
                                                                            097 777 93 81
                                                                        </p>
                                                                    </div>
                                                                    <div class="flex nowrap">
                                                                        <p
                                                                            class="w-[110px] uppercase tracking-wide text-sm text-gray-500 dark:text-gray-300 font-semibold border-r border-gray-600 dark:border-gray-300 pr-5 mr-5 flex-shrink-0">
                                                                            Email
                                                                        </p>
                                                                        <p
                                                                            class="space-x-1 space-y-1 text-sm text-gray-600 dark:text-gray-200">
                                                                            <span
                                                                                class="bg-blue-100 text-blue-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 whitespace-nowrap capitalize">
                                                                                thengkouch@rua.edu.kh
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="flex nowrap">
                                                                        <p
                                                                            class="w-[110px] uppercase tracking-wide text-sm text-gray-500 dark:text-gray-300 font-semibold border-r border-gray-600 dark:border-gray-300 pr-5 mr-5 flex-shrink-0">
                                                                            Position
                                                                        </p>
                                                                        <p
                                                                            class="space-x-1 space-y-1 text-sm text-gray-600 dark:text-gray-200">
                                                                            <span
                                                                                class="bg-blue-100 text-blue-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 whitespace-nowrap capitalize">
                                                                                Vice-Dean
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="flex nowrap">
                                                                        <p
                                                                            class="w-[110px] uppercase tracking-wide text-sm text-gray-500 dark:text-gray-300 font-semibold border-r border-gray-600 dark:border-gray-300 pr-5 mr-5 flex-shrink-0">
                                                                            Education
                                                                        </p>
                                                                        <p
                                                                            class="space-x-1 space-y-1 text-sm text-gray-600 dark:text-gray-200">
                                                                            <span
                                                                                class="bg-blue-100 text-blue-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 whitespace-nowrap capitalize">
                                                                                PHD
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#"
                                                            class="text-red-600 text-sm hover:underline ">Download
                                                            CV</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Content -->
                        </div>
                    </div>
                    <!-- End Blog Article -->
                </div>
                <!-- End Middle section -->


            </div>
            <!-- Start Right Section -->
            <div class="col-span-12 space-y-6 lg:col-span-3">
                <div id="contactbox" class="p-6 bg-white shadow-lg rounded-lg border">
                    <h2 class="text-2xl font-semibold mb-4">Contact Info</h2>
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
            <!-- End Main Content -->
    </section>
@endsection
