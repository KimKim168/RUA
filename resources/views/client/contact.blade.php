@extends('layouts.client')
@section('content')
    <section class="" style="">
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
                            Contact Us
                        </a>
                    </div>
                </li>


            </ol>
        </section>
        <!-- End Breadcrumbs -->

        <!-- Start Main Content -->
        <div class="p-2 max-w-7xl mx-auto grid grid-cols-12 gap-4">


            <!-- Start Middle section -->
            <div class="col-span-12 lg:col-span-9 border-t-2 border-t-[#15803d] rounded-md">
                <!-- Blog Article -->
                <div class="max-w-3xl px-4 pt-6 pb-12 sm:px-6 lg:px-8 ">
                    <div class="max-w-2xl mx-auto p-4">

                        <address class="not-italic mb-6">
                            <strong class="block text-lg mb-1">If you would like to find out any further information about
                                the Royal University of Phnom Penh,
                                or become involved in any of our programs please contact us:</strong>
                            <span class="block">Khan Dangkor, Phnom Penh, Cambodia</span>
                            <span class="block">Tel: (855) 17 584 150/ 77 396 864</span>
                            <span class="block">Email address:
                                <a href="#" class="text-blue-500 hover:underline">info@rua.edu.kh</a>
                            </span>
                        </address>

                        <div class="mt-4 w-full border border-gray-200 rounded-lg shadow-lg overflow-hidden">
                            <!-- Embed Google Map -->
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13500.019451064563!2d104.88291524102821!3d11.515378641148198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951d32bfa6d23%3A0x70a23edbd16b30e2!2sRoyal%20University%20of%20Agriculture%20(RUA)!5e1!3m2!1sen!2sus!4v1725008353383!5m2!1sen!2sus"
                                height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade" class="w-full"></iframe>
                        </div>
                    </div>

                </div>
                <!-- End Blog Article -->
            </div>
            <!-- End Middle section -->

            <!-- Start Right Section -->
            <div class="col-span-12 space-y-6 lg:col-span-3 ">
                <div id="contactbox" class="p-6 bg-white rounded-lg border-2  border-t-[#15803d]">
                    <h2 class="text-2xl font-semibold mb-4">Scholarship</h2>
                    <img src="{{ asset('assets/New Image/11889966_490084771173694_6492652541950480321_o.jpg') }}"
                        alt="Contact Image" class="w-full h-auto mb-4 rounded-lg" />

                    <div class="mb-6">
                        <h3 class="text-md font-semibold mb-2 ">
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
