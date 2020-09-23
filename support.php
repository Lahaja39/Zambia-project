<?php
  $conn = mysqli_connect("localhost", "robaa", "Lahaja40", "updated_ecom_store");
  $results = mysqli_query($conn, "SELECT * FROM customers");
  $customers = mysqli_fetch_all($results, MYSQLI_ASSOC);
?>
<?php
    session_start();
    if(!isset($_SESSION["customer_email"])) {
        header("location:login.php");
      }
      ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Mobicash| Support</title>
  <!-- SweetAlert2 -->
  <link rel=icon href="dist/img/lipisha.ico">
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
                      <img src="dist/img/credit-cards.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                      <div class="media-body">
                        <h3 class="dropdown-item-title text-primary">
                          Support <i class="ion ion-checkmark-circled"></i>
                          <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm">Your account is now active</p>
                        <p class="text-sm text-muted"></p>
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
          <div class="info">  <span class="brand-text font-weight-light"><span style="color:#ff0000;">M</span><span style="color:#ff4000;">O</span><span style="color:#ff7f00;">B</span><span style="color:#ffbf00;">I</span><!--<span style="color:#ffff00;">--></span><span style="color:#80ff00;">
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
            <div class="card-body">
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-ban"></i> Alert!</h5>
          We provide a wide range of products and services that aim to deliver the best
possible service to all our customers. We will strive to ensure that no customer
is unable to use, or is disadvantaged in accessing, our products and services. We always act
to avoid and eliminate discrimination against any customer.
              </div>
          <div class="row">
            <div class="col-md-4">
              <!-- DIRECT CHAT PRIMARY -->
              <div class="card text-sm card-primary cardutline direct-chat direct-chat-primary">
                <div class="card-header">
                  <h3 class="card-title">Payment</h3>

                  <div class="card-tools">
                    <span data-toggle="tooltip" title="3 New Messages" class="badge bg-primary"></span>
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
                  <div class="direct-chat-messages">
                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-left">Tiwonge</span>
                        <span class="direct-chat-timestamp float-right"></span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="dist/img/avatar6.png" alt="Message User Image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        How do I pay on Mobicash?
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-right">Support <i class="ion ion-checkmark-circled"></i></span>
                        <span class="direct-chat-timestamp float-left"></span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                You can choose from the different payment methods available on Mobicash. Please find below the list of available payment methods:<br>

 <li>MTN mobile money</li>
<li>ZAMTEL</li>

                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->
                      <!-- Conversations are loaded here -->

                        <!-- Message. Default to the left -->
                        <div class="direct-chat-msg">
                          <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">Tiwonge</span>
                            <span class="direct-chat-timestamp float-right"></span>
                          </div>
                          <!-- /.direct-chat-infos -->
                          <img class="direct-chat-img" src="dist/img/avatar6.png" alt="Message User Image">
                          <!-- /.direct-chat-img -->
                          <div class="direct-chat-text">
                            I'm i required to pay any fee to get a loan?
                          </div>
                          <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->

    <!-- Message to the right -->
    <div class="direct-chat-msg right">
      <div class="direct-chat-infos clearfix">
        <span class="direct-chat-name float-right">Support <i class="ion ion-checkmark-circled"></i></span>
        <span class="direct-chat-timestamp float-left"></span>
      </div>
      <!-- /.direct-chat-infos -->
      <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image">
      <!-- /.direct-chat-img -->
      <div class="direct-chat-text">
