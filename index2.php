<?php
  $conn = mysqli_connect("localhost", "robaa", "Lahaja40", "updated_ecom_store");
  $results = mysqli_query($conn, "SELECT * FROM customers");
  $customers = mysqli_fetch_all($results, MYSQLI_ASSOC);
?>
<?php
    session_start();
    if(!isset($_SESSION["customer_email"])) {
        header("location:index.php");
      }
      ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel=icon href="dist/img/lipisha.ico">

  <title>Mobicash| Dashboard</title>
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<style media="screen">

@media (min-width: 576px) {
  .roh {
    height: 150px;
  }
}

@media (min-width: 768px) {
  .roh {
    height: 300px;
  }
}

@media (min-width: 992px) {
  .roh {
    height: 300px;
  }
}

@media (min-width: 1200px) {
  .roh {
    height: 300px;
  }
}

</style>

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark navbar-cyan">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index2.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" required>
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
                          <img src="dist/img/credit-cards.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                          <div class="media-body">
                            <h3 class="dropdown-item-title text-primary">
                              Support <i class="ion ion-checkmark-circled"></i>
                              <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">Your account is now active</p>

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
                <a class="nav-link"data-slide="true" href="#" role="button">
                  <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index2.php" class="brand-link">
        <img src="dist/img/gift.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><span style="color:#ff0000;">M</span><span style="color:#ff4000;">O</span><span style="color:#ff7f00;">B</span><span style="color:#ffbf00;">I</span><!--<span style="color:#ffff00;">--></span><span style="color:#80ff00;">
                C</span><span style="color:#00ff00;">A</span><span style="color:#00ff80;">S</span><span style="color:#00ffff;">H</span></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/gift.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info"><span style="color:#ff0000;">M</span><span style="color:#ff4000;">O</span><span style="color:#ff7f00;">B</span><span style="color:#ffbf00;">I</span><!--<span style="color:#ffff00;">--></span><span style="color:#80ff00;">
                    C</span><span style="color:#00ff00;">A</span><span style="color:#00ff80;">S</span><span style="color:#00ffff;">H</span></span></div>
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
                  <a href="index2.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard v1</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index2.php" class="nav-link active">
                    <i class="far fa-circle nav-icon text-warning"></i>
                    <p>Dashboard</p>
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
            <li class="nav-header text-center"><i class="ion ion-ios-settings-strong"></i></li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link">
                <i class="nav-icon far fa-circle text-danger"></i>
                <p class="text">Logout</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="support.php" class="nav-link">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Support</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://docs.google.com/document/d/1wf2WMjEMZHZaadWyxxZoo0SEht7uqh4rahIDj3GhzFE/edit?usp=sharing" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                <p>Terms</p>
              </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <div class="text-left" id="dateDiv"></div>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active text-success"><?php echo $_SESSION['customer_email'] ?></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Info boxes -->
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3>3000+</h3>

                    <p>Loanees</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-ios-lightbulb"></i>
                  </div>
                  <a href="#" class="small-box-footer toastsDefaultInfo">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>11.6<sup style="font-size: 20px">%</sup></h3>

                    <p>growth rate</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="#" class="small-box-footer ">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3>30</h3>

                    <p>Outlets</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-ios-paperplane"></i>
                  </div>
                  <a href="#" class="small-box-footer toastsDefaultWarning">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h3>768</h3>

                    <p>Youth groups</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>
                  <a href="#" class="small-box-footer toastsDefaultMaroon">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
            <!-- ./col -->

            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Recap Report</h5>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <div class="btn-group">
                        <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                          <i class="fas fa-wrench"></i>
                        </button>
                      <!--  <div class="dropdown-menu dropdown-menu-right" role="menu">
                          <a href="#" class="dropdown-item">Action</a>
                          <a href="#" class="dropdown-item">Another action</a>
                          <a href="#" class="dropdown-item">Something else here</a>
                          <a class="dropdown-divider"></a>
                          <a href="#" class="dropdown-item">Separated link</a>
                        </div>

                    -->
                  </div>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-8">
                        <p class="text-center">
                          <strong>On loan: Jan, 2020 - <?php
