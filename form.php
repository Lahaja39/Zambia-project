<?php
    session_start();
    if(!isset($_SESSION["customer_email"])) {
        header("location:index.php");
      }
else{
    $conn=mysqli_connect("localhost", "robaa", "Lahaja40", "updated_ecom_store") or die("connection failed".mysqli_connect_error());
    $user = $_SESSION["customer_email"];
    $query = "SELECT * from customers where customer_email='$user'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        if($row = mysqli_fetch_assoc($result)) {
          $customer_confirm_code=$row['customer_confirm_code'];
$customer_id = $row['customer_id'];

            $customer_username=$row['customer_username'];
$email=$row['customer_email'];
  $created =$row['Created'];
                    }
    } else {
        echo "0 results";
    }

}
?>


              <?php

              // connect to database
              $con = mysqli_connect("localhost", "robaa", "Lahaja40", "updated_ecom_store");

              if (!$con) {
                die("Error connecting to database: " . mysqli_connect_error());
              }
              $errors = array();
              	// variable declaration
                function getRealUserIp(){
                    switch(true){
                      case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
                      case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
                      case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
                      default : return $_SERVER['REMOTE_ADDR'];
                    }
                 }
                /// IP address code Ends /////
?>
              <?php
              $bad=array();

              if(isset($_POST['send'])){



              $Friend_fname = mysqli_real_escape_string($con, $_POST['Friend_fname']);

              $Friend_lname = mysqli_real_escape_string($con, $_POST['Friend_lname']);
              $Friend_phone = mysqli_real_escape_string($con, $_POST['Friend_phone']);
              $Friend_amount = mysqli_real_escape_string($con, $_POST['Friend_amount']);
              $Friend_email= mysqli_real_escape_string($con, $_POST['Friend_email']);
                $Friend_occupation= mysqli_real_escape_string($con, $_POST['Friend_occupation']);
                $Friend_national= mysqli_real_escape_string($con, $_POST['Friend_national']);
                $Friend_referral= mysqli_real_escape_string($con, $_POST['Friend_referral']);
          $Friend_town = mysqli_real_escape_string($con, $_POST['Friend_town']);


              $Friend_image = $_FILES['Friend_image']['name'];

              $Friend_image_tmp = $_FILES['Friend_image']['tmp_name'];

              $Friend_ip = getRealUserIp();

              if(!filter_var($Friend_email, FILTER_VALIDATE_EMAIL)){
                {
                  array_push($errors, "Your Email is not a valid email address");
                }

              }

              $allowed = array('jpeg','jpg','png');

              $file_extension = pathinfo($Friend_image, PATHINFO_EXTENSION);

              if(!in_array($file_extension,$allowed)){
                {
                  array_push($errors, "Your File Format,Extension Is Not Supported.");
                }


              }else{

              move_uploaded_file($Friend_image_tmp,"dist/persons/$Friend_image");

              }
            $true_email = "SELECT * FROM customers WHERE customer_id='$customer_id' AND customer_confirm_code='$Friend_referral'";

            $fly_email = mysqli_query($con,$true_email);

            $checke_email = mysqli_num_rows($fly_email);

            if($checke_email == 1){

             array_push($bad, "You can't use your own code");
           }

else {
         $update_friend = "UPDATE friends set Friend_fname='$Friend_fname', Friend_lname='$Friend_lname', Friend_email='$Friend_email', Friend_town='$Friend_town',Friend_national='$Friend_national', Friend_amount='$Friend_amount',Friend_phone='$Friend_phone', Friend_occupation='$Friend_occupation',Friend_image='$Friend_image',Friend_referral='$Friend_referral',
                    Friend_ip='$Friend_ip' where customer_id='$customer_id'";
  // cod

$run_friend = mysqli_query($con,$update_friend);

if($run_friend){


	header('location: pages/examples/profile.php');

}
}
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Registration</title>
  <link rel=icon href="dist/img/lipisha.ico">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
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
          <a href="#" class="nav-link">Home</a>
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
      <a href="" class="brand-link">
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
          <div class="info">
 <div class="info">  <span class="brand-text font-weight-light"><span style="color:#ff0000;">M</span><span style="color:#ff4000;">O</span><span style="color:#ff7f00;">B</span><span style="color:#ffbf00;">I</span><!--<span style="color:#ffff00;">--></span><span style="color:#80ff00;">
             C</span><span style="color:#00ff00;">A</span><span style="color:#00ff80;">S</span><span style="color:#00ffff;">H</span></span></div>
          </div>
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
                     <a href="#" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Dashboard v1 </p>
                     </a>
                   </li>
                   <li class="nav-item">
                     <a href="#" class="nav-link active">
                       <i class="far fa-circle nav-icon text-warning"></i>
                       <p>Dashboard</p>
                     </a>
                   </li>

                 </ul>
               </li>
               <li class="nav-item">
                 <a href="#" class="nav-link">
                   <i class="nav-icon fas fa-th text-info"></i>
                   <p>
                     Profile
                     <span class="right badge badge-danger">New</span>
                   </p>
                 </a>
               </li>
               <li class="nav-header">LABELS</li>
               <li class="nav-item">
                 <a href="logout.php" class="nav-link">
                   <i class="nav-icon far fa-circle text-danger"></i>
                   <p class="text">Logout</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="#" class="nav-link">
                   <i class="nav-icon far fa-circle text-warning"></i>
                   <p>support</p>
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
               </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6" id="dateDiv">

              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Registration</a></li>


                </ol>
              </div>
              <div class="">
                <span class="error text-sm text-danger">
                  <?php foreach ($bad as $key => $value) {
                    // code...
                    echo "$value <br />" ;
                  } ?>

            </span>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <?php
        date_default_timezone_set('Africa/Lusaka');

        function facebook_time_ago($timestamp)
        {
             $time_ago = strtotime($timestamp);
             $current_time = time();
             $time_difference = $current_time - $time_ago;
             $seconds = $time_difference;
             $minutes      = round($seconds / 60 );           // value 60 is seconds
             $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec
             $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;
             $weeks          = round($seconds / 604800);          // 7*24*60*60;
             $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60
             $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60
             if($seconds <= 60)
             {
            return "Just Now";
          }
             else if($minutes <=60)
             {
            if($minutes==1)
                  {
              return "one minute ago";
            }
            else
                  {
              return "$minutes minutes ago";
            }
          }
             else if($hours <=24)
             {
            if($hours==1)
                  {
              return "an hour ago";
            }
                  else
                  {
              return "$hours hrs ago";
            }
          }
             else if($days <= 7)
             {
            if($days==1)
                  {
              return "yesterday";
            }
                  else
                  {
              return "$days days ago";
            }
          }
             else if($weeks <= 4.3) //4.3 == 52/12
             {
            if($weeks==1)
                  {
              return "a week ago";
            }
                  else
                  {
              return "$weeks weeks ago";
            }
          }
              else if($months <=12)
             {
            if($months==1)
                  {
              return "a month ago";
            }
                  else
                  {
              return "$months months ago";
            }
          }
             else
             {
            if($years==1)
                  {
              return "one year ago";
            }
                  else
                  {
              return "$years years ago";
            }
          }
        }
        ?>
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="text-warning text-md card-title">  <i class="ion ion-android-warning" style="color:red"></i>..You only see this page once kindly be keen</h3>


            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                  <div class="row">
                    <div class="col-12 col-sm-4">
                      <div class="info-box bg-light elevation-3">
                        <div class="info-box-content inner">
                          <span class="info-box-text text-center text-muted">Total loan</span>
                          <span class="info-box-number text-center text-info mb-0">0</span>
                        </div>
                          <div class="icon">
                            <i class="ion ion-bag" style="color:blue"></i>
                          </div>
                        </div>
                      </div>


                    <div class="col-12 col-sm-4">
                      <div class="info-box bg-light elevation-3">
                        <div class="info-box-content ">
                          <span class="info-box-text text-center text-muted">Total amount spent</span>
                          <span class="info-box-number text-center  mb-0 text-success">0.00</span>
                        </div>
                        <div class="icon">
                          <i class="ion ion-stats-bars" style="color:green"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-4">
                      <div class="info-box bg-light elevation-3">
                        <div class="info-box-content">
                          <span class="info-box-text text-center text-muted">Repayments</span>
                          <span class="info-box-number text-center text-warning mb-0">0 </span>
                        </div>
                          <span>

                            <div class="icon" color="primary">
                              <i class="ion ion-flag" style="color:red"></i>
                            </div>
                        </div>
                      </div>
                    </div>

                  <div class="row">
                    <div class="col-12">
                      <h4>Recent Activity</h4>
                        <div class="post">
                          <div class="user-block">
                              <img class="img-circle img-bordered-sm" src="dist/profiles/card.jpg" alt="user image">
                            <span class="username">
                              <a href="#">Support <i class="ion ion-checkmark-circled"></i></a>
                            </span>
                            <span class="description"><?php echo facebook_time_ago ("$created"); ?></span>
                          </div>
                          <!-- /.user-block -->
                          <p>
                            Your refferral code is <span class="text-sm text-info"><?php echo "  $customer_confirm_code"; ?> </span> share with friends to earn.<b>(Withdrawalable)</b>
                          </p>

                          <p>
                            <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Filev2</a>
                          </p>
                        </div>

                        <div class="post clearfix">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="dist/profiles/card.jpg" alt="user image">
                            <span class="username">
                              <a href="#">Support <i class="ion ion-checkmark-circled"></i></a>
                            </span>
                            <span class="description">Sent you a message - <?php echo facebook_time_ago ("$created"); ?></span>
                          </div>
                          <!-- /.user-block -->
                          <p>
                            2.1. You may not register to use our services if you are under 18 years of age (by using our marketplace or agreeing to  general terms and conditions, you warrant and represent to us that you are at least 18 years of age).</br />

2.2. You may register for an account to access our services by completing and submitting the registration form below.</br />

2.3. You represent and warrant that all information provided in the registration form is complete and accurate.</br />
2.4. If you register for an account with our marketplace, you will be asked to fully fill in the required fields and agree to terms of service:</br />
2.4.1. keep your Account confidential;<br />

2.5. Your account shall be used exclusively by you and you shall not transfer your account to any third party. If you authorize any third party to manage your account on your behalf this shall be at your own risk.<br />

2.6. We may suspend or cancel your account, and/or edit your account details, at any time in our sole discretion and without notice or explanation, providing that if we cancel any products or services you have paid for but not received, and you have not breached these general terms and conditions, we will refund you in respect of the same.<br />

2.7. You may cancel your account on our marketplace by contacting us as provided at section 23.<br />
                            Incase of any problem contact our listening and caring man strong customer service team available 7 days a week.
                          </p>
                          <p>
                            <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i>File 2</a>
                          </p>
                        </div>

                        <div class="post">
                          <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="dist/profiles/card.jpg" alt="user image">
                            <span class="username">
                              <a href="#">Support <i class="ion ion-checkmark-circled"></i></a>
                            </span>
                            <span class="description">Sent you a message - <?php echo facebook_time_ago ("$created"); ?></span>
                          </div>
                          <!-- /.user-block -->
                          <p>
                            1.Loanees agree to processing of their personal data in accordance with the terms of Mobicash’s Privacy and Cookie Notice. <br />
  2.Mobicash shall process all personal data obtained through the marketplace and related services in accordance with the terms of our Privacy and Cookie Notice and Privacy Policy.
                          </p>

                          <p>
                            <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i>File 1 v1</a>
                            <img class="img " style="width:300px;"src="dist/img/paypal.png" alt="">
                          </p>

                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                  <h3 class="text-primary"><i class="fas fa-paint-brush"></i> Mobi-cash</h3>
                  <p class="text-muted">

  					We're an international lending community that offers responsible, high-achieving people the chance to raise loans directly, it gives you an opportunity to apply for an Unsecured Online Loan.No paperwork, no long procedures. We are committed to arranging cash assistance for all.<br>
We eliminate the middleman so that we can more fully unleash someone’s business potential. Unlike more mainstream microloan websites that use local intermediary organizations, Mobicash is a direct community that eliminates intermediaries completely.we are committed to eradicating poverty and support youth to unleash their full potential by giving them reasonable loans.

  				</p>
                  <br>
                  <div class="text-muted">
                    <p class="text-sm">Client Company
                      <b class="d-block">Mobicash</b>
                    </p>
                    <p class="text-sm">community Leader
                      <b class="d-block">Mulkenga-Chilambo</b>
                    </p>
                  </div>

                  <h5 class="mt-5 text-muted">files</h5>
                  <ul class="list-unstyled">
                    <li>
                      <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
                    </li>
                    <li>
                      <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> Invoices</a>
                    </li>

                      <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Receipts</a>
                    </li>
                  </ul>
                  <div class="text-center mt-5 mb-3">
                    <a href="https://wa.me/254740590663" class="btn btn-sm btn-success">whatsapp</a>
                    <a href="#" class="btn btn-sm btn-warning">Report Abuse</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </section>
        <!-- /.content -->

      <!-- /.content-wrapper -->
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title"> <i class="ion ion-edit" style="color:white"></i>...Registration Form</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form"  id="quickForm" method="post"  enctype="multipart/form-data" action="">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-6">
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" name="Friend_fname" value="<?php echo @$_POST["Friend_fname"]; ?>"class="form-control"  placeholder="First Name">
                    </div>
                  </div>

                <div class="col-sm-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" name="Friend_lname" value="<?php echo @$_POST["Friend_lname"]; ?>"class="form-control" placeholder="Last Name">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
          <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input type="Tel" name="Friend_phone"class="form-control" placeholder="Phone Number" onkeypress="return isNumber(event)" id="extra7" value="<?php echo @$_POST["Friend_phone"]; ?>">
            <span class="error text-sm text-danger">Please enter a valid MTN number</span>
          </div>
        </div>

      <div class="col-sm-6">
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="Friend_email" value="<?php echo @$_POST["Friend_email"]; ?>"class="form-control" id="exampleInputEmail1" placeholder="Enter email">

    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-6">
<div class="form-group">
  <label for="exampleInputEmail1">National identity Number</label>
  <input type="text" name="Friend_national" value="<?php echo @$_POST["Friend_national"]; ?>"class="form-control"  placeholder="National Id Number">

</div>
</div>

<div class="col-sm-6">
<div class="form-group">
<label for="exampleInputEmail1">Town</label>
<input type="text" name="Friend_town" value="<?php echo @$_POST["Friend_town"]; ?>"class="form-control"  placeholder="Enter your current town">
</div>
</div>
</div>
<div class="row">
  <div class="col-sm-6">
<div class="form-group">
<label for="exampleInputEmail1">Loan Amount</label>
<input type="text" name="Friend_amount" id="extra7" onkeypress="return isNumber(event)" value="<?php echo @$_POST["Friend_amount"]; ?>"class="form-control" placeholder="Enter Amount">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label >Occupation</label>
<input type="text" name="Friend_occupation" value="<?php echo @$_POST["Friend_occupation"]; ?>"class="form-control" placeholder="Your Occupation">
</div>
</div>
</div>


                    <div class="form-group">
                      <label for="exampleInputFile">profile picture</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="Friend_image" value="<?php echo @$_POST["Friend_image"]; ?>" id="image-file">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id="">Upload</span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                          <label for="exampleInputEmail1">Referral code(optional)</label>
                        <div class="col-4">

                          <input type="text" name="Friend_referral" class="form-control" value="<?php echo @$_POST["Friend_referral"]; ?>"placeholder="">


                        </div>
                            <span class="error text-sm text-danger">

                          </span>
                      </div>
<span class="float-right">
                        <img  src="dist/img/rainbow-barcode-12083563.jpg" style="width:200px; height:80px;" alt="">
                      </span>
                      </div>

                    <div class="col-sm-6">
                    <div class="form-group mb-0">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                        <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="https://docs.google.com/document/d/1wf2WMjEMZHZaadWyxxZoo0SEht7uqh4rahIDj3GhzFE/edit?usp=sharing">terms of service</a>.</label>
                      </div>
                    </div>
                  </div>

                  <!-- /.card-body -->

                </div>
                  <div class="card-footer">
                    <button type="submit"  name="send" value="insert_friend"class="btn btn-primary">Submit</button>
                  </div>
                </form>


              </div>
              <!-- /.card -->

            </section>
          </div>
      <footer class="main-footer">
        <strong>Copyright &copy; 2019-<?php echo date("Y");?> <a href="http://connect-academy.com">Mobicash.io</a>.</strong>
        All rights reserved.
<span class="float-right badge bg-success"> <a href="https://wa.me/254740590663" class="nav-link">Whatsapp us</a></span>
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="dist/js/demo.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jquery-validation -->
    <script src="plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="plugins/jquery-validation/additional-methods.min.js"></script>
    <!-- jQuery Mapael -->
    <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->


    <!-- SweetAlert2 -->
    <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="plugins/toastr/toastr.min.js"></script>


    <!-- ./wrapper -->
    <script type="text/javascript">
    $(document).ready(function () {
      $.validator.setDefaults({

      });
      $('#quickForm').validate({
        rules: {
           Friend_email: {
            required: true,
            email: true,
          },
          Friend_lname: {
           required: true,

         },
         Friend_fname: {
          required: true,

        },
        Friend_phone: {
         required: true,

       },
       Friend_town: {
        required: true,

      },
      Friend_fname: {
       required: true,

     },
       Friend_image: {
        required: true,

      },
        Friend_occupation: {
         required: true,
         maxlength: 17

       },
      Friend_amount: {
       required: true,

     },
     Friend_national: {
      required: true,

    },
          password: {
            required: true,
            minlength: 5
          },
          terms: {
            required: true
          },
        },
        messages: {
          Friend_email: {
            required: "Please enter your email address",
            email: "Please enter a vaild email address"
          },
          Friend_phone: {
            required: "MTN number is required",

          },
          Friend_occupation: {
            maxlength: "Should not be more than 20 characters",

          },
          Friend_town: {
            required: "Enter your nearest town",

          },
          Friend_national: {
            required: "Enter your National Identity number",

          },
          Friend_amount: {
            required: "Kindy enter the amount you'd wish to borrow",

          },
          Friend_lname: {
            required: "Please Enter your second name",

          },
          Friend_fname: {
            required: "Please Enter your First name",

          },
          $Friend_fname: {
            required: "Please Enter your First name",

          },

          password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
          },
          terms: "Please accept our terms"
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
    </script>


    <script type="text/javascript">
    $(document).ready(function () {
      bsCustomFileInput.init();
    });
    </script>

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
    $('#image-file').on('change', function() {
 var numb = $(this)[0].files[0].size/1024/1024;
numb = numb.toFixed(2);
if(numb > 2){
alert('Too big, maximum is 2MB. You file size is: ' + numb +' MB');
}   });
  </script>
  <script type="text/javascript">
    function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
  </script>
    </body>
    </html>
