<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Error | 404</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link rel=icon href="../../dist/img/favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style media="screen">
    .fade.in {
      opacity: 1 !important;
    }

    .modal.in .modal-dialog {
      -webkit-transform: translate(0, 0) !important;
      -o-transform: translate(0, 0) !important;
      transform: translate(0, 0) !important;
    }

    .modal-backdrop .fade .in {
      opacity: 0.5 !important;
    }

    .modal-backdrop.fade {
      opacity: 0.5 !important;
    }


    .heading {
      background-color: crimson;
    }

    .box {
      border: transparent;
      padding: 20px;
      border-radius: 5px;
    }

    .box-sm {
      border: transparent;
      padding: 5px;
      border-radius: 5px;
    }



    .info h3 {
      padding: 0px;
      margin: 5px;
    }

    .per_info h4 {
      margin: 5px;
    }

    #photo {
      height: 200px;
      width: 190px;
    }

    #edit_sign {
      height: 20px;
      width: 20px;
    }

    #personal {
      background-color: transparent;
      color: white
    }

    #education {
      background-color: transparent;
      color: white
    }

    #join_details {
      background-color: transparent;
      color: white
    }

    #pay_details {
      background-color: transparent;
      color: white
    }

    #bank_details {
      background-color: transparent;
      color: white
    }

    #address {
      background-color: transparent;
      color: white
    }

    .nameplate {
      background-color: transparent;
      color: white
    }

    .info {
      background-color: transparent;
      color: white
    }

    form span {
      color: red;

    }

    .pic {
      width: 250px;
      height: 250px;
    }

    .picbig {
      position: absolute;
      width: 0px;
      -webkit-transition: width 0.3s linear 0s;
      transition: width 0.3s linear 0s;
      z-index: 10;
    }

    .pic:hover+.picbig {
      width: 500px;
      height: 500px;
    }

    .form-control {
      color: black;
      outline: none;
      background: transparent;

    }

    label {
      color: black;

    }

    .cropped {
      width: 150px;
      height: 150px;
      overflow: hidden;

    }
  </style>



</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark  navbar-cyan">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../../index2.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">1</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../../dist/img/gift.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title text-primary">
                    Support
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Your account is now active</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i></p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>

        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">1</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">1 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 1 new messages
              <span class="float-right text-muted text-sm"></span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../../index2.php" class="brand-link">
        <img src="../../dist/img/gift.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><span style="color:#ff0000;">S</span><span style="color:#ff4000;">k</span><span style="color:#ff7f00;">y</span><span style="color:#ffbf00;">-</span><span style="color:#ffff00;">s</span><span
            style="color:#80ff00;">
            t</span><span style="color:#00ff00;">o</span><span style="color:#00ff80;">r</span><span style="color:#00ffff;">e</span></span>
      </a>


      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../../dist/img/gift.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info"><span style="color:#ff0000;">S</span><span style="color:#ff4000;">k</span><span style="color:#ff7f00;">y</span><span style="color:#ffbf00;">-</span><span style="color:#ffff00;">s</span><span style="color:#80ff00;">
              t</span><span style="color:#00ff00;">o</span><span style="color:#00ff80;">r</span><span style="color:#00ffff;">e</span></div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../index2.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard v1</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../../index2.php" class="nav-link active">
                    <i class="far fa-circle nav-icon text-warning"></i>
                    <p>Dashboard</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="updated_ecom_store/index.php" class="nav-link">
                    <i class="far fa-circle nav-icon text-success"></i>
                    <p>Shop</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="pages/examples/profile.php" class="nav-link">
                <i class="nav-icon fas fa-th text-info"></i>
                <p>
                  Profile
                  <span class="right badge badge-danger">New</span>
                </p>
              </a>
            </li>
            <li class="nav-header"></li>
            <li class="nav-item">
              <a href="../../logout.php" class="nav-link">
                <i class="nav-icon far fa-circle text-danger"></i>
                <p class="text">Logout</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="../../support.php" class="nav-link">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Support</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                <p>Terms</p>
              </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->

      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>404 Error Page</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">404 Error Page</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="error-page">
          <h2 class="headline text-warning"> 404</h2>

          <div class="error-content">
            <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>

            <p>
              We could not find the page you were looking for.
              Meanwhile, you may <a href="../../index2.php">return to dashboard</a> or try using the search form.
            </p>

            <form class="search-form">
              <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search" required>

                <div class="input-group-append">
                  <button type="submit" name="submit" class="btn btn-warning"><i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
              <!-- /.input-group -->
            </form>
          </div>
          <!-- /.error-content -->
        </div>
        <!-- /.error-page -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.0.4
      </div>
      <strong>Copyright &copy; 2014-2019 <a href="http://connect-academy.com">Sky-store</a>.</strong> All rights
      reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
</body>

</html>