// Return date/time info of a timestamp; then format the output
$mydate=getdate(date("U"));
echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
?></strong>
                        </p>

                        <div class="chart">
                          <!-- Sales Chart Canvas -->
                          <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                        </div>
                        <!-- /.chart-responsive -->
                      </div>
                      <!-- /.col -->
                      <div class="col-md-4">
                        <p class="text-center">
                          <strong>Goal Completion</strong>
                        </p>

                        <div class="progress-group">
                          Refunds
                          <span class="float-right"><b>8</b>/10</span>
                          <div class="progress progress-sm">
                            <div class="progress-bar bg-primary" style="width: 80%"></div>
                          </div>
                        </div>
                        <!-- /.progress-group -->

                        <div class="progress-group">
                          Delivery efficiency
                          <span class="float-right"><b>7</b>/10</span>
                          <div class="progress progress-sm">
                            <div class="progress-bar bg-danger" style="width: 75%"></div>
                          </div>
                        </div>

                        <!-- /.progress-group -->
                        <div class="progress-group">
                          <span class="progress-text">Customer care</span>
                          <span class="float-right"><b>6</b>/10</span>
                          <div class="progress progress-sm">
                            <div class="progress-bar bg-success" style="width: 60%"></div>
                          </div>
                        </div>

                        <!-- /.progress-group -->
                        <div class="progress-group">
                          Web Speed
                          <span class="float-right"><b>5</b>/10</span>
                          <div class="progress progress-sm">
                            <div class="progress-bar bg-warning" style="width: 50%"></div>
                          </div>
                        </div>
                        <!-- /.progress-group -->
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- ./card-body -->
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-sm-3 col-6">
                        <div class="description-block border-right">
                          <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                          <h5 class="description-header">$3,675,210.43</h5>
                          <span class="description-text">TOTAL REVENUE</span>
                        </div>
                        <!-- /.description-block -->
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-3 col-6">
                        <div class="description-block border-right">
                          <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                          <h5 class="description-header">$456,390.90</h5>
                          <span class="description-text">STUDENTS</span>
                        </div>
                        <!-- /.description-block -->
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-3 col-6">
                        <div class="description-block border-right">
                          <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                          <h5 class="description-header">$241,813.53</h5>
                          <span class="description-text">COMMUNITY</span>
                        </div>
                        <!-- /.description-block -->
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-3 col-6">
                        <div class="description-block">
                          <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                          <h5 class="description-header">1200</h5>
                          <span class="description-text">GOAL COMPLETIONS</span>
                        </div>
                        <!-- /.description-block -->
                      </div>
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Main row -->
            <div class="row">
              <!-- Left col -->
              <div class="col-md-8">
                <!-- MAP & BOX PANE -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Visitors Report</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <div class="d-md-flex">
                      <div class="p-1 flex-fill" style="overflow: hidden">
                        <!-- Map will be created here -->
                        <div id="world-map-markers" style="height: 325px; overflow: hidden">
                          <div>
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7464418395352!2d36.864458613933095!3d-1.3281391360458557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f11f593dd7927%3A0x15f0196c855cf9c9!2sEast%20Africa%20Data%20Centre!5e0!3m2!1sen!2ske!4v1588761366851!5m2!1sen!2ske" width="500" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
                        </div>
                      </div>
                      <div class="card-pane-right bg-success pt-2 pb-2 pl-4 pr-4">
                        <div class="description-block mb-4">
                          <div class="sparkbar pad" data-color="#fff"></div>
                          <h5 class="description-header">8390</h5>
                          <span class="description-text">Visits</span>
                        </div>
                        <!-- /.description-block -->
                        <div class="description-block mb-4">
                          <div class="sparkbar pad" data-color="#fff"></div>
                          <h5 class="description-header">30%</h5>
                          <span class="description-text">Referrals</span>
                        </div>
                        <!-- /.description-block -->
                        <div class="description-block">
                          <div class="sparkbar pad" data-color="#fff"></div>
                          <h5 class="description-header">70%</h5>
                          <span class="description-text">Organic</span>
                        </div>
                        <!-- /.description-block -->
                      </div><!-- /.card-pane-right -->
                    </div><!-- /.d-md-flex -->
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="row">
                  <div class="col-md-6">
                    <!-- DIRECT CHAT -->
                    <div class="card direct-chat direct-chat-warning">
                      <div class="card-header">

                        <span class="card-title badge badge-info">Testimonies</span>

                        <div class="card-tools">
                          <span data-toggle="tooltip" title="3 New Messages" class="badge badge-warning">3</span>
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
                            <i class="fas fa-comments"></i></button>
                          <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                          </button>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <!-- Conversations are loaded here -->
                        <div class="direct-chat-messages text-sm">
                          <!-- Message. Default to the left -->
                          <div class="direct-chat-msg">
                            <div class="direct-chat-infos clearfix">
                              <span class="direct-chat-name float-left">Mavuto</span>
                              <span class="direct-chat-timestamp float-right"></span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="dist/img/avatar6.png" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                          I like your support team. Lots of love and keep it up
                            </div>
                            <!-- /.direct-chat-text -->
                          </div>
                          <!-- /.direct-chat-msg -->

                          <!-- Message to the right -->
                          <div class="direct-chat-msg right">
                            <div class="direct-chat-infos clearfix">
                              <span class="direct-chat-name float-right">Daliso</span>
                              <span class="direct-chat-timestamp float-left"></span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="dist/img/avatar6.png" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                              Took days but eventually you delivered what you promised.Loyalty at 100%
                            </div>
                            <!-- /.direct-chat-text -->
                          </div>
                          <!-- /.direct-chat-msg -->

                          <!-- Message. Default to the left -->
                          <div class="direct-chat-msg">
                            <div class="direct-chat-infos clearfix">
                              <span class="direct-chat-name float-left">Chikondi</span>
                              <span class="direct-chat-timestamp float-right"></span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="dist/img/avatar6.png" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                            I've had this app for almost an year. Took loans and paid them on time. Only one time I made a payment late by only couple of days, less than a week though, have beeng unable to get a loan for more than 6 months now.
                            </div>
                            <!-- /.direct-chat-text -->
                          </div>
                          <!-- /.direct-chat-msg -->

                          <!-- Message to the right -->
                          <div class="direct-chat-msg right">
                            <div class="direct-chat-infos clearfix">
                              <span class="direct-chat-name float-right">Clare </span>
                              <span class="direct-chat-timestamp float-left"></span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="dist/img/avatar6.png" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                    They used to be so reliable, but after the pandemic chaos, it seems you can't rely them when you needed them the most.
                            </div>
                            <!-- /.direct-chat-text -->
                          </div>
                          <!-- /.direct-chat-msg -->

                                                    <!-- Message. Default to the left -->
                                                    <div class="direct-chat-msg">
                                                      <div class="direct-chat-infos clearfix">
                                                        <span class="direct-chat-name float-left">Chimwamsozi</span>
                                                        <span class="direct-chat-timestamp float-right"></span>
                                                      </div>
                                                      <!-- /.direct-chat-infos -->
                                                      <img class="direct-chat-img" src="dist/img/avatar6.png" alt="message user image">
                                                      <!-- /.direct-chat-img -->
                                                      <div class="direct-chat-text">
                                                      Great experience.Atleast they dont lie
                                                      </div>
                                                      <!-- /.direct-chat-text -->
                                                    </div>
                                                    <!-- /.direct-chat-msg -->

                                                    <!-- Message to the right -->
                                                    <div class="direct-chat-msg right">
                                                      <div class="direct-chat-infos clearfix">
                                                        <span class="direct-chat-name float-right">Kangachepe</span>
                                                        <span class="direct-chat-timestamp float-left"></span>
                                                      </div>
                                                      <!-- /.direct-chat-infos -->
                                                      <img class="direct-chat-img" src="dist/img/avatar6.png" alt="message user image">
                                                      <!-- /.direct-chat-img -->
                                                      <div class="direct-chat-text">
                                                  Transaction so slow took upto 2 hours for money to arrive on my phone
                                                      </div>
                                                      <!-- /.direct-chat-text -->
                                                    </div>
                                                    <!-- /.direct-chat-msg -->
                                                    <!-- Message. Default to the left -->
                                                    <div class="direct-chat-msg">
                                                      <div class="direct-chat-infos clearfix">
                                                        <span class="direct-chat-name float-left">Mulangani </span>
                                                        <span class="direct-chat-timestamp float-right"></span>
                                                      </div>
                                                      <!-- /.direct-chat-infos -->
                                                      <img class="direct-chat-img" src="dist/img/avatar6.png" alt="message user image">
                                                      <!-- /.direct-chat-img -->
                                                      <div class="direct-chat-text">
                                                    It's a good and helpful .. But during this pandemic period it's kind of confusing. I took a loan of 20000 and I paid within a week.. But it has never been processed.. All I get is texts every morning and it's kinda annoying me. I paid the loan in full but still processing???what's going on?? Kindly update my account so that i can borrow again
                                                      </div>
                                                      <!-- /.direct-chat-text -->
                                                    </div>
                                                    <!-- /.direct-chat-msg -->

                                                    <!-- Message to the right -->
                                                    <div class="direct-chat-msg right">
                                                      <div class="direct-chat-infos clearfix">
                                                        <span class="direct-chat-name float-right">anonymous</span>
                                                        <span class="direct-chat-timestamp float-left"></span>
                                                      </div>
                                                      <!-- /.direct-chat-infos -->
                                                      <img class="direct-chat-img" src="dist/img/avatar6.png" alt="message user image">
                                                      <!-- /.direct-chat-img -->
                                                      <div class="direct-chat-text">
                                                        The app is good and very easy to use. I don't have to remember or write somewhere the pay bill number or my account number. The disbursement is swift! There are areas to improve though; 1). Repayment period 2). Room for roll over 3). Interest be begged on repayment period 4). One phone call came through and was picked by True caller as "mbwa mwitu" did you guys assign one of your numbers thus?
                                                      </div>
                                                      <!-- /.direct-chat-text -->
                                                    </div>
                                                    <!-- /.direct-chat-msg -->
                                                    <!-- Message. Default to the left -->
                                                    <div class="direct-chat-msg">
                                                      <div class="direct-chat-infos clearfix">
                                                        <span class="direct-chat-name float-left">Emanuel</span>
                                                        <span class="direct-chat-timestamp float-right"></span>
                                                      </div>
                                                      <!-- /.direct-chat-infos -->
                                                      <img class="direct-chat-img" src="dist/img/avatar6.png" alt="message user image">
                                                      <!-- /.direct-chat-img -->
                                                      <div class="direct-chat-text">
                                                  This web is good and faster but kindly put into consideration  1. Call or reminders before the due dates asking the time when one will pay . This call are irritating please 2. The duration is too short
                                                      </div>
                                                      <!-- /.direct-chat-text -->
                                                    </div>
                                                    <!-- /.direct-chat-msg -->

                                                    <!-- Message to the right -->
                                                    <div class="direct-chat-msg right">
                                                      <div class="direct-chat-infos clearfix">
                                                        <span class="direct-chat-name float-right">Chilembe</span>
                                                        <span class="direct-chat-timestamp float-left"></span>
                                                      </div>
                                                      <!-- /.direct-chat-infos -->
                                                      <img class="direct-chat-img" src="dist/img/avatar6.png" alt="message user image">
                                                      <!-- /.direct-chat-img -->
                                                      <div class="direct-chat-text">Every time i fill in the form when i get to selecting emergency contacts they remain blank and when i try to proceed i get an error that some fields are blank and the whole page resets. This is very frustrating </div>
                                                      <!-- /.direct-chat-text -->
                                                    </div>
                                                    <!-- /.direct-chat-msg -->
                                                    <!-- Message. Default to the left -->
                                                    <div class="direct-chat-msg">
                                                      <div class="direct-chat-infos clearfix">
                                                        <span class="direct-chat-name float-left">Tembo</span>
                                                        <span class="direct-chat-timestamp float-right"></span>
                                                      </div>
                                                      <!-- /.direct-chat-infos -->
                                                      <img class="direct-chat-img" src="dist/img/avatar6.png" alt="message user image">
                                                      <!-- /.direct-chat-img -->
                                                      <div class="direct-chat-text">
                                                    A very good app when in need of an emergency loan...they should just try and flatten their interest rates and extend the repayment time period and of course...the penalties after a delay in payment are really hurting.
                                                      </div>
                                                      <!-- /.direct-chat-text -->
                                                    </div>
                                                    <!-- /.direct-chat-msg -->

                                                    <!-- Message to the right -->
                                                    <div class="direct-chat-msg right">
                                                      <div class="direct-chat-infos clearfix">
                                                        <span class="direct-chat-name float-right">Mwizinge</span>
                                                        <span class="direct-chat-timestamp float-left"></span>
                                                      </div>
                                                      <!-- /.direct-chat-infos -->
                                                      <img class="direct-chat-img" src="dist/img/avatar6.png" alt="message user image">
                                                      <!-- /.direct-chat-img -->
                                                      <div class="direct-chat-text">
                                              So good... especially if you pay on time your loan increases instantly...it would be good though if the repayment period is increased as one's loan increases too...good job with this app!
                                                      </div>
                                                      <!-- /.direct-chat-text -->
                                                    </div>
                                                    <!-- /.direct-chat-msg -->






















