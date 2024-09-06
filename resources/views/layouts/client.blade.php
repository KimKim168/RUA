<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RUA</title>
    <!-- Start CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/pdfview.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/audioplayer.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/glightbox.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/no-tailwind.css') }}" />

    <!-- <style>
        body ::selection {
            background-color: goldenrod; /* This is bg-blue-900 in Tailwind */
            color: white; /* This is text-white in Tailwind */
        }
    </style> -->

    <!-- end Start CSS -->

    <!-- Start JS -->
    <script src="{{ asset('assets/js/tailwind34.js') }}"></script>
    <script src="{{ asset('assets/js/darkModeHead.js') }}"></script>
    <script src="{{ asset('assets/js/swiper11.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.0/js/glightbox.min.js"
        integrity="sha512-RBWI5Qf647bcVhqbEnRoL4KuUT+Liz+oG5jtF+HP05Oa5088M9G0GxG0uoHR9cyq35VbjahcI+Hd1xwY8E1/Kg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.0/css/glightbox.css"
        integrity="sha512-iQ3H4A+iyBTP8M4ypX5PrTt2S+G1zmRjf0k0uOASKlFHysV8TL9ZoQyVwPss0D12IBTMoDEHA8+bg8a1viS9Mg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.0/css/glightbox.min.css"
        integrity="sha512-T+KoG3fbDoSnlgEXFQqwcTC9AdkFIxhBlmoaFqYaIjq2ShhNwNao9AKaLUPMfwiBPL0ScxAtc+UYbHAgvd+sjQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.0/js/glightbox.js"
        integrity="sha512-56woqtdm6O1h0fmHF9270BX0qEurQLS72vkgnXiurzd6rbaHXP+nmuqEmV2Eu8B0cSs4B0nIaSwshfH1nS/JWA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> --}}
    {{-- <script src="{{ asset('assets/js/tailwind.config.js') }}"></script> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Moul&family=Poppins:ital&family=Domine,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Siemreap&family=Lora:ital&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            darkMode: "class", // Enables dark mode based on class
            theme: {
                extend: {
                    colors: {
                        clifford: "#da373d",
                        primary: "#15803d",
                        warning: "#fab105",
                        warningHover: "#ffb915",
                    },
                },
                fontFamily: {
                    moul: [
                        "Moul", "Siemreap", "Arial", "Inter", "ui-sans-serif", "system-ui", "-apple-system",
                        "system-ui", "Segoe UI", "Helvetica Neue",
                    ],
                    siemreap: [
                        "Siemreap", "Arial", "Inter", "ui-sans-serif", "system-ui", "-apple-system", "system-ui",
                        "Segoe UI", "Helvetica Neue",
                    ],
                    poppins: [
                        "Poppins", "Roboto", "Arial", "Inter", "ui-sans-serif", "system-ui", "-apple-system",
                        "system-ui", "Segoe UI", "Helvetica Neue",
                    ],
                    domine: [
                        "Domine"
                    ]

                },
            },
        };
    </script>
    <script defer src="{{ asset('assets/js/alpine31.js') }}"></script>
    <script defer src="{{ asset('assets/js/darkMode.js') }}"></script>
    <script defer src="{{ asset('assets/js/flowbite23.js') }} "></script>
    <script defer src="{{ asset('assets/js/pdfPopup.js') }}"></script>
    <script defer src="{{ asset('assets/js/glightbox.js') }}"></script>
    <script defer src="{{ asset('assets/js/glightbox.config.js') }}"></script>
    <!-- End JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="">
    {{-- Start Header --}}
    <Header class="">
        <section class="max-w-screen-xl px-2  mx-auto">
            <div class="grid items-center grid-cols-12 ">
                <div class="flex items-center relative justify-startp- p-2 col-span-2 hover:cursor-pointer">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('/assets/images/image1.png') }}"
                            class="object-contain w-20 rounded-md  relative">
                    </a>
                    <a class="grid  absolute left-[6rem] top-16  text-nowrap" href="{{ url('/') }}">
                        <h1 class="text-[12px] font-moul">សាកលវិទ្យាល័យភូមិន្ទកសិកម្ម</h1>
                        <h2 class="text-[12px] font-poppins">Royal University of Agriculture </h2>
                    </a>
                </div>

                <div class="text-nowrap col-span-10 h-full justify-end p-2  mt-8 ">
                    <div class="flex-col  gap-5 w-full flex order-1  " id="navbar-dropdown"​>
                        <nav class=" w-full  border-gray-200 block  ">
                            <div class="flex flex-wrap items-center justify-end max-w-screen-xl mx-auto">

                                <div class=" w-full md:block text-[12px]  md:w-auto" id="navbar-default">
                                    <ul class="flex justify-end font-medium">
                                        <li
                                            class="flex items-center px-2 pl-0 leading-4 text-gray-900 border-[#15803d] border-r max-w-60  hover:underline hover:decoration-[#15803d]">

                                            <a href="{{ url('/') }}" id="multiLevelDropdownButton"
                                                data-dropdown-toggle="multi-dropdown"
                                                class="p-1 flex items-center text-center " type="button">
                                                Home
                                                {{-- <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 10 6">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                                </svg> --}}
                                            </a>

                                            <!-- Dropdown menu -->
                                            {{-- <div id="multi-dropdown"
                                                class="z-30 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-[250px] dark:bg-gray-700">
                                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 border-none"
                                                    aria-labelledby="multiLevelDropdownButton">
                                                    <li>
                                                        <a href="#"
                                                            class="block px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">New</a>
                                                    </li>
                                                    <li>
                                                        <div class="flex">
                                                            <a href="#"
                                                                class="flex-1 pl-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">RUA
                                                                at Glans</a>
                                                            </button>
                                                        </div>
                                                </ul>
                                            </div> --}}
                                        </li>

                                        {{-- Start AboutRUA --}}
                                        <li
                                            class="flex items-center px-2 leading-4 text-gray-900 border-[#15803d] border-r max-w-60 hover:underline hover:decoration-[#15803d]">

                                            <button id="aboutRUADropdownButton" data-dropdown-toggle="about-rua"
                                                class="p-1 flex items-center text-center " type="button">
                                                About RUA
                                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 10 6">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                                </svg>
                                            </button>

                                            <!-- Dropdown menu -->
                                            <div id="about-rua"
                                                class="z-30 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-[250px] dark:bg-gray-700">
                                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 border-none"
                                                    aria-labelledby="aboutRUADropdownButton">

                                                    <li>
                                                        <div class="flex">
                                                            <a href="{{ url('/vision') }}"
                                                                class="flex-1 pl-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Vision

                                                            </a>
                                                            </button>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="flex">
                                                            <a href="#"
                                                                class="flex-1 pl-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mission
                                                            </a>
                                                            </button>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="flex">
                                                            <a href="#"
                                                                class="flex-1 pl-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                                RUA at a glance
                                                            </a>
                                                            </button>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        {{-- End AboutRUA --}}


                                        {{-- strat management --}}
                                        <li
                                            class="flex items-center px-2 leading-4 text-gray-900 border-[#15803d] border-r max-w-60 hover:underline hover:decoration-[#15803d]">
                                            <button id="manageDropdownButton" data-dropdown-toggle="management"
                                                class="p-1 flex items-center text-center " type="button">
                                                Management
                                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 10 6">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                                </svg>
                                            </button>
                                            <!-- Dropdown menu -->
                                            <div id="management"
                                                class="z-30 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-[250px] dark:bg-gray-700">
                                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 border-none"
                                                    aria-labelledby="manageDropdownButton">
                                                    <li>
                                                        <a href="{{ url('/chart') }}"
                                                            class="block px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">University
                                                            organization chart
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="flex">
                                                            <a href="{{ url('/management_team') }}"
                                                                class="flex-1 pl-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Management
                                                                team
                                                            </a>
                                                            <button id="doubleDropdownButton"
                                                                data-dropdown-toggle="doubleDropdown"
                                                                data-dropdown-placement="bottom-start" type="button"
                                                                class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                                <svg class="w-3 h-3 rotate-90" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 6 10">
                                                                    <path stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="m1 9 4-4-4-4" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div id="doubleDropdown"
                                                            class="relative z-30 hidden bg-gray-100 divide-y divide-gray-200 rounded-lg shadow w-[250px] dark:bg-gray-500 ml-2">
                                                            <div
                                                                class="absolute z-[-1] w-6 h-6 bg-gray-100 dark:bg-gray-500 transform rotate-45 -top-1.5 left-3">
                                                            </div>
                                                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 border-none"
                                                                aria-labelledby="doubleDropdownButton">
                                                                <li>
                                                                    <a href="#"
                                                                        class="block px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                                        Rector

                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"
                                                                        class="block px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Vice
                                                                        rector
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"
                                                                        class="block px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                                        Head of Each support unit
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"
                                                                        class="block px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                                        Dean of faculties
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="flex">
                                                            <a href="#"
                                                                class="flex-1 pl-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                                Supporting Unit
                                                            </a>
                                                            <button id="supportDropdownButton"
                                                                data-dropdown-toggle="supportDropdown"
                                                                data-dropdown-placement="bottom-start" type="button"
                                                                class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                                <svg class="w-3 h-3 rotate-90" aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 6 10">
                                                                    <path stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="m1 9 4-4-4-4" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div id="supportDropdown"
                                                            class="relative z-30 hidden bg-gray-100 divide-y divide-gray-200 rounded-lg shadow w-[250px] dark:bg-gray-500 ml-2">
                                                            <div
                                                                class="absolute z-[-1] w-6 h-6 bg-gray-100 dark:bg-gray-500 transform rotate-45 -top-1.5 left-[20px]">
                                                            </div>
                                                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 border-none "
                                                                aria-labelledby="supportDropdownButton">
                                                                <li class="">
                                                                    <a href="{{ url('/administrativeandpersionnel') }}"
                                                                        class="block px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white whitespace-normal">
                                                                        Office of Administrative and Personnel
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"
                                                                        class="block px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white whitespace-normal">
                                                                        Vice Office of Planning and Finance and
                                                                        Accounting
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        {{-- End management --}}

                                        {{-- Start  Research and Development Project --}}
                                        <li
                                            class="flex items-center px-2 leading-4 text-gray-900 border-[#15803d] border-r max-w-60 hover:underline hover:decoration-[#15803d]">
                                            <a href="{{ url('/researchanddevelopment') }}">
                                                <p class="p-1 text-center">
                                                    Research and Development Project
                                                </p>
                                            </a>
                                        </li>
                                        {{-- End  Research and Development Project --}}

                                        {{-- Start   Industrial Linkage and Business Startup --}}
                                        <li
                                            class="flex items-center px-2 leading-4 text-gray-900 border-[#15803d] border-r max-w-60 hover:underline hover:decoration-[#15803d]">
                                            <a href="{{ url('/industriallink ') }}">
                                                <p class="p-1 text-center">
                                                    Industrial Linkage and Business Startup
                                                </p>
                                            </a>
                                        </li>
                                        {{-- End   Industrial Linkage and Business Startup --}}

                                        {{-- Start Partner --}}
                                        <li
                                            class="flex items-center px-2 leading-4 text-gray-900 border-[#15803d] border-r max-w-60 hover:underline hover:decoration-[#15803d]">
                                            <a href="{{ url('/partner') }}">
                                                <p class="p-1 text-center">
                                                    Partner
                                                </p>
                                            </a>
                                        </li>
                                        {{-- End Partner --}}

                                        {{-- Start Library --}}
                                        <li
                                            class="flex items-center px-2 leading-4 text-gray-900 border-[#15803d] border-r max-w-60 hover:underline hover:decoration-[#15803d]">
                                            <a href="{{ url('/library') }}">
                                                <p class="p-1 text-center">
                                                    Library
                                                </p>
                                            </a>
                                        </li>
                                        {{-- End Library --}}

                                        {{-- strat Journal  --}}
                                        <li
                                            class="flex items-center px-2 leading-4 text-gray-900 border-[#15803d] border-r max-w-60 hover:underline hover:decoration-[#15803d]">
                                            <a href="{{ url('/journal') }}">
                                                <p class="p-1 text-center">
                                                    Journal
                                                </p>
                                            </a>
                                        </li>
                                        {{-- End Journal --}}

                                        {{-- strat Contact Us  --}}
                                        <li
                                            class="flex items-center px-2 leading-4 text-gray-900 border-[#15803d] border-r max-w-60 hover:underline hover:decoration-[#15803d]">
                                            <a href="{{ url('/contact') }}">
                                                <p class="p-1 text-center">
                                                    Contact Us
                                                </p>
                                            </a>
                                        </li>
                                        {{-- End Contact US --}}


                                    </ul>
                                </div>
                            </div>
                        </nav>

                    </div>
                </div>
            </div>
        </section>
        {{-- Start Bottom Navbar --}}
        <section class="px-2 border-gray-200 bg-primary ">
            <nav class="max-w-screen-xl mx-auto px-4">
                <ul class="text-[12px] flex justify-end font-medium">
                    {{-- Start Academic Program --}}
                    <li
                        class="flex items-center px-1 leading-4 text-white border-r border-white max-w-[135px] p-1 hover:bg-white hover:text-primary">
                        <button id="academicDropdownButton" data-dropdown-toggle="acdemicDropdown"
                            class="p-1 flex items-center text-center" type="button">
                            Academic Program
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="acdemicDropdown"
                            class="z-30 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-[250px] dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 border-none"
                                aria-labelledby="academicDropdownButton">
                                {{-- Item 1 --}}
                                <li>
                                    <a href="{{ url('/association') }}"
                                        class="block px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Associate
                                        Degree
                                    </a>
                                </li>
                                {{-- Item 2 --}}
                                <li>
                                    {{-- link to faculty --}}
                                    <div class="flex">
                                        <a href="{{ url('/bachelor') }}"
                                            class="flex-1 pl-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Bachelor
                                            Degree
                                        </a>
                                    </div>
                                </li>
                                {{-- Item 3 --}}
                                <li>
                                    <a href="#"
                                        class="block px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Doctor
                                        of Veterinary Medicine
                                    </a>
                                </li>
                                {{-- Item 4 --}}
                                <li>
                                    <div class="flex">
                                        <a href="{{ url('/master') }}"
                                            class="flex-1 pl-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Program
                                            Master Degree
                                        </a>
                                        </button>
                                    </div>
                                </li>
                                {{-- Item 5 --}}
                                <li>
                                    <a href="{{ url('/phd') }}"
                                        class="block px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Program
                                        PhD
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </li>
                    {{-- End Academic Program --}}

                    {{-- Start faculty --}}
                    <li
                        class="flex items-center px-1 leading-4 text-white border-r border-white max-w-[135px] p-1 hover:bg-white hover:text-primary">

                        <button id="facultyDropdownButton" data-dropdown-toggle="facultydropdown"
                            class="p-1 flex items-center text-center" type="button">
                            Faculty
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="facultydropdown"
                            class="z-30 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-[250px] dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 border-none"
                                aria-labelledby="facultyDropdownButton">
                                {{-- Item 1 --}}
                                <li>
                                    <a href="#"
                                        class="block px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Faculty
                                        of Agronomy
                                    </a>
                                </li>
                                {{-- Item 2 --}}
                                <li>
                                    <div class="flex">
                                        <a href="{{ route('client.faculty') }}"
                                            class="flex-1 pl-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Faculty
                                            of Veterinary Medicine
                                        </a>
                                        </button>
                                    </div>
                                </li>
                                {{-- Item 3 --}}
                                <li>
                                    <a href="#"
                                        class="block px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Faculty
                                        of Agro_Industry
                                    </a>
                                </li>
                                {{-- Item 4 --}}
                                <li>
                                    <div class="flex">
                                        <a href="#"
                                            class="flex-1 pl-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Faculty
                                            of Economic …
                                        </a>
                                        </button>
                                    </div>
                                </li>
                                {{-- Item 5 --}}
                                <li>
                                    <a href="#"
                                        class="block px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Faculty
                                        of Land ……

                                    </a>
                                </li>
                                {{-- Item 6 --}}
                                <li>
                                    <div class="flex">
                                        <a href="#"
                                            class="flex-1 pl-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Faculty
                                            of AE
                                        </a>
                                        </button>
                                    </div>
                                </li>
                                {{-- Item 7 --}}
                                <li>
                                    <div class="flex">
                                        <a href="#"
                                            class="flex-1 pl-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Faculty
                                            of Fishery

                                        </a>
                                        </button>
                                    </div>
                                </li>
                                {{-- Item 6 --}}
                                <li>
                                    <div class="flex">
                                        <a href="#"
                                            class="flex-1 pl-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Faculty
                                            of AS
                                        </a>
                                        </button>
                                    </div>
                                </li>
                                {{-- Item 8 --}}
                                <li>
                                    <div class="flex">
                                        <a href="#"
                                            class="flex-1 pl-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Faculty
                                            of Forestry

                                        </a>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </li>
                    {{-- End Faculty --}}

                    {{-- Start  Student life --}}
                    <li
                        class="flex items-center px-1 leading-4 text-white border-r border-white max-w-[135px] p-1 hover:bg-white hover:text-primary">
                        <a href="{{ url('/foundation') }}">
                            <p class="p-1 text-center">
                                Foundation
                            </p>
                        </a>
                    </li>
                    {{-- Strat Graduate Program --}}

                    <li
                        class="flex items-center px-1 leading-4 text-white border-r border-white max-w-[135px] p-1 hover:bg-white hover:text-primary">

                        <button id="graduateDropdownButton" data-dropdown-toggle="graduate"
                            class="p-1 flex items-center text-center " type="button">
                            Graduate Programs
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="graduate"
                            class="z-30 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-[250px] dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 border-none"
                                aria-labelledby="graduateDropdownButton">
                                <li>
                                    <a href="{{ url('/graduate') }}"
                                        class="block px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Graduate
                                        Programs
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        Management
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        Master
                                    </a>
                                </li>
                                <li>
                                    <div class="flex">
                                        <a href="#"
                                            class="flex-1 pl-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            Program

                                        </a>
                                        <button id="DropdownButtonManage" data-dropdown-toggle="doubleDropdownManage"
                                            data-dropdown-placement="bottom-start" type="button"
                                            class="flex items-center justify-between px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <svg class="w-3 h-3 rotate-90" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div id="doubleDropdownManage"
                                        class="relative z-30 hidden bg-gray-100 divide-y divide-gray-200 rounded-lg shadow w-[250px] dark:bg-gray-500 ml-2">
                                        <div
                                            class="absolute z-[-1] w-6 h-6 bg-gray-100 dark:bg-gray-500 transform rotate-45 -top-1.5 left-3">
                                        </div>
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 border-none"
                                            aria-labelledby="DropdownButtonManage">
                                            <li>
                                                <a href="#"
                                                    class="block px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                    GIDAR
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">NRM
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                    PhD Program
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{-- End Graduate program --}}


                    {{-- End Student life --}}


                    {{-- Start Vocational Training & Foreign Language --}}
                    <li
                        class="flex items-center px-1 leading-4 text-white border-r border-white max-w-[135px] p-1 hover:bg-white hover:text-primary">
                        <a href="{{ url('/languages') }}">
                            <p class="p-1 text-center">
                                Vocational Training & Foreign Languages
                            </p>
                        </a>
                    </li>
                    {{-- End Vocational Training & Foreign Language --}}


                    {{-- Start Student life --}}
                    <li
                        class="flex items-center px-1 leading-4 text-white border-r border-white max-w-[135px] p-1 hover:bg-white hover:text-primary">
                        <a href="{{ url('/student_life') }}">
                            <p class="p-1 text-center">
                                Students life
                            </p>
                        </a>
                    </li>
                    {{-- End Student life --}}
                </ul>
            </nav>
        </section>
        {{-- End Bottom Navbar --}}

    </Header>
    {{-- End Header  --}}

    {{-- Content --}}
    @yield('content')
    {{-- End content --}}

    {{-- Start Foolter --}}
    <footer class="bg-gray-300 w-full mt-20 font-poppins">
        <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 ">
            <div class="grid gap-10 row-gap-6 lg:grid-cols-5">
                <div class="lg:col-span-2">
                    <a href="#" aria-label="Go home" title="Company" class="inline-flex items-center">
                        <img src="{{ asset('assets/images/image1.png') }}" alt="logos"
                            class="w-[50px] h-[50px] object-contain">
                        <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Royal University of
                            Agriculture</span>
                    </a>
                    <div class="mt-6 lg:max-w-sm ">
                        <div class=" no-tailwind">

                            <p class="">Address: Royal University of Agriculture, Sangkat/Khan Dangkor, Phnom
                                Penh, Cambodia.
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="http://s11.flagcounter.com/more/x10s"><img
                            src="https://s11.flagcounter.com/count2/x10s/bg_FFFFFF/txt_000000/border_A1A1A1/columns_2/maxflags_12/viewers_0/labels_1/pageviews_1/flags_0/percent_0/"
                            alt="Flag Counter" border="0"></a>
                </div>
                <div class="space-y-2 text-sm">
                    <a href="" class="cursor-pointer">
                        <p class="text-base font-bold tracking-wide text-gray-900 font-domine">Contacts</p>
                    </a>
                    <div class=" no-tailwind">
                        <ul class="mb-8  dark:text-gray-400">
                            <li class="mb-4 space-y-2">

                                <p>Tel: (855) 17 584 150 / 77 396 864</p>
                                <p>Email: info@rua.edu.kh</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="space-y-2 text-sm">
                    <a href="" class="cursor-pointer">
                        <p class="text-base font-bold tracking-wide text-gray-900 font-domine">Social</p>
                    </a>
                    <div class="flex gap-4">

                        <div class="flex flex-col items-center">
                            <a href="#" class="text-gray-500 transition-colors duration-300 hover:scale-110">
                                <img class="w-10 h-10 object-contain" src="{{ asset('assets/icons/telegram.png') }}"
                                    alt="">
                            </a>
                            <p>Telegram</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <a href="https://facebook.com/"
                                class="text-gray-500 transition-colors duration-300 hover:scale-110">
                                <img class="w-10 h-10 object-contain" src="{{ asset('assets/icons/facebook.png') }}"
                                    alt="">
                            </a>
                            <p>Facebook</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <a href="https://www.youtube.com/"
                                class="text-gray-500 transition-colors duration-300 hover:scale-110">
                                <img class="w-10 h-10 object-contain" src="{{ asset('assets/icons/youtube.png') }}"
                                    alt="">
                            </a>
                            <p>youtube</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col-reverse justify-between pt-5 pb-10 border-t lg:flex-row">
                <p class="text-sm text-gray-600">
                    Copyright 2023. All rights reserved.
                </p>
                <ul class="flex flex-col mb-3 space-y-2 lg:mb-0 sm:space-y-0 sm:space-x-5 sm:flex-row">

                </ul>
            </div>
        </div>
    </footer>
    {{-- End Foolter --}}

</body>

</html>
