@extends('layouts.client')
@section('content')
    <section class="font-poppins" style="">
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
                        <a href="#"
                            class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Faculty
                            of Veterinary Medicine
                        </a>
                    </div>
                </li>
            </ol>
        </section>
        <!-- End Breadcrumbs -->

        <!-- Start Main Content -->
        <div class="p-2 max-w-7xl mx-auto grid grid-cols-12 gap-4 ">
            <!-- Start Left section -->
            <div class="col-span-12 lg:col-span-3  ">
                <div class="cursor-pointer   border-2 border-t-[#15803d] rounded-md pl-8 py-4 pr-2">
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
                            class="w-full hover:underline text-leftfont-medium rtl:text-right  border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 gap-3 list-disc">
                            <a href="vision.html">Academic program </a>
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
            <div class="col-span-12 lg:col-span-6 border-2 border-t-[#15803d]  rounded-md">
                <!-- Blog Article -->
                <div class="max-w-3xl px-4 pt-6 pb-12 sm:px-6 lg:px-8 mx-auto">
                    <div class="max-w-2xl">
                        <!-- Content -->
                        <div class="space-y-5 md:space-y-8">
                            <div class="space-y-3">
                                <h2 class="text-3xl font-domine font-bold md:text-3xl dark:text-white">
                                    Faculty of Veterinary Medicine
                                </h2>
                            </div>

                            <figure class="border-2">
                                <img class="w-full object-cover"
                                    src="https://images.unsplash.com/photo-1670272505340-d906d8d77d03?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                                    alt="Image Description" />
                            </figure>

                            <p class="text-md text-gray-800 dark:text-neutral-200 text-justify">
                                As we've grown, we've seen how Preline has
                                helped companies such as Spotify, Microsoft,
                                Airbnb, Facebook, and Intercom bring their
                                designers closer together to create amazing
                                things. We've also learned that when the culture
                                of sharing is brought in earlier, the better
                                teams adapt and communicate with one another.
                            </p>
                        </div>
                        <!-- End Content -->
                    </div>
                </div>
                <!-- End Blog Article -->
            </div>
            <!-- End Middle section -->

            <!-- Start Right Section -->
            <div class="col-span-12 space-y-6 lg:col-span-3 ">
                <div id="contactbox" class="p-6 bg-white shadow-lg rounded-lg border-2 border-t-[#15803d] ">
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