<div class="direct-chat-msg">
  <div class="direct-chat-infos clearfix">
<span class="direct-chat-name float-left">Chewa</span>
    <span class="direct-chat-timestamp float-right"></span>
  </div>
  <!-- /.direct-chat-infos -->
  <img class="direct-chat-img" src="dist/img/avatar6.png" alt="message user image">    <!-- /.direct-chat-img -->
   <div class="direct-chat-text">Great institution
  </div>
                                                      <!-- /.direct-chat-text -->  </div>
                                                    <!-- /.direct-chat-msg -->

                                                  <!-- Message to the right -->
                                                  <div class="direct-chat-msg right">
                                                    <div class="direct-chat-infos clearfix">
                                                      <span class="direct-chat-name float-right">Bwebya<span>
                                                      <span class="direct-chat-timestamp float-left"></span>
                                                    </div>
                                                    <!-- /.direct-chat-infos -->
                                                    <img class="direct-chat-img" src="dist/img/avatar6.png" alt="message user image">
                                                    <!-- /.direct-chat-img -->
                                                    <div class="direct-chat-text">
                                             Repayment schedule is A bit too short would be nice if they gave longer period depending on the amount.
                                                    </div>
                                                    <!-- /.direct-chat-text -->
                                                  </div>
                                                  <!-- /.direct-chat-msg -->

                                                  <!-- Message to the right -->
                                                  <div class="direct-chat-msg right">
                                                    <div class="direct-chat-infos clearfix">
                                                      <span class="direct-chat-name float-right">Tumbuka</span>
                                                      <span class="direct-chat-timestamp float-left"></span>
                                                    </div>
                                                    <!-- /.direct-chat-infos -->
                                                    <img class="direct-chat-img" src="dist/img/avatar6.png" alt="message user image">
                                                    <!-- /.direct-chat-img -->
                                                    <div class="direct-chat-text">
                                          Hi,Mobicash is the best loan lenders I used their website and it offers his members with a fast emargency loan with only a few steps to register and it's within few minutes you are done, after there you will be able to get a loan. Short and clear
                                                    </div>
                                                    <!-- /.direct-chat-text -->
                                                  </div>
                                                  <!-- /.direct-chat-msg -->
                      </div>
                      </div>
