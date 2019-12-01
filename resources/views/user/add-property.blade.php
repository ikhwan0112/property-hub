<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PROPERTY HUB</title>


  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../../../assets/vendors/icheck/skins/all.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('user-css/shared/style.css') }}">
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="{{ asset('user-css/demo_1/style.css') }}">
  <!-- End Layout styles -->
  <link rel="shortcut icon" href="../../../assets/images/favicon.png" />

  <style type="text/css">
  .logo{
    background-image: url({{ asset('images/propertyhub.png') }});
    background-position: center;
    background-size: 110%;
    background-repeat: no-repeat;
}
</style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo logo" href="../../index.html"></a>
        <a class="navbar-brand brand-logo-mini logo" href="../../index.html"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">

       <div class="container"> <h3><i><b>Add Properties</b></i></h3></div>
       <ul class="navbar-nav ml-auto">


        <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
          <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            <img class="img-xs rounded-circle" src="../../../assets/images/faces/face8.jpg" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="../../../assets/images/faces/face8.jpg" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
              </div>
              <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
              <a class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-category">Main Menu</li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/user/user-index') }}">
              <i class="menu-icon typcn typcn-document-text"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('/user/add-property') }}">
              <i class="menu-icon typcn typcn-shopping-bag"></i>
              <span class="menu-title">Add Properties</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('/user/user-report') }}">
              <i class="menu-icon typcn typcn-bell"></i>
              <span class="menu-title">Report</span>
            </a>
          </li>
          <li class="nav-item">
        <a class="nav-link" href="{{ url('/user/user-report') }}">
          <i class="menu-icon typcn typcn-bell"></i>
          <span class="menu-title">My Profile</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/user/user-report') }}">
          <i class="menu-icon typcn typcn-bell"></i>
          <span class="menu-title">Log out</span>
        </a>
      </li>


        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

            <div class="col-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">PROPERTIES FORM</h4>
                  <form action = "/insert" method = "post">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    <div class="form-group">
                      
                      <label>File upload</label>
                      <input type="file" name="img" class="file-upload" accept="image/*" >
                    </div>
                    <div class="form-group">
                      <label for="desc">Description</label>
                      <textarea class="form-control" id="desc" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" id="address" placeholder="Location"  rows="3">
                    </div>
                    <div class="form-group">
                      <label for="price">Price</label>
                      <input type="number" class="form-control" id="price" placeholder="Ringgit Malaysia">
                    </div>
                   <!--
                    <div>
                      <p><u>House details :</u></p>
                    </div>
                    <div class="form-group">
                      <label for="area">Area</label>
                      <input type="number" class="form-control" id="area" placeholder="sqrft">
                    </div>
                    <div class="form-group">
                      <label for="bedroom">Bedroom</label>
                      <input type="number" class="form-control" id="bedroom" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="bathroom">Bathroom</label>
                      <input type="number" class="form-control" id="bathroom" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="Name">Facility</label>
                      <input type="text" class="form-control" id="name" placeholder="">
                    </div>
                    <div class="form-group">
                     <label for="type">House Type</label>
                     <select name="typehouse">
                      <option value="bungalow">Bungalow</option>
                      <option value="condo">Condominium</option>
                      <option value="Semi">Semi-D</option>
                      <option value="apartment">Apartment</option>
                      <option value="terrace">Terrace</option>

                    </select>
                    <br><br>
                  </div>
                  -->
                  <button type="submit" class="btn btn-success mr-2">Submit</button>
                  <button class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>
          </div>



        </div>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:../../partials/_footer.html -->
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
<script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
<script src="../../../assets/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
    <script src="{{ asset('user-js/shared/off-canvas.js') }}"></script>
    <script src="{{ asset('user-js/shared/misc.js') }}"></script><!-- endinject -->
<!-- Custom js for this page-->
<!-- End custom js for this page-->
</body>
</html>