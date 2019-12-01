<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PROPERTY HUB</title>

  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('user-css/shared/style.css') }}">
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="{{ asset('user-css/demo_1/style.css') }}">
  <!-- End Layout styles -->
  <link rel="shortcut icon" href="../assets/images/favicon.png" />

  <style>
  .logo{
    background-position: center;
    background-size: 110%;
    background-repeat: no-repeat;
    background-image: url({{ asset('images/propertyhub.png') }});
  }
  </style>

</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-13 col-13 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo logo" href="{{ url('/') }}"></a>
        <a class="navbar-brand brand-logo-mini logo" href="{{ url('/') }}"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
       <div class="container"> <h3><i><b>Properties List</b></i></h3></div>
   
  </div>
</nav>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

      <li class="nav-item nav-category">Main Menu</li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/user/user_index') }}">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/user/add_property') }}">
          <i class="menu-icon typcn typcn-shopping-bag"></i>
          <span class="menu-title">Add Properties</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/user/user_report') }}">
          <i class="menu-icon typcn typcn-bell"></i>
          <span class="menu-title">Report</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/user/user_report') }}">
          <i class="menu-icon typcn typcn-bell"></i>
          <span class="menu-title">My Profile</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}">
          <i class="menu-icon typcn typcn-user-outline"></i>
          <span class="menu-title">{{ __('Logout') }}</span>
        </a>
      </li>


    </ul>
  </nav>
  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <!-- Page Title Header Starts-->
      <div class="row page-title-header">
        <div class="col-12">
          <div class="page-header">
            <h4 class="page-title">Dashboard</h4>
          </div>
        </div>
      </div>
      <!-- Page Title Header Ends-->


      <div class="row">
        <div class="col-md-8">
         <div class="col-md-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h4 class="card-title mb-0"><b>Your properties :</b></h4>
                <a href="#"><small>Show All</small></a>
              </div>
              <div class="table-responsive">
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th><b>PICTURE</b></th>
                      <th><b>DESCRIPTION</b></th>
                      <th><b>ADDRESS</b></th>
                      <th><b>PRICE</b></th>
                      <th><b>STATUS</b></th>
                      <th><b>UPDATE</b></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>INV-87239</td>
                      <td>Viola Ford</td>
                      <td>Paid</td>
                      <td>20 Jan 2019</td>
                      <td>$755</td>
                      <td>$755</td>
                    </tr>
                    <tr>
                      <td>INV-87239</td>
                      <td>Dylan Waters</td>
                      <td>Unpaid</td>
                      <td>23 Feb 2019</td>
                      <td>$800</td>
                      <td>$800</td>
                    </tr>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
  <footer class="footer">
    <div class="container-fluid clearfix">
      <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i>
      </span>
    </div>
  </footer>
  <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="../assets/vendors/js/vendor.bundle.base.js"></script>
<script src="../assets/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{ asset('user-js/shared/off-canvas.js') }}"></script>
<script src="{{ asset('user-js/shared/misc.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('user-js/demo_1/dashboard.js') }}"></script>
<!-- End custom js for this page-->
</body>
</html>