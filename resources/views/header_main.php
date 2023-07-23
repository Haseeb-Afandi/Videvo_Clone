<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
    <link href="./css/home_anime.css" rel="stylesheet">

    <!-- Styles -->
    <style>

    </style>
</head>

<body>

    </div>
    <!-- HEADER STARTS HERE  !-->
    <header class="header-transparent fixed top-0 left-0 right-0 z-50 flex flex-col lg:flex">
        <div
            class="flex min-h-[3.5rem] items-center justify-between gap-2 px-4 duration-300 lg:h-16 lg:gap-0 lg:transition-all max-lg:h-full w-full">
            <div class="flex flex-1 items-center gap-3 sm:gap-4 lg:gap-8 max-lg:!gap-y-0">
                <a href="#" class="flex flex-1 items-center lg:flex-none order-0 sm:min-w-[90px]">
                    <img src="./images/logo-placeholder.png" width="200px" height="50px">
                </a>
                <div class="sengoku flex flex-1 items-center gap-3 sm:gap-4 lg:gap-8 max-lg:!gap-y-0">
                    <div class="order-1 max-sm:ml-0 ml-auto flex items-center lg:order-2 lg:ml-0 lg:pr-4">
                        <div class="relative">
                            <nav class="flex-row istock-six:flex">
                                <span class="nav-flex group relative">
                                    <a href="#"
                                        class="flex flex-1 items-center rounded-lg p-2 font-bold text-gray-900 hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
                                        Videos
                                    </a>
                                    <a href="#"
                                        class="flex flex-1 items-center rounded-lg p-2 font-bold text-gray-900 hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
                                        templates
                                    </a>
                                    <a href="#"
                                        class="flex flex-1 items-center rounded-lg p-2 font-bold text-gray-900 hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
                                        Audio
                                    </a>
                                    <a href="#"
                                        class="flex flex-1 items-center rounded-lg p-2 font-bold text-gray-900 hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
                                        Collections
                                    </a>
                                    <a href="#"
                                        class="flex flex-1 items-center rounded-lg p-2 font-bold text-gray-900 hover:bg-gray-150 xl:flex-none xl:rounded-none xl:text-white/90 xl:hover:bg-transparent xl:hover:text-white">
                                        Help
                                    </a>
                                </span>
                            </nav>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 order-2">
                        <a href="./uploadVid" class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                            UpLoad Video
</a>
                        <script>
                            function uploadToggle(){
                                document.querySelector('#uploadVid').classList.toggle('active');
                            }
                            </script>
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
    <div class="header_container">
        <div class="header_anime_background">
            <div class="anime_background_inner"></div>
        </div>
        <div class="jidai">
            <div class="z-1 container relative mx-auto flex flex-col items-center justify-center px-8">
                <h1 class="text-shadow mb-4 text-center text-4xl font-bold text-white lg:text-5xl 2xl:text-6xl">
                    Free Stock Video Footage
                </h1>
                <p class="text-shadow mb-6 text-center text-lg font-bold leading-tight text-white lg:leading-normal">
                    1 million+
                    <a href="#" class="underline hover:no-underline">stock footage clips</a>
                    ,
                    <a href="#" class="underline hover:no-underline">Motion Graphics clips</a>
                    ,
                    <a href="#" class="underline hover:no-underline">Premier Pro Templates</a>
                    ,
                    <a href="#" class="underline hover:no-underline">After Effect Templates</a>
                    ,
                    <a href="#" class="underline hover:no-underline">Royalty free music</a>
                    &
                    <a href="#" class="underline hover:no-underline">Sound effects</a>
                    all at your fingertips.
                </p>
                <div class="w-full max-w-2xl">
                    <form class="bg-white h-14 relative flex flex-1 rounded max-w-full">
                        <button type="submit"></button>
                        <div class="flex justify-center"></div>
                        <input placeholder="Search..."
                            class="h-full min-w-0 flex-1 appearance-none rounded-tr rounded-br bg-transparent pl-4 pr-10 text-gray-800 placeholder-gray-600 hover:bg-white focus:bg-white focus:outline-none">
                        <button type="submit"
                            class="w-14 h-14 absolute top-0 right-0 flex items-center justify-center rounded text-gray-900"></button>
                    </form>
                </div>
                <p class="mt-4 hidden gap-8 text-white sm:flex">
                    <a href="#" class="text-white underline hover:no-underline">
                        Videos
                    </a>
                    <a href="#" class="text-white underline hover:no-underline">
                        Popular Videos
                    </a>
                    <a href="#" class="text-white underline hover:no-underline">
                        Newest Videos
                    </a>
                </p>
            </div>
        </div>
    </div>