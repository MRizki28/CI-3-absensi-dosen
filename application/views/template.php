<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Breeze Admin</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/mdi/css/materialdesignicons.min.css') ?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/flag-icon-css/css/flag-icon.min.css') ?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/css/vendor.bundle.base.css') ?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css') ?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') ?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png') ?>" />
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css">
</head>

<body>
<div class="container-scroller">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
        <a class="sidebar-brand brand-logo" href="<?php echo site_url('admin/index')?>"><img src=<?php echo base_url('assets/images/logo.svg')?> alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="<?php echo site_url('admin/index')?>"><img src="<?php echo base_url('assets/images/logo-mini.svg')?>" alt="logo" /></a>
      </div><br><br>
      <ul class="nav">
        <li class="nav-item nav-profile">
          <a href="<?php echo site_url('admin/index')?>" class="nav-link">
            <div class="nav-profile-image">
              <img src="<?php echo base_url('assets/images/faces/aisyah.jpg')?>" alt="profile" />
              <span class="login-status online"></span>
              <!--change to offline or busy as needed-->
            </div>
            <div class="nav-profile-text d-flex flex-column pr-3">
              <span class="font-weight-medium mb-2">Aisyah Cantik </span>
              <span class="font-weight-normal">Teknik Informatika</span>
            </div>

          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('admin/index')?>">
            <i class="mdi mdi-home menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('dosen_controller/index')?>">
            <i class="mdi mdi-file menu-icon"></i>
            <span class="menu-title">Data Dosen</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('absensi_controller/index')?>">
            <i class="mdi mdi-file menu-icon"></i>
            <span class="menu-title">Data Absensi</span>
          </a>
        </li>


        <li class="nav-item sidebar-actions"><br>
          <div class="nav-link">
            <div class="mt-4">
              <div class="border-none">

              </div>
              <ul class="mt-4 pl-0">
                <a class="nav-link" href="<?php echo site_url('login_controller/logout')?>">
                  <i class="mdi mdi-exit-to-app menu-icon"></i>
                  <span class="menu-title">Logout</span>
                </a>
              </ul>
            </div>
          </div>
        </li>
      </ul>
    </nav>
    <div class="container-flui page-body-wrapper">
      <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
          <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
            <i class="mdi mdi-menu"></i>
          </button>
          <ul class="navbar-nav navbar-nav-right ml-lg-auto">
            <li class="nav-item nav-search border-0 ml-1 ml-md-3 ml-lg-5 d-none d-md-flex">
              <form class="nav-link form-inline mt-2 mt-md-0">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search" />
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="mdi mdi-magnify"></i>
                    </span>
                  </div>
                </div>
              </form>
            </li>
            <li class="nav-item nav-profile dropdown border-0">
              <a class="nav-link dropdown" id="profileDropdown" href="<?php echo site_url('admin/index')?>" data-toggle="dropdown">
                <img class="nav-profile-img mr-2" alt="" src="<?php echo base_url('assets/images/faces/aisyah.jpg')?>" />
                <span class="profile-name">Aisyah</span>
              </a>

              <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="<?php echo site_url('login_controller/logout')?>">
                  <i class="fa-solid fa-arrow-right-from-bracket mr-2 text-primary"></i> Logout </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>

      </nav>
      <div class="main-panel">
                <div class="container-fluid ">
                    <div class="content-wrapper pl-0">

  
          <?php
				echo $konten;
						?>  

              </div>
              
              </div>
                <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Aisyah Cantik</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Stmik Adhi Guna</span>
            </div>
          </footer>
        </div>
            <!-- main-panel ends -->
          </div>
        
          <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="<?php echo base_url('assets/vendors/js/vendor.bundle.base.js') ?>"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="<?php echo base_url('assets/vendors/chart.js/Chart.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendors/flot/jquery.flot.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendors/flot/jquery.flot.resize.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendors/flot/jquery.flot.categories.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendors/flot/jquery.flot.fillbetween.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendors/flot/jquery.flot.stack.js') ?>"></script>
        <script src="<?php echo base_url('assets/vendors/flot/jquery.flot.pie.js') ?>"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="<?php echo base_url('assets/js/off-canvas.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/hoverable-collapse.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/misc.js') ?>"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="<?php echo base_url('assets/js/dashboard.js') ?>"></script>
        <!-- End custom js for this page -->
</body>

</html>