No. However, you should atleast have savings in your Mobicash account to be able to initiate transactions.
      <!-- /.direct-chat-text -->
    </div>
    <!-- /.direct-chat-msg -->

                  <!--/.direct-chat-messages-->
  <!-- Message. Default to the left -->
  <div class="direct-chat-msg">
    <div class="direct-chat-infos clearfix">
      <span class="direct-chat-name float-left">Tiwonge</span>
      <span class="direct-chat-timestamp float-right"></span>
    </div>
    <!-- /.direct-chat-infos -->
    <img class="direct-chat-img" src="dist/img/avatar6.png" alt="Message User Image">
    <!-- /.direct-chat-img -->
    <div class="direct-chat-text">
    Will that savings be returned?
    </div>
    <!-- /.direct-chat-text -->
  </div>
  <!-- /.direct-chat-msg -->

  <!-- Message to the right -->
  <div class="direct-chat-msg right">
    <div class="direct-chat-infos clearfix">
      <span class="direct-chat-name float-right">Support <i class="ion ion-checkmark-circled"></i></span>
      <span class="direct-chat-timestamp float-left"></span>
    </div>
    <!-- /.direct-chat-infos -->
    <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image">
    <!-- /.direct-chat-img -->
    <div class="direct-chat-text">
    Yes.savings are Withdrawalable you can Withdraw anytime you want.
    </div>
    <!-- /.direct-chat-text -->
  </div>
  <!-- /.direct-chat-msg -->

      <!-- Message. Default to the left -->
      <div class="direct-chat-msg">
        <div class="direct-chat-infos clearfix">
          <span class="direct-chat-name float-left">Tiwonge</span>
          <span class="direct-chat-timestamp float-right"></span>
        </div>
        <!-- /.direct-chat-infos -->
        <img class="direct-chat-img" src="dist/img/avatar6.png" alt="Message User Image">
        <!-- /.direct-chat-img -->
        <div class="direct-chat-text">
          What steps does Mobicash take to prevent card fraud?
        </div>
        <!-- /.direct-chat-text -->
      </div>
      <!-- /.direct-chat-msg -->

<!-- Message to the right -->
<div class="direct-chat-msg right">
<div class="direct-chat-infos clearfix">
<span class="direct-chat-name float-right">Support <i class="ion ion-checkmark-circled"></i></span>
<span class="direct-chat-timestamp float-left"></span>
</div>
<!-- /.direct-chat-infos -->
<img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image">
<!-- /.direct-chat-img -->
<div class="direct-chat-text">
Fraud detection and prevention are very important to us. We take all steps to ensure that transactions are genuine and that our customer's details are completely secure. Online payments are monitored continuously for suspicious activity and some transactions are verified manually if we feel that its not authorized by the owner of the card.
</div>
<!-- /.direct-chat-text -->
</div>
<!-- /.direct-chat-msg -->









      <div class="direct-chat-msg">
        <div class="direct-chat-infos clearfix">
          <span class="direct-chat-name float-left">Tiwonge</span>
          <span class="direct-chat-timestamp float-right"></span>
        </div>
        <!-- /.direct-chat-infos -->
        <img class="direct-chat-img" src="dist/img/avatar6.png" alt="Message User Image">
        <!-- /.direct-chat-img -->
        <div class="direct-chat-text">
      Can i be asked of any other fee ?
        </div>
        <!-- /.direct-chat-text -->
      </div>
      <!-- /.direct-chat-msg -->

      <!-- Message to the right -->
      <div class="direct-chat-msg right">
        <div class="direct-chat-infos clearfix">
          <span class="direct-chat-name float-right">Support <i class="ion ion-checkmark-circled"></i></span>
          <span class="direct-chat-timestamp float-left"></span>
        </div>
        <!-- /.direct-chat-infos -->
        <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image">
        <!-- /.direct-chat-img -->
        <div class="direct-chat-text">

      The Borrower shall pay the Facility Fees and all other fees,
commission costs and charges set out in the Letter and
the Terms and Conditions in accordance with Mobicash standard tariff guide from time to time.

        </div>
        <!-- /.direct-chat-text -->
      </div>
      <!-- /.direct-chat-msg -->
        <!-- Conversations are loaded here -->

          <!-- Message. Default to the left -->
          <div class="direct-chat-msg">
            <div class="direct-chat-infos clearfix">
              <span class="direct-chat-name float-left">Tiwonge</span>
              <span class="direct-chat-timestamp float-right"></span>
            </div>
            <!-- /.direct-chat-infos -->
            <img class="direct-chat-img" src="dist/img/avatar6.png" alt="Message User Image">
            <!-- /.direct-chat-img -->
            <div class="direct-chat-text">
            Why was my Credit/Debit Card declined?
            </div>
            <!-- /.direct-chat-text -->
          </div>
          <!-- /.direct-chat-msg -->

