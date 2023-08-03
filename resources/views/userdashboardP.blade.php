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
    <link href="{{ url('/') }}/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('/') }}/dashboard/css/sb-admin-2.min.css" rel="stylesheet">
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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/')}}">
                <div class="sidebar-brand-text mx-3">Videvo</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/')}}/userdashboard">
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
                <a class="nav-link collapsed" href="{{ url('/')}}/userdashboard/pendings">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pendings</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/')}}/userdashboard/approved">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Approved</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/')}}/userdashboard/rejected">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Rejected</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

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
                                <a class="dropdown-item" href="{{ url('/') }}/profile">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('/') }}/users/logout" data-toggle="modal" data-target="#logoutModal">
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
                        <a href="{{ url('/')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Back</a>
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
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Video</div>
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
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Audio</div>
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
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Templates</div>
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
                                    <h6 class="m-0 font-weight-bold text-primary">Pending</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div>
                                        <div id="vidform" >
                                            <div style="display: flex; flex-wrap:wrap; gap: 50px; justify-content: center;" id="vidFeed">

                                            </div>
                                        

                                        </div>
                                        <div id="audform" class="rm_hidder">
                                            <div style="display: flex; flex-wrap:wrap; gap: 50px; justify-content: center;" id="audFeed">

                                            </div>
                                            
                                        </div>
                                        <div id="tempform" class="rm_hidder">
                                            <div style="display: flex; flex-wrap:wrap; gap: 50px; justify-content: center;" id="tempFeed">

                                            </div>

                                            
                                        </div>
                                        {{-- end --}}
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
    <script>
        $(document).ready(() => {
    
            $.ajax({
            url: '{{ url('/') }}/Api/p/Video',
            method: 'GET',
            contentType: false,
            cache: false,
            processData: false,
            success:function(response)
            {
                console.log(response);
                for(x = 0; x < response.length; x++){
                var vid = response[x];
                    $('#vidFeed').append(`<div class="card" style="width: 18rem;">
  <video class="card-img-top" controls><source src="{{ url('/')}}/videos/${vid.Video}" type="video/mp4"></video>
  <div class="card-body">
    <h5 class="card-title">${vid.title}</h5>
    <p class="card-text">${vid.description}</p>
  </div>
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

            $(document).ready(() => {
                
                $.ajax({
                url: '{{ url('/') }}/Api/p/Audio',
                method: 'GET',
                contentType: false,
                cache: false,
                processData: false,
                success:function(response)
                {
                    console.log(response);
                    response.forEach(vid => {
                        $('#audFeed').append(`<div class="card" style="width: 18rem;">
  <audio class="card-img-top" controls><source src="{{ url('/')}}/audios/${vid.Audio}" type="audio/mp3"></audio>
  <div class="card-body">
    <h5 class="card-title">${vid.title}</h5>
    <p class="card-text">${vid.description}</p>
  </div>
</div>`);
                    });
                },
                error: function(response) {
                    console.log(response);
                }
                });
            
            });
            
                </script>
        <script>

            $(document).ready(() => {
                
                $.ajax({
                url: '{{ url('/') }}/Api/p/Template',
                method: 'GET',
                contentType: false,
                cache: false,
                processData: false,
                success:function(response)
                {
                    console.log(response);
                    response.forEach(vid => {
                        $('#tempFeed').append(`<div class="card" style="width: 18rem;">
  <video class="card-img-top" controls><source src="{{ url('/')}}/videos/${vid.Preview}" type="video/mp4"></audio>
  <div class="card-body">
    <h5 class="card-title">${vid.title}</h5>
    <p class="card-text">${vid.description}</p>
  </div>
</div>`);
                    });
                },
                error: function(response) {
                    console.log(response);
                }
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