<!-- /.direct-chat-pane -->
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <form action="#" method="post">
                          <div class="input-group">
                            <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                            <span class="input-group-append">
                              <button type="button" class="btn btn-warning">Send</button>
                            </span>
                          </div>
                        </form>
                      </div>
                      <!-- /.card-footer-->
                    </div>
                    <!--/.direct-chat -->
                  </div>
                  <!-- /.col -->

                  <div class="col-md-6">
                    <!-- USERS LIST -->
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">Latest Groups</h4>

                        <div class="card-tools">
                          <span class="badge badge-danger">8 New groups</span>

                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body p-0">
                        <ul class="users-list clearfix">
                          <li>
                            <img src="dist/img/loanlo.png" alt="User Image">
                            <a class="users-list-name" href="#">Aussie Inc</a>
                            <span class="users-list-date">12-Jan</span>
                          </li>
                          <li>
                            <img src="dist/img/intel.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Intel</a>
                            <span class="users-list-date">16-May</span>
                          </li>
                          <li>
                            <img src="dist/img/xbox-logo-square.jpg" alt="User Image">
                            <a class="users-list-name" href="#">X-box</a>
                            <span class="users-list-date">12-Jan</span>
                          </li>
                          <li>
                            <img src="dist/img/download.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Tiens</a>
                            <span class="users-list-date">12 Jan</span>
                          </li>
                          <li>
                            <img src="dist/img/edd71ebdcca1c2e4ac70e0c630897dee.jpeg" alt="User Image">
                            <a class="users-list-name" href="#">Comac</a>
                            <span class="users-list-date">13 Jan</span>
                          </li>
                          <li>
                            <img src="dist/img/c4047aae89f7dfc1d818304c073cefc9.png.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Pioneer</a>
                            <span class="users-list-date">14 Jan</span>
                          </li>
                          <li>
                            <img src="dist/img/Huawei-Logo-for-Website.jpg" alt="User Image">
                            <a class="users-list-name" href="#">Huawei</a>
                            <span class="users-list-date">15 Jan</span>
                          </li>

                        </ul>
                        <!-- /.users-list -->
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer text-center swalDefaultInfo">
                        <a href="javascript::">View All groups</a>
                      </div>
                      <!-- /.card-footer -->
                    </div>
                    <!--/.card -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- TABLE: LATEST ORDERS -->
                <div class="card">
                  <div class="card-header border-transparent">
                    <h3 class="card-title">Latest </h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">

                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">  </li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100 roh" src="dist/img/rcjgrydqhet5tibsnm5cfaa712201e8.jpg" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100 roh" src="dist/img/zynclw4kjuxu4wnip95c0194532812f.jpg" alt="First slide">
                      </div>
                      <div class="carousel-item">
                      <img class="d-block w-100 roh"  src="dist/img/huray.jpg" alt="First slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
                <!-- /.card-body -->
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">
                    <a href="pages/examples/profile.php" class="btn btn-sm btn-info float-left">Apply</a>
                    <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View</a>
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->

              <div class="col-md-4">
                <!-- Info Boxes Style 2 -->
                <div class="info-box mb-3 bg-warning">
                  <span class="info-box-icon"><i class="fas fa-tag"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Referrals</span>
                    <span class="info-box-number">5,200</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box mb-3 bg-success">
                  <span class="info-box-icon"><i class="far fa-heart"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Mentions</span>
                    <span class="info-box-number">92,050</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box mb-3 bg-danger">
                  <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Payments</span>
                    <span class="info-box-number">114,381</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box mb-3 bg-info">
                  <span class="info-box-icon"><i class="far fa-comment"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Deliveries</span>
                    <span class="info-box-number">163,921</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->

                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Traffic</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="chart-responsive">
                          <canvas id="pieChart" height="150"></canvas>
                        </div>
                        <!-- ./chart-responsive -->
                      </div>
                      <!-- /.col -->
                      <div class="col-md-4">
                        <ul class="chart-legend clearfix">
                          <li><i class="far fa-circle text-danger"></i> Zambia</li>
                          <li><i class="far fa-circle text-success"></i> Kenya</li>
                          <li><i class="far fa-circle text-warning"></i> Uganda</li>
                          <li><i class="far fa-circle text-info"></i> Tanzania</li>
                          <li><i class="far fa-circle text-primary"></i> Rwanda</li>

                        </ul>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer bg-white p-0">
                    <ul class="nav nav-pills flex-column">
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          Online visitors
<span class="float-right text-danger">
                          <script>

                          // Function to generate random number
                          function randomNumber(min, max) {
                              return Math.floor(Math.random() * (max - min) + min);
                          }

                          document.write("")

                          // Function call
                          document.write( randomNumber(100, 1200) );

                          </script>
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          Zambia
                          <span class="float-right text-danger">
                            <i class="fas fa-arrow-down text-sm"></i>
                            <script>

                            // Function to generate random number
                            function randomNumber(min, max) {
                                return Math.floor(Math.random() * (max - min) + min);
                            }

                            document.write("")

                            // Function call
                            document.write( randomNumber(3, 12) );

                            </script>%</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          Kenya
                          <span class="float-right text-success">
                            <i class="ae flag"></i>
                            <i class="fas fa-arrow-up  text-sm"></i> 4%
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          Uganda
                          <span class="float-right text-warning">
                            <i class="fas fa-arrow-left text-sm"></i> 0%
                          </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <!-- /.footer -->
                </div>
                <!-- /.card -->

                <!-- PRODUCT LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Reviews</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <ul class="products-list product-list-in-card pl-2 pr-2">
                      <li class="item">
                        <div class="product-img">
                          <img src="dist/img/e24f383b-7a5a-4d3c-a89b-4e5d5ef33064.jpg" alt="Product Image" class="img-size-50">
                        </div>
                        <div class="product-info">
                          <a href="javascript:void(0)" class="product-title">Ellina
                            <span class="badge badge-warning float-right">more..</span></a>
                          <span class="product-description sparkbar">
                               <i class="ion ion-android-star" style="color:#f0ad4e"></i><i class="ion ion-android-star" style="color:#f0ad4e"></i><i class="ion ion-android-star" style="color:#f0ad4e"></i><i class="ion ion-android-star" style="color:#f0ad4e">
                              </i><i class="ion ion-android-star" style="color:#f0ad4e"></i>
                              <i class="ion ion-android-star" style="color:#f0ad4e"></i><i class="ion ion-android-star" style="color:#f0ad4e"></i><i class="ion ion-android-star" style="color:#f0ad4e"></i><i class="ion ion-android-star" style="color:grey">
                             </i><i class="ion ion-android-star" style="color:grey"></i>
                          </span>
                        </div>
                      </li>
                      <!-- /.item -->
                      <li class="item">
                        <div class="product-img">
                          <img src="dist/img/ZM-Feature-Image.jpg" alt="Product Image" class="img-size-50">
                        </div>
                        <div class="product-info">
                          <a href="javascript:void(0)" class="product-title">Chewa
                            <span class="badge badge-info float-right">more..</span></a>
                              <span class="product-description sparkbar">
                                   <i class="ion ion-android-star" style="color:#f0ad4e"></i><i class="ion ion-android-star" style="color:#f0ad4e"></i><i class="ion ion-android-star" style="color:#f0ad4e"></i><i class="ion ion-android-star" style="color:#f0ad4e">
                                  </i><i class="ion ion-android-star" style="color:#f0ad4e"></i>
                                  <i class="ion ion-android-star" style="color:#f0ad4e"></i><i class="ion ion-android-star" style="color:#f0ad4e"></i><i class="ion ion-android-star" style="color:grey"></i><i class="ion ion-android-star" style="color:grey">
                                 </i><i class="ion ion-android-star" style="color:grey"></i>
                              </span>
                        </div>
                      </li>
                      <!-- /.item -->
                      <li class="item">
                        <div class="product-img">
                          <img src="dist/img/TTL-Zambia_MG_0166.jpg" alt="Product Image" class="img-size-50">
                        </div>
                        <div class="product-info">
                          <a href="javascript:void(0)" class="product-title">
                            Chidano <span class="badge badge-danger float-right">
                              more..
                            </span>
                          </a>
                          <span class="product-description sparkbar">
                               <i class="ion ion-android-star" style="color:#f0ad4e"></i><i class="ion ion-android-star" style="color:#f0ad4e"></i><i class="ion ion-android-star" style="color:#f0ad4e"></i><i class="ion ion-android-star" style="color:#f0ad4e">
                              </i><i class="ion ion-android-star" style="color:#f0ad4e"></i>
                              <i class="ion ion-android-star" style="color:#f0ad4e"></i><i class="ion ion-android-star" style="color:grey"></i><i class="ion ion-android-star" style="color:grey"></i><i class="ion ion-android-star" style="color:grey">
                             </i><i class="ion ion-android-star" style="color:grey"></i>
                          </span>
                        </div>
                      </li>
                      <!-- /.item -->
                      <li class="item">
                        <div class="product-img">
                          <img src="dist/img/redis.jpg" alt="Product Image" class="img-size-50">
                        </div>
                        <div class="product-info">
                          <a href="javascript:void(0)" class="product-title">Balaudye
                            <span class="badge badge-success float-right">more..</span></a>
                        <span class="product-description sparkbar">
                             <i class="ion ion-android-star" style="color:#f0ad4e"></i><i class="ion ion-android-star" style="color:#f0ad4e"></i><i class="ion ion-android-star" style="color:#f0ad4e"></i><i class="ion ion-android-star" style="color:#f0ad4e">
                            </i><i class="ion ion-android-star" style="color:#f0ad4e"></i>
                            <i class="ion ion-android-star" style="color:#f0ad4e"></i><i class="ion ion-android-star" style="color:#f0ad4e"></i><i class="ion ion-android-star" style="color:grey"></i><i class="ion ion-android-star" style="color:grey">
                           </i><i class="ion ion-android-star" style="color:grey"></i>
                        </span>
                        </div>
                      </li>
                      <!-- /.item -->
                    </ul>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="javascript:void(0)" class="uppercase">View All</a>
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!--/. container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2019-<?php echo date("Y");?> <a href="http://connect-academy.com/">Sky-store</a>.</strong>
      All rights reserved.
      <!-- Load Facebook SDK for JavaScript -->
      <span class="float-right badge bg-success"> <a href="https://wa.me/254740590663" class="nav-link">Whatsapp us</a></span>

    </footer>
  </div>
  <!-- ./wrapper -->
    <script src="dist/js/utils.js"></script>