<!-- Message to the right -->
<div class="direct-chat-msg right">
<div class="direct-chat-infos clearfix">
<span class="direct-chat-name float-right">Support <i class="ion ion-checkmark-circled"></i></span>
<span class="direct-chat-timestamp float-left"></span>
</div>
<!-- /.direct-chat-infos -->
<img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image">
<!-- /.direct-chat-img -->
<div class="direct-chat-text">When you experience trouble completing payment through Mobile Money, first thing to do is to make sure that your account is activated for transactions and that you have enough funds/limit to complete the transaction. Only available options are;<br> 1.MTN <br> 2. ZAMTEL
</div>
</div>
<!-- /.direct-chat-text -->
</div>
<!-- /.direct-chat-msg -->

    <!--/.direct-chat-messages-->
<!-- Message. Default to the left -->
<div class="direct-chat-msg">
<div class="direct-chat-infos clearfix">
<span class="direct-chat-name float-left">Tiwonge</span>
<span class="direct-chat-timestamp float-right"></span>
</div>
<!-- /.direct-chat-infos -->
<img class="direct-chat-img" src="dist/img/avatar6.png" alt="Message User Image">
<!-- /.direct-chat-img -->
<div class="direct-chat-text">
What should I do when I cannot see a payment option?
</div>
<!-- /.direct-chat-text -->
</div>
<!-- /.direct-chat-msg -->

<!-- Message to the right -->
<div class="direct-chat-msg right">
<div class="direct-chat-infos clearfix">
<span class="direct-chat-name float-right">Support <i class="ion ion-checkmark-circled"></i></span>
<span class="direct-chat-timestamp float-left"></span>
</div>
<!-- /.direct-chat-infos -->
<img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image">
<!-- /.direct-chat-img -->
<div class="direct-chat-text">
Contact us and we will help you right there.
</div>
<!-- /.direct-chat-text -->
</div>
<!-- /.direct-chat-msg -->

<!-- Message. Default to the left -->
<div class="direct-chat-msg">
<div class="direct-chat-infos clearfix">
<span class="direct-chat-name float-left">Tiwonge</span>
<span class="direct-chat-timestamp float-right"></span>
</div>
<!-- /.direct-chat-infos -->
<img class="direct-chat-img" src="dist/img/avatar6.png" alt="Message User Image">
<!-- /.direct-chat-img -->
<div class="direct-chat-text">
Can rates change?
</div>
<!-- /.direct-chat-text -->
</div>
<!-- /.direct-chat-msg -->

<!-- Message to the right -->
<div class="direct-chat-msg right">
<div class="direct-chat-infos clearfix">
<span class="direct-chat-name float-right">Support <i class="ion ion-checkmark-circled"></i></span>
<span class="direct-chat-timestamp float-left"></span>
</div>
<!-- /.direct-chat-infos -->
<img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image">
<!-- /.direct-chat-img -->
<div class="direct-chat-text">Yes,Mobicash may from time to time at its sole discretion and within the limits permitted by law revise the applicable rate or rates of interest payable provided however that Mobicash  shall inform the Borrower or such other relevant
party, by way of 30 days written notice prior to effecting any change.
</div>
<!-- /.direct-chat-text -->
</div>
<!-- /.direct-chat-msg -->
</div>

