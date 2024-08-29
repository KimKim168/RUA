<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
    <script src="{{ asset('public/js/tailwindcss3.4.js') }}"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>

</head>

<body>


    <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar"
        aria-controls="sidebar-multi-level-sidebar" type="button"
        class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>

    <aside id="sidebar-multi-level-sidebar"
        class="fixed border-r border-r-black/40 top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50">
            <div class="pb-5">
                <img class="w-14 object-contain h-14" src="{{ asset('public/front-end-Images/Header/image1.webp') }}"
                    alt="logo">
            </div>
            <ul class="space-y-2 font-medium">
                <li class="{{ request()->is('admin') ? 'bg-slate-300 rounded-lg' : '' }}">
                    <a href="{{ url('admin') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100
                        {{ request()->is('users*') || request()->is('roles*') ? 'bg-slate-300 rounded-lg' : '' }}
                        "
                        aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-user-round">
                            <circle cx="12" cy="8" r="5" />
                            <path d="M20 21a8 8 0 0 0-16 0" />
                        </svg>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">User Management</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="dropdown-example" class="hidden py-2 space-y-2">
                        <li>
                            <a href="{{ url('users') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100
                                {{ request()->is('users*') ? 'bg-slate-300 rounded-lg' : '' }}
                            ">Users</a>
                        </li>
                        <li>
                            <a href="{{ url('roles') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100
                                {{ request()->is('roles*') ? 'bg-slate-300 rounded-lg' : '' }}
                            ">Roles</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('pages.index') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group
                        {{ request()->is('pages*') ? 'bg-slate-300 rounded-lg' : '' }}
                    ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-book-open-text">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                            <path d="M6 8h2" />
                            <path d="M6 12h2" />
                            <path d="M16 8h2" />
                            <path d="M16 12h2" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">About RUA</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('posts.index') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group
                        {{ request()->is('admin/posts*') ? 'bg-slate-300 rounded-lg' : '' }}
                        ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-receipt-text">
                            <path d="M4 2v20l2-1 2 1 2-1 2 1 2-1 2 1 2-1 2 1V2l-2 1-2-1-2 1-2-1-2 1-2-1-2 1Z" />
                            <path d="M14 8H8" />
                            <path d="M16 12H8" />
                            <path d="M13 16H8" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">News</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('procuments.index') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group
                        {{ request()->is('admin/procuments*') ? 'bg-slate-300 rounded-lg' : '' }}
                        ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-book">
                            <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Procuments</span>
                    </a>
                </li>
                {{-- <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 {{ request()->is('*posts*') || request()->is('*main-category*') ? 'bg-gray-700' : '' }}"
                        aria-controls="category_dropdown" data-collapse-toggle="category_dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-layout-panel-top">
                            <rect width="18" height="7" x="3" y="3" rx="1" />
                            <rect width="7" height="7" x="3" y="14" rx="1" />
                            <rect width="7" height="7" x="14" y="14" rx="1" />
                        </svg>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Post Manager</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="category_dropdown" class="hidden py-2 space-y-2">
                        <li>
                            <a href="{{ route('posts.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Posts</a>
                        </li>
                        <li>
                            <a href="{{ route('main-category.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Category</a>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100
                        {{ request()->is('admin/posts*') || request()->is('admin/main-category*') ? 'bg-slate-300 rounded-lg' : ''  }}
                        "
                        aria-controls="dropdown-posts" data-collapse-toggle="dropdown-posts">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 21">
                            <path
                                d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                        </svg>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Posts Management</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="dropdown-posts" class="hidden py-2 space-y-2">
                        <li>
                            <a href="{{ route('posts.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100
                                {{ request()->is('users*') ? 'bg-slate-300 rounded-lg' : ''  }}
                            ">Posts</a>
                        </li>
                        <li>
                            <a href="{{ route('main-category.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100
                                {{ request()->is('roles*') ? 'bg-slate-300 rounded-lg' : ''  }}
                            ">Category</a>
                        </li>
                    </ul>
                </li> --}}
                <li>
                    <a href="{{ route('banners.index') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group
                        {{ request()->is('admin/banners*') ? 'bg-slate-300 rounded-lg' : '' }}
                        ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-book-image">
                            <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20" />
                            <circle cx="10" cy="8" r="2" />
                            <path d="m20 13.7-2.1-2.1c-.8-.8-2-.8-2.8 0L9.7 17" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Slides/Banners</span>
                    </a>
                </li>
                {{-- <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100"
                        aria-controls="banner_dropdown" data-collapse-toggle="banner_dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-book-image">
                            <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20" />
                            <circle cx="10" cy="8" r="2" />
                            <path d="m20 13.7-2.1-2.1c-.8-.8-2-.8-2.8 0L9.7 17" />
                        </svg>

                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Banner Manager</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="banner_dropdown" class="hidden py-2 space-y-2">
                        <li>
                            <a href="{{ route('banners.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Banner</a>
                        </li>
                        <li>
                            <a href="{{ route('banner-position.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Position</a>
                        </li>
                    </ul>
                </li> --}}
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100
                        {{ request()->is('admin/photo*') || request()->is('admin/photo_position*') ? 'bg-slate-300 rounded-lg' : '' }}
                        "
                        aria-controls="photo_dropdown" data-collapse-toggle="photo_dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-image">
                            <rect width="18" height="18" x="3" y="3" rx="2" ry="2" />
                            <circle cx="9" cy="9" r="2" />
                            <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21" />
                        </svg>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Photos Manager</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="photo_dropdown" class="hidden py-2 space-y-2">
                        <li>
                            <a href="{{ route('photo.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100
                                {{ request()->is('admin/photo') ? 'bg-slate-300 rounded-lg' : '' }}
                                ">Photos
                                / Gallery</a>
                        </li>
                        <li>
                            <a href="{{ route('photo-position.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100
                                {{ request()->is('admin/photo-position*') ? 'bg-slate-300 rounded-lg' : '' }}
                                ">Album</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('videos.index') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group
                        {{ request()->is('admin/videos*') ? 'bg-slate-300 rounded-lg' : '' }}
                        ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-youtube">
                            <path
                                d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
                            <path d="m10 15 5-3-5-3z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Video</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('forum.index') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group
                        {{ request()->is('admin/forum*') ? 'bg-slate-300 rounded-lg' : '' }}
                        ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-list-video">
                            <path d="M12 12H3" />
                            <path d="M16 6H3" />
                            <path d="M12 18H3" />
                            <path d="m16 12 5 3-5 3v-6Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Forum</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('homepage-link.index') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group
                        {{ request()->is('admin/homepage-link*') ? 'bg-slate-300 rounded-lg' : '' }}
                        ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-cable">
                            <path d="M17 21v-2a1 1 0 0 1-1-1v-1a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v1a1 1 0 0 1-1 1" />
                            <path d="M19 15V6.5a1 1 0 0 0-7 0v11a1 1 0 0 1-7 0V9" />
                            <path d="M21 21v-2h-4" />
                            <path d="M3 5h4V3" />
                            <path d="M7 5a1 1 0 0 1 1 1v1a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a1 1 0 0 1 1-1V3" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Homepage Link</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('social.index') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group
                        {{ request()->is('admin/social*') ? 'bg-slate-300 rounded-lg' : '' }}
                        ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-link">
                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Social Link</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('footer.index') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group
                        {{ request()->is('admin/footer*') ? 'bg-slate-300 rounded-lg' : '' }}
                        ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-square-dashed-bottom">
                            <path d="M5 21a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2" />
                            <path d="M9 21h1" />
                            <path d="M14 21h1" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Footer</span>
                    </a>
                </li>
                {{-- <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100
                        {{ request()->is('admin/footer*') || request()->is('admin/footer-position*') ? 'bg-slate-300 rounded-lg' : ''  }}
                        "
                        aria-controls="footer_dropdown" data-collapse-toggle="footer_dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-square-dashed-bottom">
                            <path d="M5 21a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2" />
                            <path d="M9 21h1" />
                            <path d="M14 21h1" />
                        </svg>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Footer</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="footer_dropdown" class="hidden py-2 space-y-2">
                        <li>
                            <a href="{{ route('footer.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100
                                {{ request()->is('admin/footer*') ? 'bg-slate-300 rounded-lg' : ''  }}
                                ">Footer</a>
                        </li>
                        <li>
                            <a href="{{ route('footer-position.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100
                                {{ request()->is('admin/footer-position*') ? 'bg-slate-300 rounded-lg' : ''  }}
                                ">Position</a>
                        </li>
                    </ul>
                </li> --}}
                <li>
                    <h1 class=" px-3 text-sm text-gray-400">Adds on</h1>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100
                        {{ request()->is('faculty-names*') ||
                        request()->is('faculty-staffs*') ||
                        request()->is('faculty-banners*') ||
                        request()->is('faculty-posts*') ||
                        request()->is('faculty-categories*')
                            ? 'bg-slate-300 rounded-lg'
                            : '' }}
                        "
                        aria-controls="faculty_dropdown" data-collapse-toggle="faculty_dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-component">
                            <path d="M5.5 8.5 9 12l-3.5 3.5L2 12l3.5-3.5Z" />
                            <path d="m12 2 3.5 3.5L12 9 8.5 5.5 12 2Z" />
                            <path d="M18.5 8.5 22 12l-3.5 3.5L15 12l3.5-3.5Z" />
                            <path d="m12 15 3.5 3.5L12 22l-3.5-3.5L12 15Z" />
                        </svg>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Faculties</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="faculty_dropdown" class="hidden py-2 space-y-2">
                        <li>
                            <a href="{{ route('faculty-names.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Faculties</a>
                        </li>
                        <li>
                            <a href="{{ route('faculty-staffs.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Staffs</a>
                        </li>
                        <li>
                            <a href="{{ route('faculty-banners.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Banners</a>
                        </li>
                        <li>
                            <a href="{{ route('faculty-posts.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Posts</a>
                        </li>
                        <li>
                            <a href="{{ route('faculty-categories.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Post
                                Categories</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100
                        {{ request()->is('center-names*') ||
                        request()->is('center-staffs*') ||
                        request()->is('center-banners*') ||
                        request()->is('center-posts*') ||
                        request()->is('center-categories*')
                            ? 'bg-slate-300 rounded-lg'
                            : '' }}
                        "
                        aria-controls="center_dropdown" data-collapse-toggle="center_dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-component">
                            <path d="M5.5 8.5 9 12l-3.5 3.5L2 12l3.5-3.5Z" />
                            <path d="m12 2 3.5 3.5L12 9 8.5 5.5 12 2Z" />
                            <path d="M18.5 8.5 22 12l-3.5 3.5L15 12l3.5-3.5Z" />
                            <path d="m12 15 3.5 3.5L12 22l-3.5-3.5L12 15Z" />
                        </svg>
                        <span
                            class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Centers/Divisions/IO</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="center_dropdown" class="hidden py-2 space-y-2">
                        <li>
                            <a href="{{ route('center-names.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Centers/Divisions/IO</a>
                        </li>
                        <li>
                            <a href="{{ route('center-staffs.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Staffs</a>
                        </li>
                        <li>
                            <a href="{{ route('center-banners.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Banners</a>
                        </li>
                        <li>
                            <a href="{{ route('center-posts.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Posts</a>
                        </li>
                        <li>
                            <a href="{{ route('center-categories.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Post
                                Categories</a>
                        </li>
                    </ul>
                </li>
                {{-- <li>
                    <a href="{{ route('faculty-sections.index') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Faculty Section</span>
                    </a>
                </li> --}}
                {{-- <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100
                        {{ request()->is('faculty-division*') || request()->is('faculty-division-category*') ? 'bg-slate-300 rounded-lg' : ''  }}
                        "
                        aria-controls=">divison_dropdown" data-collapse-toggle=">divison_dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-split"><path d="M16 3h5v5"/><path d="M8 3H3v5"/><path d="M12 22v-8.3a4 4 0 0 0-1.172-2.872L3 3"/><path d="m15 9 6-6"/></svg>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Divisions / Center</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id=">divison_dropdown" class="hidden py-2 space-y-2">
                        <li>
                            <a href="{{ route('faculty-division.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Divisons / Center</a>
                        </li>
                        <li>
                            <a href="{{ route('faculty-division-category.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Categories</a>
                        </li>
                    </ul>
                </li> --}}
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100
                        {{ request()->is('information*') ? 'bg-slate-300 rounded-lg' : '' }}
                        "
                        aria-controls="information-dropdown" data-collapse-toggle="information-dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-square-gantt-chart">
                            <rect width="18" height="18" x="3" y="3" rx="2" />
                            <path d="M9 8h7" />
                            <path d="M8 12h6" />
                            <path d="M11 16h5" />
                        </svg>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Information</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="information-dropdown" class="hidden py-2 space-y-2">
                        <li>
                            <a href="{{ route('informationposts.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Information
                                Posts</a>
                        </li>
                        <li>
                            <a href="{{ route('information.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Informations
                                Category</a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="{{ route('service.index') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group
                        {{ request()->is('service*') ? 'bg-slate-300 rounded-lg' : '' }}
                        ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-hand-platter">
                            <path d="M12 3V2" />
                            <path d="M5 10a7.1 7.1 0 0 1 14 0" />
                            <path d="M4 10h16" />
                            <path d="M2 14h12a2 2 0 1 1 0 4h-2" />
                            <path
                                d="m15.4 17.4 3.2-2.8a2 2 0 0 1 2.8 2.9l-3.6 3.3c-.7.8-1.7 1.2-2.8 1.2h-4c-1.1 0-2.1-.4-2.8-1.2L5 18" />
                            <path d="M5 14v7H2" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Service</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('studies.index') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group
                        {{ request()->is('studies*') ? 'bg-slate-300 rounded-lg' : '' }}
                        ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-graduation-cap">
                            <path
                                d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z" />
                            <path d="M22 10v6" />
                            <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Studies</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('library.index') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group
                        {{ request()->is('library*') ? 'bg-slate-300 rounded-lg' : '' }}
                        ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-library-big">
                            <rect width="8" height="18" x="3" y="3" rx="1" />
                            <path d="M7 3v18" />
                            <path
                                d="M20.4 18.9c.2.5-.1 1.1-.6 1.3l-1.9.7c-.5.2-1.1-.1-1.3-.6L11.1 5.1c-.2-.5.1-1.1.6-1.3l1.9-.7c.5-.2 1.1.1 1.3.6Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Library</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="{{ route('procuments.index') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group
                        {{ request()->is('procuments*') ? 'bg-slate-300 rounded-lg' : ''  }}
                        ">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Procurement</span>
                    </a>
                </li> --}}

            </ul>
        </div>
    </aside>

    <div class="sm:ml-64 h-screen overflow-hidden">
        <nav
            class="bg-white border-b border-gray-200 px-4 py-2.5 dark:bg-gray-800 dark:border-gray-700 fixed left-0 right-0 top-0 z-20">
            <div class="flex flex-wrap justify-end items-center">
                <div class="flex justify-start items-center">
                    <button data-drawer-target="sidebar-multi-level-sidebar"
                        data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar"
                        class="p-2 mr-2 text-gray-600 rounded-lg cursor-pointer md:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg aria-hidden="true" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Toggle sidebar</span>
                    </button>

                    <button type="button"
                        class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                        <span class="sr-only">Open user menu</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-user">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                            <circle cx="12" cy="7" r="4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 rounded-xl"
                        id="dropdown">
                        <div class="py-3 px-4">
                            <span
                                class="block text-sm font-semibold text-gray-900 dark:text-white">{{ auth()->user()->name }}</span>
                            <span
                                class="block text-sm text-gray-900 truncate dark:text-white">{{ auth()->user()->email }}</span>
                        </div>
                        <ul class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
                            <li>
                                <a href="{{ route('logout') }}"
                                    class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <main class="p-4 h-[calc(100%-56px)] mt-14 overflow-y-auto">
            @yield('content')
        </main>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    {{-- <script src="https://cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '{{ asset('laravel-filemanager?type=Images') }}',
            filebrowserImageUploadUrl: '{{ asset('laravel-filemanager/upload?type=Images&_token=') }}',
            filebrowserBrowseUrl: '{{ asset('laravel-filemanager?type=Files') }}',
            filebrowserUploadUrl: '{{ asset('laravel-filemanager/upload?type=Files&_token=') }}'
        };

        CKEDITOR.replace('description', options);
    </script> --}}
    <!--<script src="{{ asset('/public/assets/ckeditor/ckeditor4/ckeditor.js') }}"></script>-->
    <script src="{{ asset('/public/assets/ckeditor/ckeditor/ckeditor.js') }}"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '{{ asset('laravel-filemanager?type=Images') }}',
            filebrowserImageUploadUrl: '{{ asset('laravel-filemanager/upload?type=Images&_token=') }}',
            filebrowserBrowseUrl: '{{ asset('laravel-filemanager?type=Files') }}',
            filebrowserUploadUrl: '{{ asset('laravel-filemanager/upload?type=Files&_token=') }}'
        };
        var areas = Array('details', 'description', 'description_kh');
        areas.forEach(function(area) {
            CKEDITOR.replace(area, options);
        });
    </script>
</body>

</html>