<script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->

  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="dist/js/demo.js"></script>

  <!-- PAGE PLUGINS -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <!-- ChartJS -->

  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- PAGE SCRIPTS -->
  <script src="dist/js/pages/dashboard2.js"></script>


  <!-- SweetAlert2 -->
  <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- Toastr -->
  <script src="plugins/toastr/toastr.min.js"></script>
  <SCRIPT LANGUAGE="JavaScript">
  function showDate() {
    var now = new Date();
    var days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
    var months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    var date = ((now.getDate() < 10) ? "0" : "") + now.getDate();

    function fourdigits(number) {
      return (number < 1000) ? number + 1900 : number;
    }

    tnow = new Date();
    thour = now.getHours();
    tmin = now.getMinutes();
    tsec = now.getSeconds();

    if (tmin <= 9) {
      tmin = "0" + tmin;
    }
    if (tsec <= 9) {
      tsec = "0" + tsec;
    }
    if (thour < 10) {
      thour = "0" + thour;
    }

    today = days[now.getDay()] + ", " + date + " " + months[now.getMonth()] + ", " + (fourdigits(now.getYear())) + " - " + thour + ":" + tmin + ":" + tsec;
    document.getElementById("dateDiv").innerHTML = today;
  }
  setInterval("showDate()", 1000);