<!--/.direct-chat-messages-->
                  </div>
                  <!-- /.direct-chat-pane -->

                <!-- /.card-body -->
                <div class="card-footer">
                  <form action="#" method="post">
                    <div class="input-group">
                      <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-append">
                        <button type="submit" class="btn btn-primary">Send</button>
                      </span>
                    </div>
                  </form>
                </div>
                <!-- /.card-footer-->
              </div>
              <!--/.direct-chat -->
            </div>
            <!-- /.col -->

            <div class="col-md-4">
              <!-- DIRECT CHAT SUCCESS -->
              <div class="card card-success text-sm cardutline direct-chat direct-chat-success">
                <div class="card-header">
                  <h3 class="card-title">Loan</h3>

                  <div class="card-tools">
                    <span data-toggle="tooltip" title="3 New Messages" class="badge bg-success"></span>
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
                  <div class="direct-chat-messages">
                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-left">Nyamwali</span>
                        <span class="direct-chat-timestamp float-right"> </span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="dist/img/avatar6.png" alt="Message User Image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                    How can i borrow from Mobicash?
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-right">Support <i class="ion ion-checkmark-circled"></i></span>
                        <span class="direct-chat-timestamp float-left"> </span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">

<li>Register an account,</li>
<li>Read our terms,</li>
<li>Submit your application form </li>
<li>Wait for your Loan Limit to be processed,</li>
<li>Once you have your Loan limit,Deposit your Savings ,</li>

<li>Click on 'Save now'(available in your profile) to proceed to the payment portal and complete your Deposit.<li>
<li>After savings wait for atleast 5 mins the click on 'Withdrawr'. Enter your number and your Loan will be deposited to your Mobile money account straight away.In case you have a doubt about whether the confirmation was done or not, do not hesitate to contact our Customer Service Call Center
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->


                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-left">Nyamwali</span>
                        <span class="direct-chat-timestamp float-right"> </span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="dist/img/avatar6.png" alt="Message User Image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                    My payment was processed successfully but I didn't get any code confirmation. What should I do?
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-right">Support <i class="ion ion-checkmark-circled"></i></span>
                        <span class="direct-chat-timestamp float-left"> </span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">Please get in touch with our Customer Service Team on <a href="https://wa.me/254740590663">whatsapp</a>
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>




                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-left">Nyamwali</span>
                        <span class="direct-chat-timestamp float-right"> </span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="dist/img/avatar6.png" alt="Message User Image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                Why am I having trouble on Withdrawal?
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-right">Support <i class="ion ion-checkmark-circled"></i></span>
                        <span class="direct-chat-timestamp float-left"> </span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">If you are having trouble on Withdrawal, please make sure that you have completed all required steps. If you still have problems, this may need customer care assistant support, Kindly contact us.
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>



                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-left">Nyamwali</span>
                        <span class="direct-chat-timestamp float-right"> </span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="dist/img/avatar6.png" alt="Message User Image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                    How quickly can I get my Loan?
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-right">Support <i class="ion ion-checkmark-circled"></i></span>
                        <span class="direct-chat-timestamp float-left"> </span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">We do our best to get your Loan disbursed by the time listed on your dashboard. You can find more information about our loan timelines
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>



                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-left">Nyamwali</span>
                        <span class="direct-chat-timestamp float-right"> </span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="dist/img/avatar6.png" alt="Message User Image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                    My Loan is delayed, What should I do?
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-right">Support <i class="ion ion-checkmark-circled"></i></span>
                        <span class="direct-chat-timestamp float-left"> </span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">We do our best to ensure disbursement are within the stipulated timeline. However you can also check your Loan  progress by entering the loan tracking number. In the event the loan is past timeline please contact our customer support team
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>




                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-left">Nyamwali</span>
                        <span class="direct-chat-timestamp float-right"> </span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="dist/img/avatar6.png" alt="Message User Image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                    How do I know my order has been disbursed?
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-right">Support <i class="ion ion-checkmark-circled"></i></span>
                        <span class="direct-chat-timestamp float-left"> </span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">Upon confirmation of your loan, we will send you a notification via email. We'll also send you a message as soon as your loan has been processed and disbursed .                </div>
                      <!-- /.direct-chat-text -->
                    </div>



                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-left">Nyamwali</span>
                        <span class="direct-chat-timestamp float-right"> </span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="dist/img/avatar6.png" alt="Message User Image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                    How can I track my Loan?
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-right">Support <i class="ion ion-checkmark-circled"></i></span>
                        <span class="direct-chat-timestamp float-left"> </span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">We will update you on the status of your loan via email on the progressive stages. Once the loan status is approved you can track its stage using the tracking number
                                     </div>
                      <!-- /.direct-chat-text -->
                    </div>

                  </div>
                  <!--/.direct-chat-messages-->
                  <!-- /.direct-chat-pane -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <form action="#" method="post">
                    <div class="input-group">
                      <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-append">
                        <button type="submit" class="btn btn-success">Send</button>
                      </span>
                    </div>
                  </form>
                </div>
                <!-- /.card-footer-->
              </div>
              <!--/.direct-chat -->
            </div>
            <!-- /.col -->

            <div class="col-md-4">
              <!-- DIRECT CHAT WARNING -->
              <div class="card card-warning text-sm direct-chat direct-chat-warning">
                <div class="card-header">
                  <h3 class="card-title">Mobicash</h3>

                  <div class="card-tools">
                    <span data-toggle="tooltip" title="3 New Messages" class="badge bg-danger"></span>
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
                  <div class="direct-chat-messages">
                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-left">Massiye</span>
                        <span class="direct-chat-timestamp float-right"> </span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="dist/img/avatar6.png" alt="Message User Image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                      Where is your office located?
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-right">Support <i class="ion ion-checkmark-circled"></i></span>
                <span class="direct-chat-timestamp float-left"></span>
                      </div>
                      <!-- /.direct-chat-infos -->
                      <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                    19275 Manda Hill Rd, Lusaka, Zambia Near Manda hill Mall.
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->




                          <div class="direct-chat-msg">
                            <div class="direct-chat-infos clearfix">
                              <span class="direct-chat-name float-left">Massiye</span>
                              <span class="direct-chat-timestamp float-right"> </span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="dist/img/avatar6.png" alt="Message User Image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                            What happens if i don't repay on time?
                            </div>
                            <!-- /.direct-chat-text -->
                          </div>
                          <!-- /.direct-chat-msg -->

                          <!-- Message to the right -->
                          <div class="direct-chat-msg right">
                            <div class="direct-chat-infos clearfix">
                              <span class="direct-chat-name float-right">Support <i class="ion ion-checkmark-circled"></i></span>
                      <span class="direct-chat-timestamp float-left"></span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                           The Account holder should full understands that failure to settle the Mobile
