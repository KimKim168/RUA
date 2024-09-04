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
                        <a href="{{ url('/allfaculty') }}"
                            class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">
                            Faculty
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
                            class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">
                            Faculty of Veterinary Medicine
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
                            Curriculum
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
                    <ul class="space-y-3 ">
                        <!-- item1 -->
                        <li
                            class="w-full hover:underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="#"> Message From Dean </a>
                        </li>
                        <!-- item1 -->
                        <li
                            class="w-full hover:underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="#"> Vision
                            </a>
                        </li>
                        <!-- item2 -->
                        <li
                            class="w-full hover:underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="#"> Mission
                            </a>
                        </li>
                        <!-- item3 -->
                        <li
                            class="w-full underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="{{ url('/foundation_year') }}">Foundation Year</a>
                        </li>
                        <!-- item4 -->
                        <!-- item3 -->
                        <li
                            class="w-full hover:underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="#">Academic program </a>
                        </li>
                        <!-- item4 -->
                        <li
                            class="w-full hover:underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="#">Admission
                            </a>
                        </li>
                        <!-- item5 -->
                        <li
                            class="w-full underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="{{ url('/department') }}">Department </a>
                        </li>
                        <!-- item6 -->
                        <li
                            class="w-full underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="{{ url('/profile') }}">Faculty Profile</a>
                        </li>
                        <!-- item7 -->
                        <li
                            class="w-full hover:underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="">Resource and Laboratory
                            </a>
                        </li>
                        <!-- item8 -->
                        <li
                            class="w-full hover:underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="#">
                                Project
                            </a>
                        </li>
                        <!-- item9 -->
                        <li
                            class="w-full underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="{{ url('/curriculum_faculty') }}">Curriculum
                            </a>
                        </li>
                        <!-- item9 -->
                        <li
                            class="w-full hover:underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="#">Publication
                            </a>
                        </li>

                        <!-- item10 -->
                        <li
                            class="w-full hover:underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="#">Students life
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
                                <h2 class="text-3xl  font-domine font-semibold  md:text-3xl dark:text-white">
                                    Curriculum
                                </h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus ex fugiat quos earum,
                                    perferendis cum eligendi alias praesentium quod maiores quidem quas optio totam rerum
                                    dolor amet dolorem consequuntur pariatur!</p>
                            </div>
                            {{-- GENERAL SUBJECTS --}}
                            <div id="accordion-collapse" data-accordion="collapse" class="">

                                <div>
                                    <!--  info 1 -->
                                    <div>
                                        <h2 id="accordion-collapse-heading-1">
                                            <button type="button"
                                                class="flex items-center font-domine text-xl justify-between w-full p-3 font-medium rtl:text-right text-gray-500 border border-gray-200  focus:ring-gray-200  hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                                data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                                aria-controls="accordion-collapse-body-3">
                                                <span>Year One
                                                </span>
                                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 10 6">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                                </svg>
                                            </button>
                                        </h2>
                                        <div id="accordion-collapse-body-1" class="hidden font-sans  my-2"
                                            aria-labelledby="accordion-collapse-heading-1">
                                            <div class=" border-dotted border-2 border-[#15803d] ">
                                                <div class="relative overflow-x-auto">
                                                    <div class="block ">
                                                        <div
                                                            class="bg-gray-100 p-3 text-center font-sans font-semibold text-red-600 uppercase">
                                                            Semester One
                                                        </div>
                                                        <table class="w-full text-left text-sm ">
                                                            <thead>
                                                                <tr class="h-16">
                                                                    <th class="py-2 px-4 border-b"></th>
                                                                    <th class="py-2 px-4 border-b">Code</th>
                                                                    <th class="py-2 px-4 border-b">20 Credits</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">English Language I</td>
                                                                    <td class="py-2 px-4 border-b">*</td>
                                                                    <td class="py-2 px-4 border-b">4 (2-4)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">Khmer Literature</td>
                                                                    <td class="py-2 px-4 border-b">FGKL01</td>
                                                                    <td class="py-2 px-4 border-b">2 (2-0)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">Khmer Culture &
                                                                        Civilization</td>
                                                                    <td class="py-2 px-4 border-b">FGKL02</td>
                                                                    <td class="py-2 px-4 border-b">2 (2-0)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">General Mathematics</td>
                                                                    <td class="py-2 px-4 border-b">FGMA01</td>
                                                                    <td class="py-2 px-4 border-b">2 (1-2)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">General Chemistry and
                                                                        General Physics</td>
                                                                    <td class="py-2 px-4 border-b">FGCH01, FGPH01</td>
                                                                    <td class="py-2 px-4 border-b">2 (1-2)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">Using Library Resources
                                                                        and Demography</td>
                                                                    <td class="py-2 px-4 border-b">FGLI01, FGGE01</td>
                                                                    <td class="py-2 px-4 border-b">1 (1-0)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">General Psychology</td>
                                                                    <td class="py-2 px-4 border-b">FGPS01</td>
                                                                    <td class="py-2 px-4 border-b">2 (2-0)</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="block ">
                                                        <div
                                                            class="bg-gray-100 p-3 text-center font-sans font-semibold text-red-600 uppercase">
                                                            Semester Two
                                                        </div>
                                                        <table class="w-full text-left text-sm ">
                                                            <thead>
                                                                <tr class="h-16">
                                                                    <th class="py-2 px-4 border-b"></th>
                                                                    <th class="py-2 px-4 border-b">Code</th>
                                                                    <th class="py-2 px-4 border-b">20 Credits</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">English Language II</td>
                                                                    <td class="py-2 px-4 border-b">*</td>
                                                                    <td class="py-2 px-4 border-b">4 (2-4)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">Khmer Literature</td>
                                                                    <td class="py-2 px-4 border-b">FGKL01</td>
                                                                    <td class="py-2 px-4 border-b">2 (2-0)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">Khmer Culture &
                                                                        Civilization</td>
                                                                    <td class="py-2 px-4 border-b">FGKL02</td>
                                                                    <td class="py-2 px-4 border-b">2 (2-0)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">General Mathematics</td>
                                                                    <td class="py-2 px-4 border-b">FGMA01</td>
                                                                    <td class="py-2 px-4 border-b">2 (1-2)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">General Chemistry and
                                                                        General Physics</td>
                                                                    <td class="py-2 px-4 border-b">FGCH01, FGPH01</td>
                                                                    <td class="py-2 px-4 border-b">2 (1-2)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">Using Library Resources
                                                                        and Demography</td>
                                                                    <td class="py-2 px-4 border-b">FGLI01, FGGE01</td>
                                                                    <td class="py-2 px-4 border-b">1 (1-0)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">General Psychology</td>
                                                                    <td class="py-2 px-4 border-b">FGPS01</td>
                                                                    <td class="py-2 px-4 border-b">2 (2-0)</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  info 2 -->
                                    <div class="mt-2">
                                        <h2 id="accordion-collapse-heading-4 ">
                                            <button type="button"
                                                class="flex items-center font-domine text-xl justify-between w-full p-3 font-medium rtl:text-right text-gray-500 border border-gray-200  focus:ring-gray-200  hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                                data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                                                aria-controls="accordion-collapse-body-3">
                                                <span>Year Two
                                                </span>
                                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 10 6">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                                </svg>
                                            </button>
                                        </h2>
                                        <div id="accordion-collapse-body-4" class="hidden font-sans  my-2"
                                            aria-labelledby="accordion-collapse-heading-4">
                                            <div class=" border-dotted border-2 border-[#15803d] ">
                                                <div class="relative overflow-x-auto">
                                                    <div class="block ">
                                                        <div
                                                            class="bg-gray-100 p-3 text-center font-sans font-semibold text-red-600 uppercase">
                                                            Semester One
                                                        </div>
                                                        <table class="w-full text-left text-sm ">
                                                            <thead>
                                                                <tr class="h-16">
                                                                    <th class="py-2 px-4 border-b"></th>
                                                                    <th class="py-2 px-4 border-b">Code</th>
                                                                    <th class="py-2 px-4 border-b">20 Credits</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">English Language I</td>
                                                                    <td class="py-2 px-4 border-b">*</td>
                                                                    <td class="py-2 px-4 border-b">4 (2-4)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">Khmer Literature</td>
                                                                    <td class="py-2 px-4 border-b">FGKL01</td>
                                                                    <td class="py-2 px-4 border-b">2 (2-0)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">Khmer Culture &
                                                                        Civilization</td>
                                                                    <td class="py-2 px-4 border-b">FGKL02</td>
                                                                    <td class="py-2 px-4 border-b">2 (2-0)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">General Mathematics</td>
                                                                    <td class="py-2 px-4 border-b">FGMA01</td>
                                                                    <td class="py-2 px-4 border-b">2 (1-2)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">General Chemistry and
                                                                        General Physics</td>
                                                                    <td class="py-2 px-4 border-b">FGCH01, FGPH01</td>
                                                                    <td class="py-2 px-4 border-b">2 (1-2)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">Using Library Resources
                                                                        and Demography</td>
                                                                    <td class="py-2 px-4 border-b">FGLI01, FGGE01</td>
                                                                    <td class="py-2 px-4 border-b">1 (1-0)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">General Psychology</td>
                                                                    <td class="py-2 px-4 border-b">FGPS01</td>
                                                                    <td class="py-2 px-4 border-b">2 (2-0)</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="block ">
                                                        <div
                                                            class="bg-gray-100 p-3 text-center font-sans font-semibold text-red-600 uppercase">
                                                            Semester Two
                                                        </div>
                                                        <table class="w-full text-left text-sm ">
                                                            <thead>
                                                                <tr class="h-16">
                                                                    <th class="py-2 px-4 border-b"></th>
                                                                    <th class="py-2 px-4 border-b">Code</th>
                                                                    <th class="py-2 px-4 border-b">20 Credits</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">English Language II</td>
                                                                    <td class="py-2 px-4 border-b">*</td>
                                                                    <td class="py-2 px-4 border-b">4 (2-4)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">Khmer Literature</td>
                                                                    <td class="py-2 px-4 border-b">FGKL01</td>
                                                                    <td class="py-2 px-4 border-b">2 (2-0)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">Khmer Culture &
                                                                        Civilization</td>
                                                                    <td class="py-2 px-4 border-b">FGKL02</td>
                                                                    <td class="py-2 px-4 border-b">2 (2-0)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">General Mathematics</td>
                                                                    <td class="py-2 px-4 border-b">FGMA01</td>
                                                                    <td class="py-2 px-4 border-b">2 (1-2)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">General Chemistry and
                                                                        General Physics</td>
                                                                    <td class="py-2 px-4 border-b">FGCH01, FGPH01</td>
                                                                    <td class="py-2 px-4 border-b">2 (1-2)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">Using Library Resources
                                                                        and Demography</td>
                                                                    <td class="py-2 px-4 border-b">FGLI01, FGGE01</td>
                                                                    <td class="py-2 px-4 border-b">1 (1-0)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">General Psychology</td>
                                                                    <td class="py-2 px-4 border-b">FGPS01</td>
                                                                    <td class="py-2 px-4 border-b">2 (2-0)</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  info 3 -->
                                    <div class="mt-2">
                                        <h2 id="accordion-collapse-heading-2">
                                            <button type="button"
                                                class="flex items-center  font-domine text-xl justify-between w-full p-3 font-medium rtl:text-right text-gray-500 border border-gray-200  focus:ring-gray-200  hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                                data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                                                aria-controls="accordion-collapse-body-3">
                                                <span>Year Three
                                                </span>
                                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0"
                                                    aria-hidden="fale" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 10 6">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                                </svg>
                                            </button>
                                        </h2>
                                        <div id="accordion-collapse-body-2" class="hidden font-sans my-2"
                                            aria-labelledby="accordion-collapse-heading-2">
                                            <div
                                                class=" border-dotted border-2 border-[#15803d]  dark:border-gray-700 dark:bg-gray-900">
                                                <div class="relative overflow-x-auto">
                                                    <div class="block ">
                                                        <div
                                                            class="bg-gray-100 p-3 text-center font-sans font-semibold text-red-600 uppercase">
                                                            Semester One
                                                        </div>
                                                        <table class="w-full text-left text-sm ">
                                                            <thead>
                                                                <tr class="h-16">
                                                                    <th class="py-2 px-4 border-b"></th>
                                                                    <th class="py-2 px-4 border-b">Code</th>
                                                                    <th class="py-2 px-4 border-b">20 Credits</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">English Language I</td>
                                                                    <td class="py-2 px-4 border-b">*</td>
                                                                    <td class="py-2 px-4 border-b">4 (2-4)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">Khmer Literature</td>
                                                                    <td class="py-2 px-4 border-b">FGKL01</td>
                                                                    <td class="py-2 px-4 border-b">2 (2-0)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">Khmer Culture &
                                                                        Civilization</td>
                                                                    <td class="py-2 px-4 border-b">FGKL02</td>
                                                                    <td class="py-2 px-4 border-b">2 (2-0)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">General Mathematics</td>
                                                                    <td class="py-2 px-4 border-b">FGMA01</td>
                                                                    <td class="py-2 px-4 border-b">2 (1-2)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">General Chemistry and
                                                                        General Physics</td>
                                                                    <td class="py-2 px-4 border-b">FGCH01, FGPH01</td>
                                                                    <td class="py-2 px-4 border-b">2 (1-2)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">Using Library Resources
                                                                        and Demography</td>
                                                                    <td class="py-2 px-4 border-b">FGLI01, FGGE01</td>
                                                                    <td class="py-2 px-4 border-b">1 (1-0)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">General Psychology</td>
                                                                    <td class="py-2 px-4 border-b">FGPS01</td>
                                                                    <td class="py-2 px-4 border-b">2 (2-0)</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="block ">
                                                        <div
                                                            class="bg-gray-100 p-3 text-center font-sans font-semibold text-red-600 uppercase">
                                                            Semester Two
                                                        </div>
                                                        <table class="w-full text-left text-sm ">
                                                            <thead>
                                                                <tr class="h-16">
                                                                    <th class="py-2 px-4 border-b"></th>
                                                                    <th class="py-2 px-4 border-b">Code</th>
                                                                    <th class="py-2 px-4 border-b">20 Credits</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">English Language I</td>
                                                                    <td class="py-2 px-4 border-b">*</td>
                                                                    <td class="py-2 px-4 border-b">4 (2-4)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">Khmer Literature</td>
                                                                    <td class="py-2 px-4 border-b">FGKL01</td>
                                                                    <td class="py-2 px-4 border-b">2 (2-0)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">Khmer Culture &
                                                                        Civilization</td>
                                                                    <td class="py-2 px-4 border-b">FGKL02</td>
                                                                    <td class="py-2 px-4 border-b">2 (2-0)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">General Mathematics</td>
                                                                    <td class="py-2 px-4 border-b">FGMA01</td>
                                                                    <td class="py-2 px-4 border-b">2 (1-2)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">General Chemistry and
                                                                        General Physics</td>
                                                                    <td class="py-2 px-4 border-b">FGCH01, FGPH01</td>
                                                                    <td class="py-2 px-4 border-b">2 (1-2)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">Using Library Resources
                                                                        and Demography</td>
                                                                    <td class="py-2 px-4 border-b">FGLI01, FGGE01</td>
                                                                    <td class="py-2 px-4 border-b">1 (1-0)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">General Psychology</td>
                                                                    <td class="py-2 px-4 border-b">FGPS01</td>
                                                                    <td class="py-2 px-4 border-b">2 (2-0)</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  info 3 -->
                                    <div class="mt-2">
                                        <h2 id="accordion-collapse-heading-3">
                                            <button type="button"
                                                class="flex items-center  font-domine text-xl justify-between w-full p-3 font-medium rtl:text-right text-gray-500 border border-gray-200  focus:ring-gray-200  hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                                data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                                                aria-controls="accordion-collapse-body-3">
                                                <span>Year Four
                                                </span>
                                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0"
                                                    aria-hidden="fale" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 10 6">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                                </svg>
                                            </button>
                                        </h2>
                                        <div id="accordion-collapse-body-3" class="hidden font-sans my-2"
                                            aria-labelledby="accordion-collapse-heading-3">
                                            <div
                                                class=" border-dotted border-2 border-[#15803d]  dark:border-gray-700 dark:bg-gray-900">
                                                <div class="relative overflow-x-auto">
                                                    <div class="block ">
                                                        <div
                                                            class="bg-gray-100 p-3 text-center font-sans font-semibold text-red-600 uppercase">
                                                            Semester One
                                                        </div>
                                                        <table class="w-full text-left text-sm ">
                                                            <thead>
                                                                <tr class="h-16">
                                                                    <th class="py-2 px-4 border-b"></th>
                                                                    <th class="py-2 px-4 border-b">Code</th>
                                                                    <th class="py-2 px-4 border-b">20 Credits</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">English Language I</td>
                                                                    <td class="py-2 px-4 border-b">*</td>
                                                                    <td class="py-2 px-4 border-b">4 (2-4)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">Khmer Literature</td>
                                                                    <td class="py-2 px-4 border-b">FGKL01</td>
                                                                    <td class="py-2 px-4 border-b">2 (2-0)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">Khmer Culture &
                                                                        Civilization</td>
                                                                    <td class="py-2 px-4 border-b">FGKL02</td>
                                                                    <td class="py-2 px-4 border-b">2 (2-0)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">General Mathematics</td>
                                                                    <td class="py-2 px-4 border-b">FGMA01</td>
                                                                    <td class="py-2 px-4 border-b">2 (1-2)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">General Chemistry and
                                                                        General Physics</td>
                                                                    <td class="py-2 px-4 border-b">FGCH01, FGPH01</td>
                                                                    <td class="py-2 px-4 border-b">2 (1-2)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">Using Library Resources
                                                                        and Demography</td>
                                                                    <td class="py-2 px-4 border-b">FGLI01, FGGE01</td>
                                                                    <td class="py-2 px-4 border-b">1 (1-0)</td>
                                                                </tr>
                                                                <tr class="h-16">
                                                                    <td class="py-2 px-4 border-b">General Psychology</td>
                                                                    <td class="py-2 px-4 border-b">FGPS01</td>
                                                                    <td class="py-2 px-4 border-b">2 (2-0)</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- End GENERAL SUBJECTS -->

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
