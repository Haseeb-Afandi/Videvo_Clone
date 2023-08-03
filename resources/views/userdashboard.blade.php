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
                                        <div id="vidform" class="justify-content-center">
                                            <div class="col-lg-5">
                                                <div class="contact-wrap w-100 p-md-5 p-4">
                                                <form action="{{ route('video.post') }}" method="POST" enctype="multipart/form-data" id="video-form">
                                                    @csrf

                                                <div class="row">
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label >Video</label>
                                                    <input class="form-control" type="file" id="Video" name="Video">
                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Thumbnail </label>
                                                    <input class="form-control" type="file" id="Thumbnail" name="Thumbnail">                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" id="title" name="title" placeholder="Title">
                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" id="description" name="description" placeholder="Description">
                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Type: </label>
                                                    <select class="slct" name="type" required>
                                                        <option value="4K & HD Footage">Footage</option>
                                                        <option value="Motion Graphics">Motion Graphics</option>
                                                    </select>                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Clip Type:  </label>
                                                    <select class="slct" name="clip_type" required>
                                                        <option value="Free">Free Clip</option>
                                                        <option value="Premium">Premium Clip</option>
                                                    </select>                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Category:  </label>
                                                    <select class="slct" name="Category" required>
                                                        <option value="Culture">Culture</option>
                                                        <option value="Religion">Religion</option>
                                                        <option value="Entertainment">Entertainment</option>
                                                        <option value="Green Screen">Green Screen</option>
                                                        <option value="medical">medical</option>
                                                        <option value="Abstract">Abstract</option>
                                                        <option value="Science">Science</option>
                                                        <option value="Food">Food</option>
                                                        <option value="Business">Business</option>
                                                        <option value="Animals">Animals</option>
                                                        <option value="City">City</option>
                                                        <option value="Space">Space</option>
                                                        <option value="family">family</option>
                                                        <option value="Animated backgrounds">Animated backgrounds</option>
                                                        <option value="Industry">Industry</option>
                                                        <option value="Fitness">Fitness</option>
                                                        <option value="Transport">Transport</option>
                                                        <option value="Holiday">Holiday</option>
                                                        <option value="People">People</option>
                                                        <option value="VFX">VFX</option>
                                                        <option value="Sports">Sports</option>
                                                        <option value="Technology">Technology</option>
                                                        <option value="Military">Military</option>
                                                        <option value="Nature">Nature</option>
                                                    </select>                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Category2:  </label>
                                                    <select class="slct" name="Category2">
                                                        <option value="Culture">Culture</option>
                                                        <option value="Religion">Religion</option>
                                                        <option value="Entertainment">Entertainment</option>
                                                        <option value="Green Screen">Green Screen</option>
                                                        <option value="medical">medical</option>
                                                        <option value="Abstract">Abstract</option>
                                                        <option value="Science">Science</option>
                                                        <option value="Food">Food</option>
                                                        <option value="Business">Business</option>
                                                        <option value="Animals">Animals</option>
                                                        <option value="City">City</option>
                                                        <option value="Space">Space</option>
                                                        <option value="family">family</option>
                                                        <option value="Animated backgrounds">Animated backgrounds</option>
                                                        <option value="Industry">Industry</option>
                                                        <option value="Fitness">Fitness</option>
                                                        <option value="Transport">Transport</option>
                                                        <option value="Holiday">Holiday</option>
                                                        <option value="People">People</option>
                                                        <option value="VFX">VFX</option>
                                                        <option value="Sports">Sports</option>
                                                        <option value="Technology">Technology</option>
                                                        <option value="Military">Military</option>
                                                        <option value="Nature">Nature</option>
                                                    </select>                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="textarea" name="tags" class="form-control input-textarea" placeholder="Enter tags seperrated by a comma">
                                                </div>
                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                 <div class="form-group">
                                                <input type="submit" value="Upload" class="btn btn-primary">
                                                <div class="submitting"></div>
                                                </div>
                                                </div>
                                                </div>
                                                </form>
                                                </div>
                                                </div>
                                            {{-- end --}}
                                            
                                        </div>
                                        <div id="audform" class="rm_hidder">
                                            <div class="col-lg-5">
                                                <div class="contact-wrap w-100 p-md-5 p-4">
                                                <form action="{{ route('Audio.post') }}" method="POST" enctype="multipart/form-data"id="video-form">
                                                    @csrf

                                                <div class="row">
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label >Audio</label>
                                                    <input class="form-control" type="file" id="Video" name="Video">
                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Thumbnail </label>
                                                    <input class="form-control" type="file" id="Thumbnail" name="Thumbnail">                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" id="title" name="title" placeholder="Title">
                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" id="description" name="description" placeholder="Description">
                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Type: </label>
                                                    <select class="slct" name="type" required>
                                                        <option value="Music">Music</option>
                                                        <option value="Sound Effects">Sound Effects</option>
                                                    </select>                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Audio Type:  </label>
                                                    <select class="slct" name="clip_type" required>
                                                        <option value="Free">Free Clip</option>
                                                        <option value="Premium">Premium Clip</option>
                                                    </select>                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Category:  </label>
                                                    <select class="slct" name="Category" required>
                                                        <option value="Blues">Blues</option>
                                                        <option value="Children">Children</option>
                                                        <option value="Classic Tv & Film">Classic TV & Film</option>
                                                        <option value="Classical">Clasical</option>
                                                        <option value="medical">medical</option>
                                                        <option value="Abstract">Abstract</option>
                                                        <option value="Science">Science</option>
                                                        <option value="Food">Food</option>
                                                        <option value="Business">Business</option>
                                                        <option value="Animals">Animals</option>
                                                        <option value="City">City</option>
                                                        <option value="Space">Space</option>
                                                        <option value="family">family</option>
                                                        <option value="Animated backgrounds">Animated backgrounds</option>
                                                        <option value="Industry">Industry</option>
                                                        <option value="Fitness">Fitness</option>
                                                        <option value="Transport">Transport</option>
                                                        <option value="Holiday">Holiday</option>
                                                        <option value="People">People</option>
                                                        <option value="VFX">VFX</option>
                                                        <option value="Sports">Sports</option>
                                                        <option value="Technology">Technology</option>
                                                        <option value="Military">Military</option>
                                                        <option value="Nature">Nature</option>
                                                    </select>                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Category2:  </label>
                                                    <select class="slct" name="Category2">
                                                        <option value="Happy">Happy</option>
                                                        <option value="Confident">Confident</option>
                                                        <option value="Optimistic">Optimistic</option>
                                                        <option value="Determined">Determined</option>
                                                        <option value="medical">medical</option>
                                                        <option value="Abstract">Abstract</option>
                                                        <option value="Science">Science</option>
                                                        <option value="Food">Food</option>
                                                        <option value="Business">Business</option>
                                                        <option value="Animals">Animals</option>
                                                        <option value="City">City</option>
                                                        <option value="Space">Space</option>
                                                        <option value="family">family</option>
                                                        <option value="Animated backgrounds">Animated backgrounds</option>
                                                        <option value="Industry">Industry</option>
                                                        <option value="Fitness">Fitness</option>
                                                        <option value="Transport">Transport</option>
                                                        <option value="Holiday">Holiday</option>
                                                        <option value="People">People</option>
                                                        <option value="VFX">VFX</option>
                                                        <option value="Sports">Sports</option>
                                                        <option value="Technology">Technology</option>
                                                        <option value="Military">Military</option>
                                                        <option value="Nature">Nature</option>
                                                    </select>                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="textarea" name="tags" class="form-control input-textarea" placeholder="Enter tags seperrated by a comma">
                                                </div>
                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                 <div class="form-group">
                                                <input type="submit" value="Upload" class="btn btn-primary">
                                                <div class="submitting"></div>
                                                </div>
                                                </div>
                                                </div>
                                                </form>
                                                </div>
                                                </div>
                                        </div>
                                        <div id="tempform" class="rm_hidder">

                                            <div class="col-lg-5">
                                                <div class="contact-wrap w-100 p-md-5 p-4">
                                                <form action="{{ route('Template.post') }}" method="POST" enctype="multipart/form-data" id="video-form">
                                                    @csrf

                                                <div class="row">
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Template File</label>
                                                    <input type="file" id="Video" name="Template">
                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Preview Video</label>
                                                    <input type="file" id="Video" name="Preview">
                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Thumbnail </label>
                                                    <input class="form-control" type="file" id="Thumbnail" name="Thumbnail">                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" id="title" name="title" placeholder="Title">
                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" id="description" name="description" placeholder="Description">
                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Type: </label>
                                                    <select class="slct" name="type" required>
                                                        <option value="After">After Effects</option>
                                                        <option value="Premiere">Premiere Pro</option>
                                                        <option value="Davinci">DaVinci Resolve</option>
                                                        <option value="Final">Final Cut Pro</option>
                                                        <option value="Motion">Motion Graphics</option>
                                                    </select>                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Clip Type:  </label>
                                                    <select class="slct" name="clip_type" required>
                                                        <option value="Free">Free Clip</option>
                                                        <option value="Premium">Premium Clip</option>
                                                    </select>                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Category:  </label>
                                                    <select class="slct" name="Category" required>
                                                        <option value="Culture">Culture</option>
                                                        <option value="Religion">Religion</option>
                                                        <option value="Entertainment">Entertainment</option>
                                                        <option value="Green Screen">Green Screen</option>
                                                        <option value="medical">medical</option>
                                                        <option value="Abstract">Abstract</option>
                                                        <option value="Science">Science</option>
                                                        <option value="Food">Food</option>
                                                        <option value="Business">Business</option>
                                                        <option value="Animals">Animals</option>
                                                        <option value="City">City</option>
                                                        <option value="Space">Space</option>
                                                        <option value="family">family</option>
                                                        <option value="Animated backgrounds">Animated backgrounds</option>
                                                        <option value="Industry">Industry</option>
                                                        <option value="Fitness">Fitness</option>
                                                        <option value="Transport">Transport</option>
                                                        <option value="Holiday">Holiday</option>
                                                        <option value="People">People</option>
                                                        <option value="VFX">VFX</option>
                                                        <option value="Sports">Sports</option>
                                                        <option value="Technology">Technology</option>
                                                        <option value="Military">Military</option>
                                                        <option value="Nature">Nature</option>
                                                    </select>                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Category2:  </label>
                                                    <select class="slct" name="Category2">
                                                        <option value="Culture">Culture</option>
                                                        <option value="Religion">Religion</option>
                                                        <option value="Entertainment">Entertainment</option>
                                                        <option value="Green Screen">Green Screen</option>
                                                        <option value="medical">medical</option>
                                                        <option value="Abstract">Abstract</option>
                                                        <option value="Science">Science</option>
                                                        <option value="Food">Food</option>
                                                        <option value="Business">Business</option>
                                                        <option value="Animals">Animals</option>
                                                        <option value="City">City</option>
                                                        <option value="Space">Space</option>
                                                        <option value="family">family</option>
                                                        <option value="Animated backgrounds">Animated backgrounds</option>
                                                        <option value="Industry">Industry</option>
                                                        <option value="Fitness">Fitness</option>
                                                        <option value="Transport">Transport</option>
                                                        <option value="Holiday">Holiday</option>
                                                        <option value="People">People</option>
                                                        <option value="VFX">VFX</option>
                                                        <option value="Sports">Sports</option>
                                                        <option value="Technology">Technology</option>
                                                        <option value="Military">Military</option>
                                                        <option value="Nature">Nature</option>
                                                    </select>                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="textarea" name="tags" class="form-control input-textarea" placeholder="Enter tags seperrated by a comma">
                                                </div>
                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                 <div class="form-group">
                                                <input type="submit" value="Upload" class="btn btn-primary">
                                                <div class="submitting"></div>
                                                </div>
                                                </div>
                                                </div>
                                                </form>
                                                </div>
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