Loan on the due date shall result in the same being rolled over as a fresh
Mobile loan on the same terms as those on which the rolled over Mobile Loan
was availed. Such rollover shall persist until the total amount due  under the
Mobile Loan and subsequent roll overs are fully settled.
                            </div>
                            <!-- /.direct-chat-text -->
                          </div>
                          <!-- /.direct-chat-msg -->


                                <div class="direct-chat-msg">
                                  <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-left">Massiye</span>
                                    <span class="direct-chat-timestamp float-right"> </span>
                                  </div>
                                  <!-- /.direct-chat-infos -->
                                  <img class="direct-chat-img" src="dist/img/avatar6.png" alt="Message User Image">
                                  <!-- /.direct-chat-img -->
                                  <div class="direct-chat-text">
                                  Are the terms and conditions permanent?
                                  </div>
                                  <!-- /.direct-chat-text -->
                                </div>
                                <!-- /.direct-chat-msg -->

                                <!-- Message to the right -->
                                <div class="direct-chat-msg right">
                                  <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-right">Support <i class="ion ion-checkmark-circled"></i></span>
                            <span class="direct-chat-timestamp float-left"></span>
                                  </div>
                                  <!-- /.direct-chat-infos -->
                                  <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image">
                                  <!-- /.direct-chat-img -->
                                  <div class="direct-chat-text">
                                No. Mobicash reserves the right to vary, amend or replace all or any of