</script>
<script type="text/javascript">
  jQuery(function() {
    menudiv = jQuery(".elementor-column-wrap");
    jQuery(window).on("click", function(event) {
      if (menudiv.has(event.target).length == 0 && !menudiv.is(event.target)) {
        menudiv.hide();
        //or  menudiv.removeClass("in or something else");
      }
    });
  });
</script>


  <script type="text/javascript">
    $(function() {
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 4000
      });

      $('.swalDefaultSuccess').click(function() {
        Toast.fire({
          icon: 'success',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultInfo').click(function() {
        Toast.fire({
          icon: 'info',
          title: 'Grab a copy of our store Magazine to see a list of all companies.'
        })
      });
      $('.swalDefaultError').click(function() {
        Toast.fire({
          icon: 'error',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultWarning').click(function() {
        Toast.fire({
          icon: 'warning',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultQuestion').click(function() {
        Toast.fire({
          icon: 'question',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });

      $('.toastrDefaultSuccess').click(function() {
        toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
      $('.toastrDefaultInfo').click(function() {
        toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
      $('.toastrDefaultError').click(function() {
        toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
      $('.toastrDefaultWarning').click(function() {
        toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });

      $('.toastsDefaultDefault').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultTopLeft').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          position: 'topLeft',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultBottomRight').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          position: 'bottomRight',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultBottomLeft').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          position: 'bottomLeft',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultAutohide').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
          autohide: true,
          delay: 750,
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultNotFixed').click(function() {
        $(document).Toasts('create', {
          title: 'Toast Title',
        })
      });
      $('.toastsDefaultFullImage').click(function() {
        $(document).Toasts('create', {
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          image: '../dist/img/avatar6.png',
          imageAlt: 'User Picture',
        })
      });
      $('.toastsDefaultSuccess').click(function() {
        $(document).Toasts('create', {
          class: 'bg-success',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultInfo').click(function() {
        $(document).Toasts('create', {
          class: 'bg-info',
          title: '  Mobicash',
          subtitle: 'online-loan',
          body: 'Submit your application form. Sit back and relax as we do everything for you.'
        })
      });
      $('.toastsDefaultWarning').click(function() {
        $(document).Toasts('create', {
          class: 'bg-warning',
          title: 'Delivey',
          subtitle: 'Outlets',
          body: 'We came, we promised, we delivered and we are about to conquer visit out outlet today and get services free of charge.'
        })
      });
      $('.toastsDefaultDanger').click(function() {
        $(document).Toasts('create', {
          class: 'bg-danger',
          title: 'T',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultMaroon').click(function() {
        $(document).Toasts('create', {
          class: 'bg-maroon',
          title: 'Mobicash',
          subtitle: 'online',
          body: 'Do you have a registered group? contact us for more information.'
        })
      });
    });

  </script>
</body>

</html>
