<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
</div>
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
                        <a href="{{ url('/bachelor') }}"
                            class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">
                            Bachelor Degree
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
                        <a href="#"
                            class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">
                            Bachelor of Science in Veterinary Medicine
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


                        <!-- item6 -->
                        <li
                            class="w-full hover:underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="">AERD…</a>
                        </li>
                        <!-- item6 -->
                        <li
                            class="w-full underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="{{ url('/curriculum_bachelor') }}">Bachelor of Science in Veterinary Medicine</a>
                        </li>
                        <!-- item6 -->
                        <li
                            class="w-full hover:underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="">Doctor of Veterinary Medicine</a>
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
                        <div class="space-y-4 md:space-y-6">
                            <div class="space-y-3">
                                <h2 class="text-3xl font-domine font-bold md:text-3xl dark:text-white">
                                    Bachelor of Science in Veterinary Medicine
                                </h2>
                            </div>

                            {{-- <figure class="border-2">
                                <a href="{{ asset('assets/New Image/15896361_704356923079810_5674614839886319861_o.jpg') }}"
                                    class="glightbox2">
                                    <img class="w-full object-cover"
                                        src="{{ asset('assets/New Image/15896361_704356923079810_5674614839886319861_o.jpg') }}"
                                        alt="Image Description" />
                                </a>

                            </figure> --}}
                            {{-- 1st year --}}
                            <div>
                                <h1 class="text-2xl font-domine text-red-600 font-bold text-center dark:text-neutral-200  ">
                                    1st Year
                                </h1>
                                <div class="flex justify-center items-center  bg-gray-100 mt-2">
                                    <div class="overflow-x-auto">
                                        <table class="min-w-full border-collapse border border-gray-400">
                                            <thead>
                                                <tr>
                                                    <th colspan="2"
                                                        class="px-4 py-2 border border-gray-400 text-center font-semibold">
                                                        1st
                                                        Semester</th>
                                                    <th colspan="2"
                                                        class="px-4 py-2 border border-gray-400 text-center font-semibold">
                                                        2nd
                                                        Semester</th>
                                                </tr>
                                                <tr>
                                                    <th class="px-4 py-2 border border-gray-400 text-left">Course</th>
                                                    <th class="px-4 py-2 border border-gray-400 text-left">Credits</th>
                                                    <th class="px-4 py-2 border border-gray-400 text-left">Course</th>
                                                    <th class="px-4 py-2 border border-gray-400 text-left">Credits</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="px-4 py-2 border border-gray-400">1. Practical Mathematic
                                                    </td>
                                                    <td class="px-4 py-2 border border-gray-400">3(3-0)</td>
                                                    <td class="px-4 py-2 border border-gray-400">1. Practical Geology</td>
                                                    <td class="px-4 py-2 border border-gray-400">2(2-0)</td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-2 border border-gray-400">2. Chemistry</td>
                                                    <td class="px-4 py-2 border border-gray-400">3(3-0)</td>
                                                    <td class="px-4 py-2 border border-gray-400">2. Physics</td>
                                                    <td class="px-4 py-2 border border-gray-400">2(2-0)</td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-2 border border-gray-400">3. Biology</td>
                                                    <td class="px-4 py-2 border border-gray-400">2(1-1)</td>
                                                    <td class="px-4 py-2 border border-gray-400">3. Biochemistry</td>
                                                    <td class="px-4 py-2 border border-gray-400">2(1-1)</td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-2 border border-gray-400">4. General Microbiology
                                                    </td>
                                                    <td class="px-4 py-2 border border-gray-400">2(1-1)</td>
                                                    <td class="px-4 py-2 border border-gray-400">4. Botany</td>
                                                    <td class="px-4 py-2 border border-gray-400">3(3-0)</td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-2 border border-gray-400">5. English I</td>
                                                    <td class="px-4 py-2 border border-gray-400">2(2-0)</td>
                                                    <td class="px-4 py-2 border border-gray-400">5. Zoology</td>
                                                    <td class="px-4 py-2 border border-gray-400">3(3-0)</td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-2 border border-gray-400">6. Basic Climate Change
                                                    </td>
                                                    <td class="px-4 py-2 border border-gray-400">3(3-0)</td>
                                                    <td class="px-4 py-2 border border-gray-400">6. Computer</td>
                                                    <td class="px-4 py-2 border border-gray-400">2(1-1)</td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-2 border border-gray-400">7. Economics</td>
                                                    <td class="px-4 py-2 border border-gray-400">3(3-0)</td>
                                                    <td class="px-4 py-2 border border-gray-400">7. English II</td>
                                                    <td class="px-4 py-2 border border-gray-400">2(2-0)</td>
                                                </tr>
                                                <tr>
                                                    <td class="px-4 py-2 border border-gray-400 font-semibold">Total credits
                                                    </td>
                                                    <td class="px-4 py-2 border border-gray-400 font-semibold">18</td>
                                                    <td class="px-4 py-2 border border-gray-400 font-semibold">Total credits
                                                    </td>
                                                    <td class="px-4 py-2 border border-gray-400 font-semibold">16</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="4"
                                                        class="px-4 py-2 border border-gray-400 text-right font-semibold">
                                                        Total
                                                        credits first year = 34</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            {{-- 2nd year --}}
                            <div>
                                <h1 class="text-2xl font-domine text-red-600 font-bold text-center dark:text-neutral-200  ">
                                    2nd Year
                                </h1>
                                <div class="flex justify-center items-center  bg-gray-100 mt-2">

                                    <div class="overflow-x-auto w-full ">
                                        <!-- Main Curriculum Table -->
                                        <table class="min-w-full border-collapse border border-gray-400 ">
                                            <thead>
                                                <tr>
                                                    <th colspan="2"
                                                        class="border border-gray-400 px-4 py-2 font-bold text-center">First
                                                        Semester (16 weeks)</th>
                                                    <th colspan="2"
                                                        class="border border-gray-400 px-4 py-2 font-bold text-center">
                                                        Second
                                                        Semester (16 weeks)</th>
                                                </tr>
                                                <tr>
                                                    <th class="border border-gray-400 px-4 py-2 text-left">Subject</th>
                                                    <th class="border border-gray-400 px-4 py-2 text-left">Credits</th>
                                                    <th class="border border-gray-400 px-4 py-2 text-left">Subject</th>
                                                    <th class="border border-gray-400 px-4 py-2 text-left">Credits</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="border border-gray-400 px-4 py-2">1. Basic Technical Drawing
                                                    </td>
                                                    <td class="border border-gray-400 px-4 py-2">3(2-1)</td>
                                                    <td class="border border-gray-400 px-4 py-2">1. Computer-Aided Design
                                                        (CAD)/Engineering Drawing</td>
                                                    <td class="border border-gray-400 px-4 py-2">2(1-1)</td>
                                                </tr>
                                                <tr>
                                                    <td class="border border-gray-400 px-4 py-2">2. Physics in Agricultural
                                                        Engineering I</td>
                                                    <td class="border border-gray-400 px-4 py-2">3(3-0)</td>
                                                    <td class="border border-gray-400 px-4 py-2">2. Physics in Agricultural
                                                        Engineering II</td>
                                                    <td class="border border-gray-400 px-4 py-2">3(3-0)</td>
                                                </tr>
                                                <tr>
                                                    <td class="border border-gray-400 px-4 py-2">3. Mathematics in
                                                        Agricultural
                                                        Engineering I</td>
                                                    <td class="border border-gray-400 px-4 py-2">3(3-0)</td>
                                                    <td class="border border-gray-400 px-4 py-2">3. Mathematics in
                                                        Agricultural
                                                        Engineering II</td>
                                                    <td class="border border-gray-400 px-4 py-2">3(3-0)</td>
                                                </tr>
                                                <tr>
                                                    <td class="border border-gray-400 px-4 py-2">4. Chemistry for
                                                        Engineering
                                                    </td>
                                                    <td class="border border-gray-400 px-4 py-2">2(1-1)</td>
                                                    <td class="border border-gray-400 px-4 py-2">4. Land Surveying</td>
                                                    <td class="border border-gray-400 px-4 py-2">2(1-1)</td>
                                                </tr>
                                                <tr>
                                                    <td class="border border-gray-400 px-4 py-2">5. Basic Marketing</td>
                                                    <td class="border border-gray-400 px-4 py-2">2(2-0)</td>
                                                    <td class="border border-gray-400 px-4 py-2">5. Soil Science and
                                                        Analysis
                                                        (include Soil Mechanic)</td>
                                                    <td class="border border-gray-400 px-4 py-2">3(2-1)</td>
                                                </tr>
                                                <tr>
                                                    <td class="border border-gray-400 px-4 py-2">6. Plant Production
                                                        Systems
                                                        (CA/WOCAT)</td>
                                                    <td class="border border-gray-400 px-4 py-2">3(3-0)</td>
                                                    <td class="border border-gray-400 px-4 py-2">6. Internal Combustion
                                                        Engines
                                                        and Tractor</td>
                                                    <td class="border border-gray-400 px-4 py-2">3(2-1)</td>
                                                </tr>
                                                <tr>
                                                    <td class="border border-gray-400 px-4 py-2 font-bold text-center"
                                                        colspan="2">Sub-total credits: 18(12-6)</td>
                                                    <td class="border border-gray-400 px-4 py-2 font-bold text-center"
                                                        colspan="2">Sub-total credits: 18(12-6)</td>
                                                </tr>
                                            </tbody>
                                        </table>

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