these Conditions at any time without prior notice. Mobicash shall
notify the Account holder of any changes made to these Conditions
as soon as is practicable and by the most expedient means as determined by
the group provided that failure to make such notification shall
not invalidate the changes.
                                  </div>
                                  <!-- /.direct-chat-text -->
                                </div>
                                <!-- /.direct-chat-msg -->

                                      <div class="direct-chat-msg">
                                        <div class="direct-chat-infos clearfix">
                                          <span class="direct-chat-name float-left">Massiye</span>
                                          <span class="direct-chat-timestamp float-right"> </span>
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class="direct-chat-img" src="dist/img/avatar6.png" alt="Message User Image">
                                        <!-- /.direct-chat-img -->
                                        <div class="direct-chat-text">
                                        What happens if i fail to repay?
                                        </div>
                                        <!-- /.direct-chat-text -->
                                      </div>
                                      <!-- /.direct-chat-msg -->

                                      <!-- Message to the right -->
                                      <div class="direct-chat-msg right">
                                        <div class="direct-chat-infos clearfix">
                                          <span class="direct-chat-name float-right">Support <i class="ion ion-checkmark-circled"></i></span>
                                  <span class="direct-chat-timestamp float-left"></span>
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image">
                                        <!-- /.direct-chat-img -->
                                        <div class="direct-chat-text">Upon the occurrence and during the continuance of default by the Account
holder, Mobicash is hereby authorized at any time and from time to time, without
notice to Borrower and to the fullest extent permitted by law, to set-off and apply
any and all deposits held in the Account holders other related accounts held with
the Mobicash.


                                        </div>
                                        <!-- /.direct-chat-text -->
                                      </div>
                                      <!-- /.direct-chat-msg -->


                                            <div class="direct-chat-msg">
                                              <div class="direct-chat-infos clearfix">
                                                <span class="direct-chat-name float-left">Massiye</span>
                                                <span class="direct-chat-timestamp float-right"> </span>
                                              </div>
                                              <!-- /.direct-chat-infos -->
                                              <img class="direct-chat-img" src="dist/img/avatar6.png" alt="Message User Image">
                                              <!-- /.direct-chat-img -->
                                              <div class="direct-chat-text">
                                          Can my account details be disclosed?
                                              </div>
                                              <!-- /.direct-chat-text -->
                                            </div>
                                            <!-- /.direct-chat-msg -->

                                            <!-- Message to the right -->
                                            <div class="direct-chat-msg right">
                                              <div class="direct-chat-infos clearfix">
                                                <span class="direct-chat-name float-right">Support <i class="ion ion-checkmark-circled"></i></span>
                                        <span class="direct-chat-timestamp float-left"></span>
                                              </div>
                                              <!-- /.direct-chat-infos -->
                                              <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image">
                                              <!-- /.direct-chat-img -->
                                              <div class="direct-chat-text">
                                           The Account holder agrees that Mobicash may disclose details
relating to the MobileLoan including details of default in servicing the
Operative Account to any third party (including credit agencies) for
the purpose of evaluating the Account holder’s credit worthiness or
for any other lawful purpose.
                                              </div>
                                              <!-- /.direct-chat-text -->
                                            </div>
                                            <!-- /.direct-chat-msg -->





                                                  <div class="direct-chat-msg">
                                                    <div class="direct-chat-infos clearfix">
                                                      <span class="direct-chat-name float-left">Massiye</span>
                                                      <span class="direct-chat-timestamp float-right"> </span>
                                                    </div>
                                                    <!-- /.direct-chat-infos -->
                                                    <img class="direct-chat-img" src="dist/img/avatar6.png" alt="Message User Image">
                                                    <!-- /.direct-chat-img -->
                                                    <div class="direct-chat-text">
                                                What laws governs this Loan?
                                                    </div>
                                                    <!-- /.direct-chat-text -->
                                                  </div>
                                                  <!-- /.direct-chat-msg -->

                                                  <!-- Message to the right -->
                                                  <div class="direct-chat-msg right">
                                                    <div class="direct-chat-infos clearfix">
                                                      <span class="direct-chat-name float-right">Support <i class="ion ion-checkmark-circled"></i></span>
                                              <span class="direct-chat-timestamp float-left"></span>
                                                    </div>
                                                    <!-- /.direct-chat-infos -->
                                                    <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image">
                                                    <!-- /.direct-chat-img -->
                                                    <div class="direct-chat-text">
                                                These Mobile Loan Conditions are governed in all respects by
