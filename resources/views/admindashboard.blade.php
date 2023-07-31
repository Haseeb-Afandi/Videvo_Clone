<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Videvo - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="./dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./dashboard/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <style>
        .rm_hidder{
    display: none;
    visibility: hidden;
    opacity: 0;
    transform: translate(-50%);
}
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        @if(Session::has('logedin'))
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{session::get('username')}}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{session::get('profile_img')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="./profile">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="./users/logout" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                        @endif

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4" id="vidBtn" style="cursor: pointer;">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Upload Video</div>
                                        </div>
                                        <div class="col-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4" id="audBtn" style="cursor: pointer;">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Upload Audio</div>
                                        </div>
                                        <div class="col-auto">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4" id="tempBtn" style="cursor: pointer;">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Upload Templates</div>
                                                </div>
                                                <div class="col">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Upload</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div>
                                        <div id="vidform">
                                            
                                        </div>
                                        <div id="audform" class="rm_hidder">
                                            
                                        </div>
                                        <div id="tempform" class="rm_hidder">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        
                    </div>

                    <!-- Content Row -->
                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
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
                for(x = 0; x < response.length; x++){
                var vid = response[x];
                    $('#vidform').append(`<div class="relative clip-wrapper transition-shadow duration-200">
            <a href="./video/${vid.id}" @mouseenter="showHover = true" @mouseover="showHover = true" @mouseleave="showHover = false" class="group aspect-w-16 aspect-h-9 relative flex bg-white overflow-hidden" x-data="videoThumbnail()" x-on:mouseenter="playPreview" x-on:mouseleave="stopPreview" style="-webkit-mask-image: -webkit-radial-gradient(white, black);" id="3313">
                        <img class="absolute inset-0 z-20 h-full w-full object-cover opacity-1" alt="" onerror="this.style.display=&#39;none&#39;" src="./thumbnails/${vid.thumbnail}" x-ref="thumb">
                    <video preload="none" class="absolute inset-0 z-10 h-full w-full object-cover" muted="" x-ref="video" loop="">
                                <source src="./Videos/${vid.Video}" type="video/mp4">
                                            
                        </video>
            <div class="pointer-events-none absolute !top-0 left-0 right-0 z-20 h-14 -translate-y-14 bg-gradient-to-b from-black/50 to-transparent px-4 py-2 transition-all duration-300 group-hover:translate-y-0">
                <p class="truncate text-white [text-shadow:_0_1px_0_rgb(0_0_0_/_40%)]">
                    ${vid.title}
                </p>
                                <div class="flex items-center gap-2">
                        <span class="text-white [text-shadow:_0_1px_0_rgb(0_0_0_/_40%)]">
                            1080p
                        </span>
                        <span class="text-white [text-shadow:_0_1px_0_rgb(0_0_0_/_40%)]">
                            ${vid.duration}
                        </span>
                    </div>
                        </div>
                        <div class="items-top absolute bottom-0 left-0 z-30 flex h-10 w-auto inline-flex px-4 py-2">
                                        <p class="font-bold text-white [text-shadow:_0_1px_0_rgb(0_0_0_/_40%)]">${vid.clip_type}</p>
                                </div>
                </a>
                <div class="absolute bottom-0 right-0 z-30 inline-flex w-auto items-end justify-end gap-2 px-4 py-2 transition-all duration-300 ">
                <div wire:id="mjvfGYOqHAj8Yd3SHRca" class="flex relative z-40" x-data="{ isClipInAnyUserCollection: $wire.entangle(&#39;isClipInAnyUserCollection&#39;), mode: $wire.entangle(&#39;mode&#39;), showModal: $wire.entangle(&#39;showModal&#39;), hidden: $wire.entangle(&#39;hidden&#39;), showTooltip: false}">
        <span class="relative inline-flex" x-on:mouseover="showTooltip = true" x-on:mouseleave="showTooltip = false">
            <button class="relative add-to-collection-button overflow-hidden" wire:click.stop.prevent="toggleModal()">
                <svg x-bind:class="{&#39;text-white&#39;: mode == &#39;light&#39;, &#39;not-added&#39;: !isClipInAnyUserCollection, &#39;!translate-y-0&#39;: !hidden}" x-show="!isClipInAnyUserCollection" class="fill-current h-6 w-6 text-gray-700 outline-none translate-y-8 text-white not-added !translate-y-0" xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="none" viewBox="0 0 24 24"><path d="M20 2H8c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zM8 16V4h12l.002 12H8z"></path><path d="M4 8H2v12c0 1.103.897 2 2 2h12v-2H4V8zm11-2h-2v3h-3v2h3v3h2v-3h3V9h-3z"></path></svg>            <svg x-show="isClipInAnyUserCollection" class="fill-current h-6 w-6 text-[#198ACF] outline-none" xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="none" viewBox="0 0 24 24" style="display: none;"><path d="M4 22h12v-2H4V8H2v12c0 1.103.897 2 2 2z"></path><path d="M20 2H8c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zm-2 9h-3v3h-2v-3h-3V9h3V6h2v3h3v2z"></path></svg>        </button>
            <div x-show="showTooltip" class="tooltip max-md:!hidden" style="display: none;">
        Add to Collections
    </div>
         </span>
        <div x-show="showModal" style="display: none;">
            <div class="modal-wrapper-add-to-collection flex flex-col items-center justify-center absolute bottom-0 right-[-15px] z-60 cursor-auto min-w-[300px] rounded-lg " style="transform: translateY(100%) translateY(10px);">
                <div class="flex flex-col bg-white fixed top-0 left-0 md:relative md:rounded-lg md:shadow-lg h-full md:h-auto p-4 w-full" @click.outside="showModal = false;">
                    <div class="flex justify-start relative md:justify-between items-center ">
                        <p class="text-lg font-bold text-[#2b2b2b]">Add to collection</p>
                        <a href="./my-collections/" class="ml-4 md:ml-0 text-sm text-gray-500 hover:text-gray-700">Manage</a>
                        <div class="w-10 h-10 flex items-center justify-center absolute top-0 right-0 md:hidden close-modal w-6 text-2xl text-gray-600 leading-4 font-bold text-right" @click.stop.prevent="showModal = false; window.clipActions?.closeAllModals();"></div>
                    </div>
                    <div class="flex justify-start w-full">
                        <div wire:id="8xGIebgqmyIDwhr4zso0" class="flex py-2 relative h-[56px] item-center" x-data="{showForm: false, showResponse: false, timeoutToggle: false}">
        <template x-if="showResponse"></template>
        <div class="cursor-pointer text-base text-[#1b95e0] bold h-full order-2 flex items-center" @click="showForm = !showForm" x-show="!showForm">
            <svg class="fill-current w-7 h-7 mr-[10px]" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
        <path fill="#1B95E0" fill-rule="evenodd" d="M14 7c.552 0 1 .448 1 1v5h5c.552 0 1 .448 1 1s-.448 1-1 1h-5v5c0 .552-.448 1-1 1s-1-.448-1-1v-5H8c-.552 0-1-.448-1-1s.448-1 1-1h5V8c0-.552.448-1 1-1z"></path>
    </svg>        Create new collection
        </div>
        <form x-show="showForm" class="flex space-between items-center border border-[#1b95e0] justify-items-stretch rounded-sm overflow-hidden h-full" wire:submit.prevent="addUserCollection" style="display: none;">
            <input class="px-2 border-0 outline-0 h-full" placeholder="Add collection name" type="text" wire:model="collectionName">
            <button type="submit" @click="window.clipActions?.closeAllModals(); showResponse = true; setTimeout(() =&gt; {showResponse = false; }, 3000); showForm = !showForm" class="h-full leading-10 bg-gray-100 text-blue-600 text-base font-bold text-center min-w-[60px]">Add</button>
        </form>
    
    </div>
    <!-- Livewire Component wire-end:8xGIebgqmyIDwhr4zso0 -->                </div>
                    <div class="flex flex-col grow overflow-auto relative md:max-h-[calc(46px*3.5)] max-md:max-h[calc(100vh-100px)] transition duration-150" x-data="{selectedCollections:  [],}">
                                            <div class="m:h-[80px] flex items-center justify-between fixed py-3 md:py-3 left-0 px-4 bottom-0 left-0 w-full md:!hidden" style="box-shadow: 0 -2px 0 0 rgb(0 0 0 / 10%);">
                            <a x-on:click="showModal = false; window.clipActions?.closeAllModals();" class="pt-3 pb-3 pr-6 pl-6 font-bold text-base rounded-lg text-blue-600 bg-[#ececec]">Cancel</a>
                            <a x-on:click="showModal = false; window.clipActions?.closeAllModals(); $wire.toggleClipInUserCollections(selectedCollections)" class="pt-3 pb-3 pr-6 pl-6 font-bold text-base rounded-lg bg-blue-600 text-white">Apply</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Livewire Component wire-end:mjvfGYOqHAj8Yd3SHRca -->            <div wire:id="VuzUOgI5NJVStHuDVtfQ" class="flex" x-data="{ isFavorite: $wire.entangle(&#39;isFavorite&#39;), mode: $wire.entangle(&#39;mode&#39;), hidden: $wire.entangle(&#39;hidden&#39;), showTooltip: false }">
        <span class="relative inline-flex" x-on:mouseover="showTooltip = true" x-on:mouseleave="showTooltip = false">
            <button class="text-gray-700 hover:text-gray-900 overflow-hidden toggle-favorite" wire:key="clip-3313" wire:click.stop.prevent="toggleFavorite();">
                <svg x-bind:class="{&#39;text-white&#39;: mode == &#39;light&#39;, &#39;not-added&#39;: !isFavorite, &#39;!translate-y-0&#39;: !hidden}" x-show="!isFavorite" class="fill-current h-6 w-6 outline-none translate-y-8 text-white not-added !translate-y-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" fill="none"><path d="M5.40956 2.51538C4.45258 1.76408 3.08107 1.83357 2.20944 2.72795C1.25976 3.7024 1.26439 5.28574 2.2182 6.26443L5.74895 9.8873C5.8954 10.0376 6.13284 10.0376 6.27929 9.8873L9.7917 6.28538C10.7392 5.30775 10.7362 3.72885 9.7822 2.74999C8.90375 1.84862 7.52809 1.77191 6.57265 2.52393C6.48883 2.58991 6.40825 2.66226 6.33151 2.74099L5.99605 3.08587L5.65599 2.73693C5.57761 2.65651 5.49525 2.58265 5.40956 2.51538ZM7.04767 3.43893C7.60289 2.86945 8.49943 2.86653 9.06605 3.44793C9.64336 4.04031 9.64309 5.00077 9.07454 5.58846L9.0736 5.58943L6.01425 8.72674L2.93435 5.56648C2.3556 4.97264 2.35777 4.00853 2.92559 3.42589C3.4791 2.85794 4.37486 2.85516 4.93984 3.43488L5.2799 3.78381C5.46824 3.97706 5.72669 4.086 5.99654 4.08587C6.26638 4.08574 6.52472 3.97655 6.71288 3.78312L7.04767 3.43893Z" fill="currentColor"></path></svg>            <svg x-show="isFavorite" class="fill-current h-6 w-6 text-red-700 outline-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" fill="none" style="display: none;"><path d="M5.65599 2.73693C4.70219 1.75824 3.15912 1.75349 2.20944 2.72795C1.25976 3.7024 1.26439 5.28574 2.2182 6.26443L5.74895 9.8873C5.8954 10.0376 6.13284 10.0376 6.27929 9.8873L9.7917 6.28538C10.7392 5.30775 10.7362 3.72885 9.7822 2.74999C8.82669 1.76955 7.28289 1.76479 6.33151 2.74099L5.99605 3.08587L5.65599 2.73693Z" fill="currentColor"></path></svg>        </button>
            <div x-show="showTooltip" class="tooltip max-md:!hidden" style="display: none;">
        Add to Favorites
    </div>
         </span>
    </div>
    
    <!-- Livewire Component wire-end: -->        </div>
        </div>`);
    
        // var canvas = document.getElementById(img);
        // var video = document.getElementById(video);
        // canvas.getContext('2d').drawImage(video, 0, 0, video.videoWidth, video.videoHeight);
    
        
    
        };
            },
            error: function(response) {
                console.log(response);
            }
            });
    
        });
    </script>
    <script>
        $(document).ready(()=>{

            var vidbtn = document.querySelector('#vidBtn');
            var audbtn = document.querySelector('#audBtn');
            var tempbtn = document.querySelector('#tempBtn');
            var vidform = document.querySelector('#vidform');
            var audform = document.querySelector('#audform');
            var tempform = document.querySelector('#tempform');

            vidbtn.addEventListener('click', ()=>{
                vidform.classList.remove('rm_hidder');
                audform.classList.add('rm_hidder');
                tempform.classList.add('rm_hidder');

            });
            audbtn.addEventListener('click', ()=>{
                audform.classList.remove('rm_hidder');
                vidform.classList.add('rm_hidder');
                tempform.classList.add('rm_hidder');

            });
            tempbtn.addEventListener('click', ()=>{
                tempform.classList.remove('rm_hidder');
                audform.classList.add('rm_hidder');
                vidform.classList.add('rm_hidder');

            });

        });
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="/dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/dashboard/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/dashboard/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/dashboard/js/demo/chart-area-demo.js"></script>
    <script src="/dashboard/js/demo/chart-pie-demo.js"></script>

</body>

</html>