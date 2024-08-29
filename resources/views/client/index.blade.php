@extends('layouts.client')
@section('content')
    {{-- Start Body --}}
    <!--SLIDE SHOW-->
    <div class="max-w-7xl mx-auto mt-6">
        <!-- Carousel wrapper -->
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>

                    <img src="{{ asset('assets/New Image/11889966_490084771173694_6492652541950480321_o.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>

            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>


    </div>

    <!--option-->
    <div>
        <div class="flex justify-center px-10 pb-7 pt-10 my-5">
            <a
                class="border-solid border-b text-xl text-gray-600 hover:px-5 py-3 transision duration-300 hover:bg-[#078e3b] hover:text-white">Faculties
                / Divisions
            </a>
        </div>
    </div>

    <div id="option" class="max-w-7xl mx-auto flex items-center justify-center p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
            {{-- Item 1 --}}
            <a href="#"
                class="transistion w-full aspect-video relative shadow-md rounded-lg cursor-pointer  hover:-translate-y-1 hover:scale-105 duration-300">
                <img src="{{ asset('assets/New Image/11889966_490084771173694_6492652541950480321_o.jpg') }}" alt="#"
                    class="w-full aspect-video object-cover rounded-lg">
                <div
                    class="absolute bottom-0 left-0 right-0 h-16 bg-black bg-opacity-50 text-center text-white p-4 rounded-b-lg">
                    <h1 class="text-2xl font-semibold">

                        Faculties</h1>
                    <!-- <p class="mt-2"></p> -->
                </div>
            </a>
            {{-- Item 2 --}}
            <a href="#"
                class="transistion w-full aspect-video relative shadow-md rounded-lg cursor-pointer  hover:-translate-y-1 hover:scale-105 duration-300">
                <img src="{{ asset('assets/New Image/15994520_704356626413173_3003629463830131555_o.jpg') }}" alt="#"
                    class="w-full aspect-video object-cover rounded-lg">
                <div
                    class="absolute bottom-0 left-0 right-0 h-16 bg-black bg-opacity-50 text-center text-white p-4 rounded-b-lg">
                    <h1 class="text-2xl font-semibold">Divisions</h1>
                    <!-- <p class="mt-2"></p> -->
                </div>
            </a>

            <a href="#"
                class="transition duration-300 ease-in-out border w-full aspect-video relative shadow-sm rounded-lg cursor-pointer hover:shadow-lg hover:border-[#15803d]">
                <p class="uppercase font-siemreap mx-5 mt-5">Scholarship</p>
                <ul class="text-center list-inside">
                    <li class="list-disc text-[#15803d]">Higher Education for ASEAN Talents (HEAT)
                        <ul class="ml-5">
                            <li class="text-gray-500">Posted: 2017-05-25 13:00:56</li>
                        </ul>
                    </li>
                    <li class="list-disc text-[#15803d] mt-2">Higher Education for ASEAN Talents (HEAT)
                        <ul class="ml-5">
                            <li class="text-gray-500">Posted: 2017-05-25 13:00:56</li>
                        </ul>
                    </li>
                    <li class="list-disc text-[#15803d] mt-2">Higher Education for ASEAN Talents (HEAT)
                        <ul class="ml-5">
                            <li class="text-gray-500">Posted: 2017-05-25 13:00:56</li>
                        </ul>
                    </li>
                </ul>
            </a>

        </div>
    </div>
    <!--End Option-->

    <!--news -->
    <!--button-->
    <div class="max-w-7xl mx-auto  px-4 mb-6 ">
        <div class="my-10">
            <div class="flex justify-center px-10 gap-10 py-5 mx-2">
                <a href="#"
                    class="border-solid border-b text-xl  px-5 py-3 transision duration-300 bg-[#078e3b] text-white hover:underline font-bold underline-offset-2">News
                </a>
                <a href="#"
                    class="border-solid border-b text-xl text-gray-600 hover:px-5 py-3 transision duration-300 hover:bg-[#078e3b] hover:text-white hover:underline underline-offset-2">Procurement

                </a>
            </div>
        </div>

        <!--Swiper News-->
        <div class=" max-w-7xl mx-auto grid grid-cols-12 gap-5  mt-3 my-10">
            <div class="col-span-12 lg:col-span-4  border rounded-md overflow-hidden ">
                <div class="relative ">
                    <a href="#">
                        <div class="w-full">
                            <img class="w-full aspect-video object-cover "
                                src="{{ asset('assets/New Image/16107572_704354176413418_4398238422947701313_o.jpg') }}">
                        </div>
                        <div class="p-2">
                            <h5
                                class="mt-2 font-bold text-lg text-slate-600 cursor-pointer ml-3 leading-8 hover:underline hover:opacity-90 line-clamp-1">
                                Greetings from Members of the University of Agriculture</h5>
                            <h6 class="text-slate-400 cursor-pointer ml-3 leading-8 hover:opacity-90 line-clamp-2">
                                On the morning of Wednesday, January 11, 2023, Phnom Penh University of Agriculture
                                organized a farewell ceremony for members of Phnom Penh University of Agriculture under
                                the sovereignty of H.E. Hun Mani, Chairman of the Cambodian Youth Federation, which was
                                attended by approximately 700 members of Phnom Penh University of Agriculture and
                                university leaders.</h6>

                        </div>
                    </a>
                </div>
            </div>
            <div class="grid gap-5 col-span-12 lg:col-span-8">
                <a href="#"
                    class="flex items-center bg-white   rounded-lg border flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 h-[110px] lg:h-[160px] overflow-hidden">
                    <img class="object-cover h-full aspect-video  "
                        src="{{ asset('assets/New Image/16107572_704354176413418_4398238422947701313_o.jpg') }}"
                        alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <div>
                            <h5
                                class="font-bold text-left text-[14px] lg:text-[16px] text-slate-600 cursor-pointer hover:underline hover:opacity-90 line-clamp-1 lg:line-clamp-2 leading-relaxed">
                                Greetings from Members of the University of Agriculture
                            </h5>
                        </div>
                        <div>
                            <h5
                                class="text-slate-400 text-left text-[12px] lg:text-[14px] cursor-pointer hover:opacity-90 line-clamp-2 leading-loose no-tailwind">
                                On the morning of Wednesday, January 11, 2023, Phnom Penh University of Agriculture
                                organized a farewell ceremony for members of Phnom Penh University of Agriculture under
                                the sovereignty of H.E. Hun Mani, Chairman of the Cambodian Youth Federation, which was
                                attended by approximately 700 members of Phnom Penh University of Agriculture and
                                university leaders.
                            </h5>
                        </div>
                    </div>
                </a>
                <a href="#"
                    class="flex items-center bg-white border  rounded-lg flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 h-[110px] lg:h-[160px] overflow-hidden">
                    <img class="object-cover h-full aspect-video  "
                        src="{{ asset('assets/New Image/16107572_704354176413418_4398238422947701313_o.jpg') }}"
                        alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <div>
                            <h5
                                class="font-bold text-left text-[14px] lg:text-[16px] text-slate-600 cursor-pointer hover:underline hover:opacity-90 line-clamp-1 lg:line-clamp-2 leading-relaxed">
                                Greetings from Members of the University of Agriculture
                            </h5>
                        </div>
                        <div>
                            <h5
                                class="text-slate-400 text-left text-[12px] lg:text-[14px] cursor-pointer hover:opacity-90 line-clamp-2 leading-loose no-tailwind">
                                On the morning of Wednesday, January 11, 2023, Phnom Penh University of Agriculture
                                organized a farewell ceremony for members of Phnom Penh University of Agriculture under
                                the sovereignty of H.E. Hun Mani, Chairman of the Cambodian Youth Federation, which was
                                attended by approximately 700 members of Phnom Penh University of Agriculture and
                                university leaders.
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <a href="#" class="text-slate-700 flex justify-end mr-4 text-end col-span-3 mt-4">
            <span class=" hover:text-slate-900 hover:underline hover:underline-offset-4">

            </span>
        </a>
        <!--End Swiper News-->
    </div>

    <!--INFORMATION -->

    <!--BUTTON-->
    {{-- <div class="bg-[#15803d]  ">
        <div class="flex  justify-center py-6">
            <a
                class="border-solid border-b uppercase text-xl texthover:-wh5e px-4 py-3 shadow-lg transition duration-300 transform hover:scale-105">
                Information
            </a>
        </div>
        <!-- CONTAINERS -->
        <div class="max-w-7xl mx-auto  pb-10">
            <div class="grid grid-cols-2 gap-10">

                <a href="#"
                    class="bg-white border mx-auto border-gray-200 rounded-lg shadow  md:max-w-xl hover:bg-gray-100">

                    <img class="object-cover w-full  rounded-t-lg rounded-lg h-full  rounded-s-lg  hover:opacity-80"
                        src="{{ asset('assets/New Image/5b66aa9a7db6ddb89cd5e0f5b0af2807.jpg') }}" alt="">
                </a>
                <a href="#"
                    class="bg-white border mx-auto border-gray-200 rounded-lg shadow  md:max-w-xl hover:bg-gray-100">

                    <img class="object-cover w-full rounded-t-lg rounded-lg h-full  rounded-s-lg  hover:opacity-80"
                        src="{{ asset('assets/New Image/16107572_704354176413418_4398238422947701313_o.jpg') }}"
                        alt="">
                </a>

            </div>
        </div>
    </div> --}}


    </div>

    <div class="font-sans flex items-center justify-center my-10 mb-16">
        <div x-data="{ openTab: 1 }" class="w-full mx-2">
            <div class="max-w-7xl mx-auto">
                <div class="mb-7 text-xl flex space-x-4 p-1  bg-white rounded-lg shadow border">
                    <button x-on:click="openTab = 1" :class="{ 'bg-green-600 text-white': openTab === 1 }"
                        class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Video
                    </button>
                    <button x-on:click="openTab = 2" :class="{ 'bg-green-600 text-white': openTab === 2 }"
                        class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Photos
                    </button>
                </div>

                <div x-show="openTab === 1"
                    class="transition-all duration-300 bg-white p-4 rounded-lg  border-l-4 border-green-600">
                    <!--Swiper Video-->
                    <div class=" max-w-7xl mx-auto grid grid-cols-12 gap-5 " style="">
                        <div class="col-span-12 lg:col-span-4  border rounded-md overflow-hidden">
                            <div class="relative">
                                <a href="#">
                                    <div class="w-full">
                                        <img class="w-full aspect-video object-cover "
                                            src="{{ asset('assets/New Image/16107572_704354176413418_4398238422947701313_o.jpg') }}">
                                    </div>
                                    <div class="p-2">

                                        <h5
                                            class="font-bold text-lg text-slate-600 cursor-pointer ml-3 leading-8 hover:underline hover:opacity-90 line-clamp-1">
                                            Greetings from Members of the University of Agriculture
                                            Greetings from Members of the University of Agriculture
                                        </h5>
                                        <h6
                                            class="text-slate-400 cursor-pointer ml-3 leading-8 hover:opacity-90 line-clamp-2">
                                            <div>
                                                On the morning of Wednesday, January 11, 2023, Phnom Penh University of
                                                Agriculture organized a farewell ceremony for members of Phnom Penh
                                                University of Agriculture under the sovereignty of H.E. Hun
                                            </div>
                                        </h6>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid gap-5 col-span-12 lg:col-span-8 place-content-start">
                            <a href="#"
                                class="flex items-center bg-white border border-gray-200 rounded-lg shadow flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 h-[110px] lg:h-[160px] overflow-hidden">
                                <div class="relative h-full aspect-video">
                                    <img class="object-cover h-full w-full"
                                        src="{{ asset('assets/New Image/16107572_704354176413418_4398238422947701313_o.jpg') }}"
                                        alt="">
                                </div>

                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <div>
                                        <h5
                                            class="font-bold text-left text-[14px] lg:text-[16px] text-slate-600 cursor-pointer hover:underline hover:opacity-90 line-clamp-1 lg:line-clamp-2 leading-relaxed">
                                            Greetings from Members of the University of Agriculture
                                        </h5>
                                    </div>
                                    <div>
                                        <h5
                                            class="text-slate-400 text-left text-[12px] lg:text-[14px] cursor-pointer hover:opacity-90 line-clamp-2 leading-loose no-tailwind">
                                            Greetings from Members of the University of Agriculture
                                            Greetings from Members of the University of Agriculture
                                        </h5>
                                    </div>
                                </div>
                            </a>
                            <a href="#"
                                class="flex items-center bg-white border border-gray-200 rounded-lg shadow flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 h-[110px] lg:h-[160px] overflow-hidden">
                                <div class="relative h-full aspect-video">
                                    <img class="object-cover h-full w-full"
                                        src="{{ asset('assets/New Image/16107572_704354176413418_4398238422947701313_o.jpg') }}"
                                        alt="">
                                </div>

                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <div>
                                        <h5
                                            class="font-bold text-left text-[14px] lg:text-[16px] text-slate-600 cursor-pointer hover:underline hover:opacity-90 line-clamp-1 lg:line-clamp-2 leading-relaxed">
                                            Greetings from Members of the University of Agriculture
                                        </h5>
                                    </div>
                                    <div>
                                        <h5
                                            class="text-slate-400 text-left text-[12px] lg:text-[14px] cursor-pointer hover:opacity-90 line-clamp-2 leading-loose no-tailwind">
                                            Greetings from Members of the University of Agriculture
                                        </h5>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <a href="#" class="text-slate-700 flex justify-end mr-4 text-end col-span-3 mt-4">
                        <span class=" hover:text-slate-900 hover:underline hover:underline-offset-4">
                        </span>
                    </a>
                    <!--End Swiper Video-->

                </div>

                <div x-show="openTab === 2"
                    class="transition-all duration-300 bg-white p-4 rounded-lg  border-l-4 border-green-600">
                    <div class="max-w-7xl mx-auto h-96 grid ">
                        <div class="swiper-gallery flex " init="false" navigation="true">
                            <div role="group" aria-label="1 / 4" class="div-active"
                                style="width: 381.333px; margin-right: 50px;">

                                <div class="w-full aspect-square bg-red-100 relative">
                                    <a href="#" class="group">
                                        <div class="absolute inset-0 bg-cover bg-center z-0">
                                            <img class="h-full w-full object-cover rounded-lg group-hover:blur-[1px] transistion duration-300"
                                                src="{{ asset('assets/New Image/15994520_704356626413173_3003629463830131555_o.jpg') }}"
                                                style="filter: brightness(0.6);" alt="9">
                                        </div>
                                        <div
                                            class="w-full aspect-square group-hover:scale-125 transistion duration-300 absolute  z-10 flex justify-center items-center text-2xl text-white font-semibold text-center">
                                            Royal University of Agriculture</div>
                                    </a>
                                </div>
                            </div>
                            <div role="group" aria-label="2 / 4" class="div-next"
                                style="width: 381.333px; margin-right: 50px;">

                                <div class="w-full aspect-square bg-red-100 relative">
                                    <a href="#" class="group">
                                        <div class="absolute inset-0 bg-cover bg-center z-0">
                                            <img class="h-full w-full object-cover rounded-lg group-hover:blur-[1px] transistion duration-300"
                                                src="{{ asset('assets/New Image/16107572_704354176413418_4398238422947701313_o.jpg') }}"
                                                style="filter: brightness(0.6);" alt="4">
                                        </div>
                                        <div
                                            class="w-full aspect-square group-hover:scale-125 transistion duration-300 absolute  z-10 flex justify-center items-center text-2xl text-white font-semibold text-center">
                                            Album</div>
                                    </a>
                                </div>
                            </div>
                            <div role="group" aria-label="3 / 4" style="width: 381.333px; margin-right: 50px;"
                                class="">

                                <div class="w-full aspect-square bg-red-100 relative">
                                    <a href="#" class="group">
                                        <div class="absolute inset-0 bg-cover bg-center z-0">
                                            <img class="h-full w-full object-cover rounded-lg group-hover:blur-[1px] transistion duration-300"
                                                src="{{ asset('assets/New Image/16107572_704354176413418_4398238422947701313_o.jpg') }}"
                                                style="filter: brightness(0.6);" alt="2">
                                        </div>
                                        <div
                                            class="w-full aspect-square group-hover:scale-125 transistion duration-300 absolute  z-10 flex justify-center items-center text-2xl text-white font-semibold text-center">
                                            Album 2</div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    {{-- End Body --}}
@endsection