the Laws of Zambia and East Africa.
                                                    </div>
                                                    <!-- /.direct-chat-text -->
                                                  </div>



                                                  <!-- /.direct-chat-msg -->







                          <div class="direct-chat-msg">
                            <div class="direct-chat-infos clearfix">
                              <span class="direct-chat-name float-left">Massiye</span>
                              <span class="direct-chat-timestamp float-right"> </span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="dist/img/avatar6.png" alt="Message User Image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                  Will somebody contact me before disbursement of my loan?
                            </div>
                            <!-- /.direct-chat-text -->
                          </div>
                          <!-- /.direct-chat-msg -->

                          <!-- Message to the right -->
                          <div class="direct-chat-msg right">
                            <div class="direct-chat-infos clearfix">
                              <span class="direct-chat-name float-right">Support <i class="ion ion-checkmark-circled"></i></span>
                      <span class="direct-chat-timestamp float-left"></span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                        Before disbursement you will receive a text notification with the disbursement associate’s details. Our disbursement agents will then contact you to confirm your identity and exact location.
                            </div>
                            <!-- /.direct-chat-text -->
                          </div>
                          <!-- /.direct-chat-msg -->


                                <div class="direct-chat-msg">
                                  <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-left">Massiye</span>
                                    <span class="direct-chat-timestamp float-right"> </span>
                                  </div>
                                  <!-- /.direct-chat-infos -->
                                  <img class="direct-chat-img" src="dist/img/avatar6.png" alt="Message User Image">
                                  <!-- /.direct-chat-img -->
                                  <div class="direct-chat-text">
                                  Can i change my address?
                                  </div>
                                  <!-- /.direct-chat-text -->
                                </div>
                                <!-- /.direct-chat-msg -->

                                <!-- Message to the right -->
                                <div class="direct-chat-msg right">
                                  <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-right">Support <i class="ion ion-checkmark-circled"></i></span>
                            <span class="direct-chat-timestamp float-left"></span>
                                  </div>
                                  <!-- /.direct-chat-infos -->
                                  <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image">
                                  <!-- /.direct-chat-img -->
                                  <div class="direct-chat-text">
                          The Account holder shall notify Mobicash via customer service of any change of address.
Until such notice is received the Account holder’s address shall be that stated in
account opening documents as held by the Mobicash.
                                  </div>
                                  <!-- /.direct-chat-text -->
                                </div>
                                <!-- /.direct-chat-msg -->

                                      <div class="direct-chat-msg">
                                        <div class="direct-chat-infos clearfix">
                                          <span class="direct-chat-name float-left">Massiye</span>
                                          <span class="direct-chat-timestamp float-right"> </span>
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class="direct-chat-img" src="dist/img/avatar6.png" alt="Message User Image">
                                        <!-- /.direct-chat-img -->
                                        <div class="direct-chat-text">
                                    Will my personal information pass through Credit Reference Bereau
                                        </div>
                                        <!-- /.direct-chat-text -->
                                      </div>
                                      <!-- /.direct-chat-msg -->

                                      <!-- Message to the right -->
                                      <div class="direct-chat-msg right">
                                        <div class="direct-chat-infos clearfix">
                                          <span class="direct-chat-name float-right">Support <i class="ion ion-checkmark-circled"></i></span>
                                  <span class="direct-chat-timestamp float-left"></span>
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image">
                                        <!-- /.direct-chat-img -->
                                        <div class="direct-chat-text">The Account holder expressly consents and allows Mobicash to forward
