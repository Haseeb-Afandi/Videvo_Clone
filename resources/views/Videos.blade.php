<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Videvo_Clone</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="./css/main.css" rel="stylesheet">
    <link href="./css/Video.css" rel="stylesheet">
</head>

<body class="flex min-h-screen flex-col overflow-y-scroll font-custom antialiased scroll-smooth">
    <header class="fixed top-0 left-0 right-0 z-50 flex flex-col lg:flex">
        <div
            class="flex min-h-[3.5rem] items-center justify-between gap-2 px-4 duration-300 lg:h-16 lg:gap-0 lg:transition-all max-lg:h-full w-full">
            <div class="flex flex-1 items-center gap-3 sm:gap-4 lg:gap-8 max-lg:!gap-y-0">
                <a href="#" class="flex flex-1 items-center lg:flex-none order-0 sm:min-w-[90px]">
                    <img src="./images/logo.svg" width="90px" height="20px">
                </a>
                <div class="max-navbar:hidden max-w-xl flex-1 items-center py-2 flex order-0">
                    <form class="bg-gray-150 h-9 relative flex flex-1 rounded max-w-full">
                        <div class="flex justify-center">
                            <div class="relative">
                                <button type="button"
                                    class="bg-gray-200 border-gray-300 flex h-full items-center gap-2 whitespace-nowrap rounded-tl rounded-bl border-r pl-3 pr-2 font-bold text-gray-900">
                                    <span>All Videos</span>
                                </button>
                            </div>
                        </div>
                        <input id="searchInput" type="search"
                            class="h-full min-w-0 flex-1 appearance-none rounded-tr rounded-br pl-4 pr-10 text-gray-800 placeholder-gray-600 hover:bg-white focus:bg-white focus:outline-none"
                            placeholder="Search..." name="q" value="" autocomplete="off">
                    </form>
                </div>
                <div class="sengoku flex flex-1 items-center gap-3 sm:gap-4 lg:gap-8 max-lg:!gap-y-0">
                    <div class="sen2">
                        <div class="">
                            <nav class=""">
                                <span class=" sen3">
                                <a href="#"
                                    class="flex flex-1 items-center rounded-lg p-2 font-bold text-white hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
                                    Videos
                                    <svg alt="caret icon"
                                        class="fill-current ml-1 h-5 w-5 rotate-90 fill-current opacity-60 group-hover:opacity-100"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512">
                                        <defs></defs>
                                        <path
                                            d="M226.6 397l-92.3 92.3a25 25 0 0035.4 35.4l110-110a25 25 0 000-35.4l-110-110a25 25 0 00-35.4 35.4l92.3 92.3z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="#"
                                    class="flex flex-1 items-center rounded-lg p-2 font-bold text-white hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
                                    templates
                                    <svg alt="caret icon"
                                        class="fill-current ml-1 h-5 w-5 rotate-90 fill-current opacity-60 group-hover:opacity-100"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512">
                                        <defs></defs>
                                        <path
                                            d="M226.6 397l-92.3 92.3a25 25 0 0035.4 35.4l110-110a25 25 0 000-35.4l-110-110a25 25 0 00-35.4 35.4l92.3 92.3z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="#"
                                    class="flex flex-1 items-center rounded-lg p-2 font-bold text-white hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
                                    Audio
                                    <svg alt="caret icon"
                                        class="fill-current ml-1 h-5 w-5 rotate-90 fill-current opacity-60 group-hover:opacity-100"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512">
                                        <defs></defs>
                                        <path
                                            d="M226.6 397l-92.3 92.3a25 25 0 0035.4 35.4l110-110a25 25 0 000-35.4l-110-110a25 25 0 00-35.4 35.4l92.3 92.3z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="#"
                                    class="flex flex-1 items-center rounded-lg p-2 font-bold text-white hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
                                    Collections
                                </a>
                                <a href="#"
                                    class="flex flex-1 items-center rounded-lg p-2 font-bold text-white hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
                                    Help
                                </a>
                                </span>
                            </nav>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 order-2">
                        <a href="#"
                            class="hidden rounded-lg border-2 border-white/50 py-1 px-3 font-bold text-white hover:border-white sm:block">
                            Join Videvo
                        </a>
                        <a href="./Log-in" class="rounded-lg py-1 px-3 font-bold text-white/75 hover:text-white">Log
                            In</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="flex-1 cont1">
        <div class="relative z-40 mt-14 px-4 pt-3 lg:mt-16 lg:px-12 lg:pt-6">
            <!-- Browse categories -->
            <div class="hidden items-center gap-2 sm:flex">
                <div class="relative z-30">
                    <!-- Button -->
                    <button type="button"
                        class="flex h-full items-center gap-2 whitespace-nowrap rounded bg-gray-200 py-2 px-4 font-bold text-gray-900 hover:bg-blue-400 hover:text-white"
                        aria-expanded="false" aria-controls="dropdown-button-2">
                        Browse Categories <svg class="fill-current h-4 w-4 rotate-90 opacity-75"
                            xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512">
                            <defs></defs>
                            <path
                                d="M226.6 397l-92.3 92.3a25 25 0 0035.4 35.4l110-110a25 25 0 000-35.4l-110-110a25 25 0 00-35.4 35.4l92.3 92.3z">
                            </path>
                        </svg> </button>

                    <!-- Panel -->
                    <div x-ref="panel" x-show="open" x-transition.origin.top.left=""
                        x-on:click.outside="close($refs.button)" :id="$id('dropdown-button')"
                        class="absolute left-0 mt-2 rounded-md bg-white p-2 shadow-md" id="dropdown-button-2"
                        style="display: none;">
                        <div class="grid w-[1040px] grid-cols-5">
                            <a href="https://www.videvo.net/stock-video-footage/culture/"
                                class="truncate rounded px-4 py-1.5 text-left text-gray-800 hover:bg-gray-150">
                                Culture
                            </a>
                            <a href="https://www.videvo.net/stock-video-footage/abstract/"
                                class="truncate rounded px-4 py-1.5 text-left text-gray-800 hover:bg-gray-150">
                                Abstract
                            </a>
                            <a href="https://www.videvo.net/stock-video-footage/city/"
                                class="truncate rounded px-4 py-1.5 text-left text-gray-800 hover:bg-gray-150">
                                City
                            </a>
                            <a href="https://www.videvo.net/stock-video-footage/fitness/"
                                class="truncate rounded px-4 py-1.5 text-left text-gray-800 hover:bg-gray-150">
                                Fitness
                            </a>
                            <a href="https://www.videvo.net/stock-video-footage/sports/"
                                class="truncate rounded px-4 py-1.5 text-left text-gray-800 hover:bg-gray-150">
                                Sports
                            </a>
                            <a href="https://www.videvo.net/stock-video-footage/religion/"
                                class="truncate rounded px-4 py-1.5 text-left text-gray-800 hover:bg-gray-150">
                                Religion
                            </a>
                            <a href="https://www.videvo.net/stock-video-footage/science/"
                                class="truncate rounded px-4 py-1.5 text-left text-gray-800 hover:bg-gray-150">
                                Science
                            </a>
                            <a href="https://www.videvo.net/stock-video-footage/space/"
                                class="truncate rounded px-4 py-1.5 text-left text-gray-800 hover:bg-gray-150">
                                Space
                            </a>
                            <a href="https://www.videvo.net/stock-video-footage/transport/"
                                class="truncate rounded px-4 py-1.5 text-left text-gray-800 hover:bg-gray-150">
                                Transport
                            </a>
                            <a href="https://www.videvo.net/stock-video-footage/technology/"
                                class="truncate rounded px-4 py-1.5 text-left text-gray-800 hover:bg-gray-150">
                                Technology
                            </a>
                            <a href="https://www.videvo.net/stock-video-footage/entertainment/"
                                class="truncate rounded px-4 py-1.5 text-left text-gray-800 hover:bg-gray-150">
                                Entertainment
                            </a>
                            <a href="https://www.videvo.net/stock-video-footage/food/"
                                class="truncate rounded px-4 py-1.5 text-left text-gray-800 hover:bg-gray-150">
                                Food
                            </a>
                            <a href="https://www.videvo.net/stock-video-footage/family/"
                                class="truncate rounded px-4 py-1.5 text-left text-gray-800 hover:bg-gray-150">
                                Family
                            </a>
                            <a href="https://www.videvo.net/stock-video-footage/holiday/"
                                class="truncate rounded px-4 py-1.5 text-left text-gray-800 hover:bg-gray-150">
                                Holiday
                            </a>
                            <a href="https://www.videvo.net/stock-video-footage/military/"
                                class="truncate rounded px-4 py-1.5 text-left text-gray-800 hover:bg-gray-150">
                                Military
                            </a>
                            <a href="https://www.videvo.net/stock-video-footage/green-screen/"
                                class="truncate rounded px-4 py-1.5 text-left text-gray-800 hover:bg-gray-150">
                                Green Screen
                            </a>
                            <a href="https://www.videvo.net/stock-video-footage/business/"
                                class="truncate rounded px-4 py-1.5 text-left text-gray-800 hover:bg-gray-150">
                                Business
                            </a>
                            <a href="https://www.videvo.net/free-motion-graphics/"
                                class="truncate rounded px-4 py-1.5 text-left text-gray-800 hover:bg-gray-150">
                                Animated Backgrounds
                            </a>
                            <a href="https://www.videvo.net/stock-video-footage/people/"
                                class="truncate rounded px-4 py-1.5 text-left text-gray-800 hover:bg-gray-150">
                                People
                            </a>
                            <a href="https://www.videvo.net/stock-video-footage/nature/"
                                class="truncate rounded px-4 py-1.5 text-left text-gray-800 hover:bg-gray-150">
                                Nature
                            </a>
                            <a href="https://www.videvo.net/stock-video-footage/medical/"
                                class="truncate rounded px-4 py-1.5 text-left text-gray-800 hover:bg-gray-150">
                                Medical
                            </a>
                            <a href="https://www.videvo.net/stock-video-footage/animals/"
                                class="truncate rounded px-4 py-1.5 text-left text-gray-800 hover:bg-gray-150">
                                Animals
                            </a>
                            <a href="https://www.videvo.net/stock-video-footage/industry/"
                                class="truncate rounded px-4 py-1.5 text-left text-gray-800 hover:bg-gray-150">
                                Industry
                            </a>
                            <a href="https://www.videvo.net/stock-video-footage/vfx/"
                                class="truncate rounded px-4 py-1.5 text-left text-gray-800 hover:bg-gray-150">
                                VFX
                            </a>
                        </div>
                    </div>
                </div>
                <hr class="h-6 w-px border-r border-gray-200">
                <div class="flex items-center gap-2 overflow-x-auto">
                    <a href="#"
                        class="shrink-0 rounded bg-gray-200 py-2 px-4 text-gray-900 hover:bg-blue-400 hover:text-white">Culture</a>
                    <a href="#"
                        class="shrink-0 rounded bg-gray-200 py-2 px-4 text-gray-900 hover:bg-blue-400 hover:text-white">Abstract</a>
                    <a href="#"
                        class="shrink-0 rounded bg-gray-200 py-2 px-4 text-gray-900 hover:bg-blue-400 hover:text-white">City</a>
                    <a href="#"
                        class="shrink-0 rounded bg-gray-200 py-2 px-4 text-gray-900 hover:bg-blue-400 hover:text-white">Fitness</a>
                    <a href="#"
                        class="shrink-0 rounded bg-gray-200 py-2 px-4 text-gray-900 hover:bg-blue-400 hover:text-white">Sports</a>
                    <a href="#"
                        class="shrink-0 rounded bg-gray-200 py-2 px-4 text-gray-900 hover:bg-blue-400 hover:text-white">Religion</a>
                    <a href="#"
                        class="shrink-0 rounded bg-gray-200 py-2 px-4 text-gray-900 hover:bg-blue-400 hover:text-white">Science</a>
                    <a href="#"
                        class="shrink-0 rounded bg-gray-200 py-2 px-4 text-gray-900 hover:bg-blue-400 hover:text-white">Space</a>
                    <a href="#"
                        class="shrink-0 rounded bg-gray-200 py-2 px-4 text-gray-900 hover:bg-blue-400 hover:text-white">Transport</a>
                    <a href="#"
                        class="shrink-0 rounded bg-gray-200 py-2 px-4 text-gray-900 hover:bg-blue-400 hover:text-white">Technology</a>
                </div>
            </div>
            <hr class="mt-6">
        </div>
        <div>
            <div class="relative z-30 px-4 pt-3 lg:px-12 lg:pt-6">
                <div class="flex w-full justify-end">
                </div>
                <div class="max-w-full py-5">
                    <div class="mb-1 flex justify-between">
                        <p class="text-sm font-semibold text-gray-500 istock-event">Sponsored by iStock</p>
                        <div>
                            <p class="font-semibold text-orange-500 underline cursor-pointer">Save 20% on iStock</p>
                        </div>
                    </div>
                    <div class="flex max-md:flex-nowrap" x-data="viewmore">
                        <div
                            class="flex w-full justify-between gap-x-3 max-md:snap-x max-md:snap-mandatory max-md:overflow-x-scroll">
                            <div class="items1">
                                <Video loop preload="none">
                                    <source src="./videos/169028789064bfbf128aca41.35114151.mp4" type="video/mp4">
                                </Video>
                            </div>
                            <div class="items1">
                                <Video loop preload="none">
                                    <source src="./videos/169028789064bfbf128aca41.35114151.mp4" type="video/mp4">
                                </Video>
                            </div>
                            <div class="items1">
                                <Video loop preload="none">
                                    <source src="./videos/169028789064bfbf128aca41.35114151.mp4" type="video/mp4">
                                </Video>
                            </div>
                            <div class="items1">
                                <Video loop preload="none">
                                    <source src="./videos/169028789064bfbf128aca41.35114151.mp4" type="video/mp4">
                                </Video>
                            </div>
                            <div class="items1">
                                <Video loop preload="none">
                                    <source src="./videos/169028789064bfbf128aca41.35114151.mp4" type="video/mp4">
                                </Video>
                            </div>
                            <div class="items1">
                                <Video loop preload="none">
                                    <source src="./videos/169028789064bfbf128aca41.35114151.mp4" type="video/mp4">
                                </Video>
                                <a href="#" target="_blank"
                                    class="view_more inset-0 z-20 flex items-center justify-center bg-black/75 hover:bg-black/90">
                                    <span class="flex items-center text-xl font-bold text-white">
                                        View more
                                        <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="-49 141 512 512">
                                            <defs></defs>
                                            <path
                                                d="M226.6 397l-92.3 92.3a25 25 0 0035.4 35.4l110-110a25 25 0 000-35.4l-110-110a25 25 0 00-35.4 35.4l92.3 92.3z">
                                            </path>
                                        </svg> </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative flex w-full px-4 lg:px-12">
            <div class="relative flex-1 pt-6 pb-6 w-full">
                <div>
                    <h1 class="capitalize text-2xl font-bold text-gray-900">
                        All stock video footage
                    </h1>
                    <p class="mb-2 text-gray-700" number-of-results="1,552,285">
                        1552285 clips
                    </p>
                    <div class="flex justify-between">
                        <div class="flex justify-between items-center overflow-hidden relative">
                            <button
                                class="flex h-9 items-center overflow-hidden rounded bg-blue-400 text-white min-w-[136px]">
                                <span class="flex h-9 w-9 items-center justify-center bg-blue-300">
                                    <span class="block">
                                        <svg class="fill-current h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="-49 141 512 512">
                                            <defs></defs>
                                            <path
                                                d="M226.6 397l-92.3 92.3a25 25 0 0035.4 35.4l110-110a25 25 0 000-35.4l-110-110a25 25 0 00-35.4 35.4l92.3 92.3z">
                                            </path>
                                        </svg>
                                    </span>
                                </span>
                                <span class="flex h-full items-center px-4 font-bold">
                                    <svg class="fill-current mr-2 h-4 w-4 text-blue-100" viewBox="0 0 16 16"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.98528 2.5316H15.1342C15.6124 2.5316 16 2.91924 16 3.3974C16 3.87557 15.6124 4.2632 15.1342 4.2632H6.98528C6.62784 5.27093 5.66549 5.9948 4.5368 5.9948C3.4081 5.9948 2.44571 5.27093 2.08831 4.2632H0.865801C0.387636 4.2632 0 3.87557 0 3.3974C0 2.91924 0.387636 2.5316 0.865801 2.5316H2.08831C2.44575 1.52388 3.4081 0.799999 4.5368 0.799999C5.66549 0.799999 6.62784 1.52388 6.98528 2.5316ZM3.671 3.3974C3.671 3.8748 4.05939 4.2632 4.5368 4.2632C5.0142 4.2632 5.4026 3.8748 5.4026 3.3974C5.4026 2.92 5.0142 2.5316 4.5368 2.5316C4.05939 2.5316 3.671 2.92 3.671 3.3974ZM6.98528 12.2286H15.1342C15.6124 12.2286 16 12.6162 16 13.0944C16 13.5725 15.6124 13.9602 15.1342 13.9602H6.98528C6.62784 14.9679 5.66549 15.6918 4.5368 15.6918C3.4081 15.6918 2.44571 14.9679 2.08831 13.9602H0.865801C0.387636 13.9602 0 13.5725 0 13.0944C0 12.6162 0.387636 12.2286 0.865801 12.2286H2.08831C2.44575 11.2208 3.4081 10.497 4.5368 10.497C5.66549 10.497 6.62788 11.2208 6.98528 12.2286ZM3.671 13.0944C3.671 13.5718 4.05939 13.9602 4.5368 13.9602C5.0142 13.9602 5.4026 13.5718 5.4026 13.0944C5.4026 12.617 5.0142 12.2286 4.5368 12.2286C4.05939 12.2286 3.671 12.617 3.671 13.0944ZM15.1342 7.38009H13.9117C13.5543 6.37236 12.5919 5.64848 11.4632 5.64848C10.3345 5.64848 9.37216 6.37236 9.01472 7.38009H0.865801C0.387636 7.38009 0 7.76772 0 8.24589C0 8.72405 0.387636 9.11169 0.865801 9.11169H9.01472C9.37212 10.1194 10.3345 10.8433 11.4632 10.8433C12.5919 10.8433 13.5543 10.1194 13.9117 9.11169H15.1342C15.6124 9.11169 16 8.72405 16 8.24589C16 7.76772 15.6124 7.38009 15.1342 7.38009ZM11.4632 9.11169C10.9858 9.11169 10.5974 8.72329 10.5974 8.24589C10.5974 7.76848 10.9858 7.38009 11.4632 7.38009C11.9406 7.38009 12.329 7.76848 12.329 8.24589C12.329 8.72329 11.9406 9.11169 11.4632 9.11169Z">
                                        </path>
                                    </svg>
                                    Filters
                                </span>
                            </button>
                            <div class="overflow-auto flex items-center gap-x-2 ml-2">

                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <p class="px-2 text-gray-600">Sort</p>
                            <div class="relative text-gray-500">
                                <div>
                                    <div
                                        class="flex items-center rounded border border-gray-300 py-1.5 px-3 font-bold text-gray-700">
                                        Popular
                                        <svg class="fill-current ml-1 h-4 w-4 rotate-90"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="-49 141 512 512">
                                            <defs></defs>
                                            <path
                                                d="M226.6 397l-92.3 92.3a25 25 0 0035.4 35.4l110-110a25 25 0 000-35.4l-110-110a25 25 0 00-35.4 35.4l92.3 92.3z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container_cover">
            <div id="vid_cont" class="container_main">
                <div class="items">
                    <Video loop preload="none">
                        <source src="./videos/169030444564bfffbda9cf70.32707743.mp4" type="video/mp4">
                    </Video>
                </div>
            </div>
        </div>
        </div>
    </main>
    <script>
        //         function videohover(ele) {
        //             var cip = ele.hover( hoverVideo, hideVideo );

        // function hoverVideo(e) {  
        //     $('video', this).get(0).play(); 
        // }

        // function hideVideo(e) {
        //     $('video', this).get(0).pause(); 
        // }
        //         }
       
    </script>
    <script>
        $(document).ready(() => {
    
            $.ajax({
            url: './Api/Video',
            method: 'GET',
            contentType: false,
            cache: false,
            processData: false,
            success:function(response)
            {
                console.log(response);
                response.forEach(vid => {
                    $('#vid_cont').append('<div class="items"><Video loop preload="none"><source src="./videos/' + vid.Video +'" type="video/mp4"></Video><p class="videotitle">' + vid.title + '</p></div>');
                });
            },
            error: function(response) {
                console.log(response);
            }
            });
    
        });

        $(document).ready(() => {

const videos = document.querySelectorAll('video');

videos.forEach(video => {
video.addEventListener('mouseenter', () => {
video.play();
});

video.addEventListener('mouseleave', () => {
video.pause();
video.currentTime = 0;
});
});

});
    </script>
    @include('footer')