personal data and full file credit information to licensed credit
reference bureaus in accordance with the Banking (Credit Reference
Bureaus) Regulations, 2008.
                                        </div>
                                        <!-- /.direct-chat-text -->
                                      </div>
                                      <!-- /.direct-chat-msg -->


                                            <div class="direct-chat-msg">
                                              <div class="direct-chat-infos clearfix">
                                                <span class="direct-chat-name float-left">Massiye</span>
                                                <span class="direct-chat-timestamp float-right"> </span>
                                              </div>
                                              <!-- /.direct-chat-infos -->
                                              <img class="direct-chat-img" src="dist/img/avatar6.png" alt="Message User Image">
                                              <!-- /.direct-chat-img -->
                                              <div class="direct-chat-text">
                                        I have a complaint about your Loan agents. What should I do?
                                              </div>
                                              <!-- /.direct-chat-text -->
                                            </div>
                                            <!-- /.direct-chat-msg -->

                                            <!-- Message to the right -->
                                            <div class="direct-chat-msg right">
                                              <div class="direct-chat-infos clearfix">
                                                <span class="direct-chat-name float-right">Support <i class="ion ion-checkmark-circled"></i></span>
                                        <span class="direct-chat-timestamp float-left"></span>
                                              </div>
                                              <!-- /.direct-chat-infos -->
                                              <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image">
                                              <!-- /.direct-chat-img -->
                                              <div class="direct-chat-text">
                                        Apologies for the inconvenience caused, please get in touch our Customer Service Call Center so we can make things right.
                                              </div>
                                              <!-- /.direct-chat-text -->
                                            </div>
                                            <!-- /.direct-chat-msg -->





                                                  <div class="direct-chat-msg">
                                                    <div class="direct-chat-infos clearfix">
                                                      <span class="direct-chat-name float-left">Massiye</span>
                                                      <span class="direct-chat-timestamp float-right"> </span>
                                                    </div>
                                                    <!-- /.direct-chat-infos -->
                                                    <img class="direct-chat-img" src="dist/img/avatar6.png" alt="Message User Image">
                                                    <!-- /.direct-chat-img -->
                                                    <div class="direct-chat-text">
                                                  Is there any taxes?
                                                    </div>
                                                    <!-- /.direct-chat-text -->
                                                  </div>
                                                  <!-- /.direct-chat-msg -->

                                                  <!-- Message to the right -->
                                                  <div class="direct-chat-msg right">
                                                    <div class="direct-chat-infos clearfix">
                                                      <span class="direct-chat-name float-right">Support <i class="ion ion-checkmark-circled"></i></span>
                                              <span class="direct-chat-timestamp float-left"></span>
                                                    </div>
                                                    <!-- /.direct-chat-infos -->
                                                    <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="Message User Image">
                                                    <!-- /.direct-chat-img -->
                                                    <div class="direct-chat-text">
                                            All sums payable by the Borrower to Mobicash in connection with the Facilities shall be paid together with
any taxes that may be payable on such sums, at the rate required by law.
                                                    </div>
                                                    <!-- /.direct-chat-text -->
                                                  </div>
                                                  <!-- /.direct-chat-msg -->




                  </div>
                  <!-- /.direct-chat-pane -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <form action="#" method="post">
                    <div class="input-group">
                      <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-append">
                        <button type="submit" class="btn btn-warning">Send</button>
                      </span>
                    </div>
                  </form>
                </div>
                <!-- /.card-footer-->
              </div>
              <!--/.direct-chat -->
            </div>
            <!-- /.col -->



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
<span class="float-right badge bg-success"> <a href="https://wa.me/254740590663" class="nav-link">Whatsapp us</a></span>
      </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
    <script src="dist/js/utils.js"></script>
<script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->

  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="dist/js/demo.js"></script>

</body>

</html>
