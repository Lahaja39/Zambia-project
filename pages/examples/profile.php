

<?php
    session_start();
    if(!isset($_SESSION["customer_email"])) {
        header("location:../../index2.php");
      }
$con = mysqli_connect("localhost", "robaa", "Lahaja40", "updated_ecom_store");
  $conn = mysqli_connect("localhost", "robaa", "Lahaja40", "updated_ecom_store") or die("connection failed".mysqli_connect_error());
    $user = $_SESSION["customer_email"];
    $query = "SELECT * from customers where customer_email='$user'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        if($row = mysqli_fetch_assoc($result)) {
          $Loan=$row['Loan'];
            $Savings=$row['Savings'];
$customer_name=$row['customer_name'];
$customer_contact=$row['customer_contact'];
$customer_idi=$row['customer_id'];
$customer_confirm_code =$row['customer_confirm_code'];
$created =$row['Created'];
            $customer_username=$row['customer_username'];
$email=$row['customer_email'];
            $customer_image=$row['customer_image'];
                    }
    }

    ?>
    <?php
$query = "SELECT * from friends where customer_id='$customer_idi'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    if($row = mysqli_fetch_assoc($result)) {
      $Friend_fname=$row['Friend_fname'];
        $Friend_lname=$row['Friend_lname'];
          $Friend_image=$row['Friend_image'];
      $Friend_occupation=$row['Friend_occupation'];
                }
} if (empty($Friend_fname AND $Friend_lname)) {
  // code...
  header("Location: ../../form.php");
} else{
    echo "0 results";


}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Mobicash| User Profile</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel=icon href="../../dist/img/lipisha.ico">
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


      .heading{background-color:crimson;}
      .box{border:transparent;padding:20px;border-radius:5px; }
      .box-sm{border:transparent;padding:5px;border-radius:5px;}



      .info h3{padding:0px;margin:5px;}
      .per_info h4{margin:5px;}
      #photo{height:200px;width:190px;}
      #edit_sign{height:20px;width:20px;}
      #personal{background-color:transparent;color:white}
      #education{background-color:transparent;color:white}
      #join_details{background-color:transparent;color:white}
      #pay_details{background-color:transparent;color:white}
      #bank_details{background-color:transparent;color:white}
      #address{background-color:transparent;color:white}
      .nameplate{background-color:transparent;color:white}
      .info{background-color:transparent;color:white}
      form span{
          color:red;

      }

  .pic{
width:250px;
height:250px;
}
.picbig{
position: absolute;
width:0px;
-webkit-transition:width 0.3s linear 0s;
transition:width 0.3s linear 0s;
z-index:10;
}
.pic:hover + .picbig{
width:500px;
height: 500px;
}

  .form-control{
    color: black;
    outline: none;
    background:transparent;

  }

  label{
    color: black;

  }
  .cropped{
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
                <img src="../../dist/img/credit-cards.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
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
        <span class="brand-text font-weight-light"><span style="color:#ff0000;">M</span><span style="color:#ff4000;">O</span><span style="color:#ff7f00;">B</span><span style="color:#ffbf00;">I</span><!--<span style="color:#ffff00;">--></span><span style="color:#80ff00;">
                  C</span><span style="color:#00ff00;">A</span><span style="color:#00ff80;">S</span><span style="color:#00ffff;">H</span></span>
      </a>


      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../../dist/img/gift.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info"> <span class="brand-text font-weight-light"><span style="color:#ff0000;">M</span><span style="color:#ff4000;">O</span><span style="color:#ff7f00;">B</span><span style="color:#ffbf00;">I</span><!--<span style="color:#ffff00;">--></span><span style="color:#80ff00;">
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

      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row ">
            <div class="col-sm-12">
              <div class="card bg-info elevation-3 text-center">
                  <div class="card-tools ">
                    <button type="button" class="btn btn-tool float-right mt-auto" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>


                  </div>

              <p class="text-sm "><i class="icon fas fa-ban"></i> Click <a href="../../support.php"> here</a> to find more about Mobicash</p>
            </div>
            </div>

          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
              <?php

$userImage = '../../dist/persons/' . $Friend_image. '';
$defaultImage = '../../dist/profiles/online-shop-logo-template_59362-86.jpg';

$image = (file_exists($userImage)) ?   $userImage: $defaultImage;
               ?>



              <div class="card card-warning card-outline">
                <div class="card-body box-profile">

                  <div class="text-center">
  <img class=" img-size-200 profile-user-img img-fluid img-circle cropped " src='<?php echo "$image"; ?>'>
                  </div>
                  <h3 class="profile-username text-center text-muted"><?php echo strtoupper( "$Friend_fname"); ?>  <?php echo strtoupper("$Friend_lname"); ?></h3>

                  <p class="text-muted text-center" text-decoration="underline"><?php echo "$Friend_occupation"; ?></p>

                  <ul class="nav flex-column">

                    <li class="nav-item">
                      <a href="#" class="nav-link">Limit

              <?PHP
                date_default_timezone_set('Africa/Lusaka');
               $time_ago = strtotime($created);
               $current_time = time();
               $time_difference = $current_time - $time_ago;
               $seconds = $time_difference;
               $minutes   = round($seconds / 60 );           // value 60 is seconds
               $remaining = 60-$minutes;

               $hours           = round($seconds / 3600);
if ($minutes > 59) {
// code...
echo"
                         <span class='float-right badge bg-primary'>$Loan</span>
                      </a>
                    </li>

                ";
              }
              else {
                // code...
                echo "   <span class='float-right badge bg-primary'>processing..</span><br>
                 <span class='float-right text-danger text-sm'>$remaining minutes Remaining  </span>

                </a>
              </li>";
              }
              ?>

                    <li class="nav-item dropdown">
                      <a class="nav-link" data-toggle="dropdown" href="#">
                        Repayments <span class="float-right badge bg-info"><?php echo "$customer_name"; ?></span>
                      </a>
                    <!--  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modalCoupon">

                          <div class="media">
                            <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                              <h3 class="dropdown-item-title">
                                Brad Diesel
                                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                              </h3>
                              <p class="text-sm">Call me whenever you can...</p>
                              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                          </div>

  <div class="modal show top" id="modalCoupon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" data-backdrop="true">
    <div class="modal-dialog modal-frame modal-top modal-notify modal-success" role="document">

      <div class="modal-content">

        <div class="modal-body">
          <div class="row d-flex justify-content-center align-items-center">

            <h2>
              <span class="badge">v52gs1</span>
            </h2>
            <p class="pt-3 mx-4">We have a gift for you! Use this code to get a
              <strong>10% discount</strong>.</p>

            <a type="button" class="btn btn-success">Get it
              <i class="fas fa-book ml-1 white-text"></i>
            </a>
            <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">No, thanks</a>
          </div>
        </div>
      </div>

    </div>
  </div>


                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">

                          <div class="media">
                            <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                              <h3 class="dropdown-item-title">
                                John Pierce
                                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                              </h3>
                              <p class="text-sm">I got your message bro</p>
                              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                          </div>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">

                          <div class="media">
                            <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                              <h3 class="dropdown-item-title">
                                Nora Silvester
                                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                              </h3>
                              <p class="text-sm">The subject goes here</p>
                              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                          </div>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                      </div>
                    </li>
                  -->


                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        Savings <span class="float-right badge bg-success"><?php echo "$Savings"; ?> </span>
                      </a>
                    </li>
                    <?php

$query = "SELECT COUNT(*) as Total FROM friends WHERE Friend_referral='$customer_confirm_code'";

$result = mysqli_query($conn,$query) ;
$check_code = mysqli_num_rows($result);

// Print out result
while($row = mysqli_fetch_assoc($result)){
  $number=$row['Total'];
  $points= 25*$number;
}

                     ?>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        Earnings <span class="float-right badge bg-danger"><?php echo "$points"; ?></span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        Referral code <span class="float-right badge bg-success"><?php echo "$customer_confirm_code"; ?></span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        Overdue <span class="float-right badge bg-warning">0</span>
                      </a>
                    </li>
                  </ul>

                    <a href="" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal-primary"><b>Withdraw</b></a>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

              <!-- About Me Box -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Account</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <strong><i class="fas fa-book mr-1"></i> Referrals</strong>
                  <?php
                      $bad=array();
                      $good=array();
                      if(isset($_POST['code'])){
    $Friend_referral= mysqli_real_escape_string($con, $_POST['Friend_referral']);


                $true_email = "SELECT * FROM customers WHERE customer_id='$customer_idi' AND customer_confirm_code='$Friend_referral'";

                $fly_email = mysqli_query($con,$true_email);

                $checke_email = mysqli_num_rows($fly_email);

                if($checke_email == 1){

                 array_push($bad, "You can't refer yourself");
               }

              else {
                // code...

              $geti_email = "SELECT * FROM customers WHERE  customer_confirm_code='$Friend_referral'";

              $found_email = mysqli_query($con,$geti_email);

              $checki_email = mysqli_num_rows($found_email);

              if($checki_email == 0){

               array_push($bad, "we don't recognize the code");
             }
else {
  $pro="SELECT * FROM friends WHERE  Friend_referral='$Friend_referral'";
  $status = mysqli_query($con,$pro);
  $resulte = mysqli_num_rows($status);

                if($resulte >0){

                 array_push($bad, "Already  referred by somebody else");
}

else {
         $update_friend = "UPDATE friends set Friend_referral='$Friend_referral' where customer_id='$customer_idi'";
  // cod

$run_friend = mysqli_query($con,$update_friend);

if($run_friend){

array_push($good, "updated successfully ");
}
}
}
}
}
                   ?>

<ol class="nav flex-column">
  <li class="nav-item">

    <a href="#" class="nav-link"><?php //echo " $output"; ?>

    </a>
  </li>
</ol>
<?php
// Make a MySQL Connection

$query = "SELECT COUNT(*) as Total FROM friends WHERE Friend_referral='$customer_confirm_code'";

$result = mysqli_query($conn,$query) ;
$check_code = mysqli_num_rows($result);

// Print out result
while($row = mysqli_fetch_assoc($result)){
  $number=$row['Total'];
  $points= 25*$number;
  $Times=50-$row['Total'];
  if ($row['Total']>0) {
echo "<p class=text-sm> $Friend_fname you have earned k-$points on referral-program.
Refer more friends to be able to Withdraw </p>  <p class=text-sm text-success>
  <i class='ion ion-android-checkmark-circle'></i> Your Referral code is ".$customer_confirm_code."
  </p> ";}
else{

  echo "  <P class='text-sm text-danger'> <i class='ion ion-information-circled'></i> You haven't referred any friend.Refer friends to earn more and more. <br/></p>
  <p class=text-sm text-success>
  <i class='ion ion-android-checkmark-circle'></i> Your Referral code is ".$customer_confirm_code."
  </p>";
  // code...
}
}

?>
  <form class="form-horizontal" method="post">
    <div class="input-group input-group-sm mb-0">
      <input class="form-control form-control-sm"value="<?php echo @$_POST["Friend_referral"]; ?>" name="Friend_referral" placeholder="code" required>
      <div class="input-group-append">
        <button type="submit" name="code" class="btn btn-info">submit</button>
      </div>
        <div class="">
          <span class="error text-sm text-primary">
            <?php foreach ($good as $key => $value) {
              // code...
              echo "$value <br />" ;
            } ?>

      </span>
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
  </form>
                  <hr>

                  <strong><i class="fas fa-map-marker-alt mr-1 "style="color:red"></i> Location</strong>

                  <p class="text-muted">

<?php
$query = @unserialize (file_get_contents('http://ip-api.com/php/'));
if ($query && $query['status'] == 'success') {
echo '' . $query['country'] . ', '. $query['city'] . '!';
}
foreach ($query as $data) {
    echo $data . "   ";
}
?></p>

                  <hr>

                  <strong><i class="fas fa-pencil-alt mr-1"></i> History</strong>

                  <p class="text-muted text-sm">
              <i class="ion ion-ios-information-outline"></i>  you haven't taken any loan from our institution yet.
                  </p>

                  <hr>

                  <strong><i class="far fa-file-alt mr-1"></i> Awards</strong>

                  <p class="text-muted">There are no available awards for this account.</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>




            <!-- /.col -->
            <div class="col-md-9">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab"><i class=" ion ion-ios-settings-strong"></i> Settings </a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body ">
                  <div class="tab-content ">
                    <div class="active tab-pane" id="activity">
                      <!-- Post -->
                      <div class="post">

                          <div class="row">
                            <div class="col-lg-3 col-6">
                              <!-- small card -->
                              <div class="small-box bg-info">
                                <div class="inner">

                                                <?PHP
                                                 $time_ago = strtotime($created);
                                                 $current_time = time();
                                                 $time_difference = $current_time - $time_ago;
                                                 $seconds = $time_difference;
                                                 $minutes      = round($seconds / 60 );           // value 60 is seconds
                                                 $hours           = round($seconds / 3600);
                                  if ($minutes > 59) {
                                  echo"
                                  <h3>$Loan</h3>
                                  ";
                                }
                                else {
                                  echo "<h5>processing..</h5>";
                                }
                                  ?>
                                    <p>Loan Limit</p>
                                </div>
                                <div class="icon">
                            <i class="ion ion-flag"></i>
                                </div>
                                <a href="" class="small-box-footer" data-toggle="modal" data-target="#modal-primary" >
                                  Withdraw <i class="fas fa-arrow-circle-right"></i>
                                </a>
                              </div>
                            </div>

      <div class="modal fade " id="modal-primary">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">MOBICASH<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="card bg-primary elavation-4">
              <div class="text-center">

              <img src="../../dist/img/qrtag_transparent_8_b3e86hfd.png" class="img"  style="width:150px; height:150px;" alt="">

            </div>
            </div>
            <div class="modal-body">
              <p>To Withdraw your loan of <b><?php   if ($minutes > 59) {
                echo"$Loan";
              }
              else {
                echo "--:--";
              }
                ?>
                </b>:<br><i class="ion ion-android-checkbox-outline"></i>  You should have MTN or Zamtel line <br>
                <i class="ion ion-android-checkbox-outline"></i>  You should have savings of atleast 500. <span class="text-danger"><b> <?php echo strtoupper("$Friend_fname"); ?></b></span> your savings is currently <?php echo "$Savings"; ?> click save now to make your deposit in order to continue<br>
                <i class="ion ion-android-checkbox"></i> By clicking continue you warrant and represent to us that you have the above requirements <br>




              </p>
            </div>
            <div class="modal-footer justify-content-between">
               <form action="verify.php" method="POST">
      <input class="input-group mb-1" type="hidden" id="amount" name="amount" value="500">
      <input class="input-group mb-1" type="hidden" id="email" name="email" placeholder="email" value="<?php echo $user; ?>">
      <input class="input-group" type="hidden" id="phone" placeholder="phone  number" name="phone" value="<?php echo $customer_contact; ?>">

              <button type="submit" name="guru" class="btn btn-outline-light" id="submit">Save Now</button>
                </form>
              <button onclick="window.location.href='lockscreen.php';" type="button" class="btn btn-outline-light">Continue</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                              <!-- small card -->
                              <div class="small-box bg-success">
                                <div class="inner">
                                  <h3><?php echo "$Savings"; ?> <sup style="font-size: 20px"></sup></h3>

                                  <p>Savings</p>
                                </div>
                                <div class="icon">
                                  <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer"  data-toggle="modal" data-target="#modal-success" >
                                  Deposit <i class="fas fa-arrow-circle-right"></i>
                                </a>
                              </div>
                            </div>
                            <!-- ./col -->


                                  <div class="modal fade " id="modal-success">
                                    <div class="modal-dialog">
                                      <div class="modal-content bg-success">
                                        <div class="modal-header">MOBICASH<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="card bg-success elavation-4">
                                          <div class="text-center">

                                          <img src="../../dist/img/qrtag_transparent_8_b3e86hfd.png" class="img"  style="width:150px; height:150px;" alt="">

                                        </div>
                                        </div>
                                        <div class="modal-body">
                                          <p><i class="ion ion-android-checkbox-outline"></i>  You should have MTN or Zamtel line <br>
                                            <i class="ion ion-android-checkbox-outline"></i>  Your balance should not be less than the required amount. <br>
                                            <i class="ion ion-android-checkbox"></i> By clicking proceed you warrant and represent to us that you have the above requirements <br>




                                          </p>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                           <form action="verify.php" method="POST">
                                  <input class="input-group mb-1" type="hidden" id="amount" name="amount" value="500">
                                  <input class="input-group mb-1" type="hidden" id="email" name="email" placeholder="email" value="<?php echo $user; ?>">
                                  <input class="input-group" type="hidden" id="phone" placeholder="phone  number" name="phone" value="<?php echo $customer_contact; ?>">

                                          <button type="submit" name="guru" class="btn btn-outline-light text-center" id="submit">Proceed</button>
                                            </form>

                                        </div>
                                      </div>
                                      <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                  </div>
                                  <!-- /.modal -->

                            <div class="col-lg-3 col-6">
                              <!-- small card -->
                              <div class="small-box bg-warning">
                                <div class="inner">
                                  <h3><?php echo "$customer_name"; ?></h3>

                                  <p>successful payment</p>
                                </div>
                                <div class="icon">
                                  <i class="far fa-money-bill-alt"></i>
                                </div>
                      <a href="#" class="small-box-footer toastsDefaultWarning">
                                  More info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                              </div>
                            </div>

                            <div class="col-lg-3 col-6">
                              <!-- small card -->
                              <div class="small-box bg-danger">
                                <div class="inner">
                                  <h3><?php echo "$points"; ?></h3>

                                  <p>Earnings</p>
                                </div>
                                <div class="icon">
                                  <i class="fas fa-chart-pie"></i>
                                </div>
                                <a href="#" class="small-box-footer toastsDefaultDanger">
                                  Withdraw<i class="fas fa-arrow-circle-right"></i>
                                </a>
                              </div>
                            </div>
                            <!-- ./col -->
                          </div>
                          <!-- /.row -->
</div>


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


                      <!-- Post -->
                      <div class="post clearfix">
                        <div class="user-block">
                          <img class="img-circle img-bordered-sm" src="../../dist/profiles/card.jpg" alt="User Image">
                          <span class="username">
                            <a href="#">Support <i class="ion ion-checkmark-circled"></i></a>
                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                          </span>
                          <span class="description">Sent you a message -<?php echo facebook_time_ago ("$created"); ?></span>
                        </div>
                        <!-- /.user-block -->
                        <p>
                  <span class="text-info">  <?php echo strtoupper( "$Friend_fname"); ?></span>, you are now officially in the loop to hear all about our awesome products,new releases and maybe even a deal or two.If that's not exciting, i don't know what it is!

                        </p>

                        <form class="form-horizontal">
                          <div class="input-group input-group-sm mb-0">
                            <input class="form-control form-control-sm" placeholder="Response">
                            <div class="input-group-append">
                              <button type="submit" class="btn btn-danger">Send</button>
                            </div>
                          </div>
                        </form>
                      </div>

                      <!-- Post -->
                      <div class="post clearfix">
                        <div class="user-block">
                          <img class="img-circle img-bordered-sm" src="../../dist/profiles/card.jpg" alt="User Image">
                          <span class="username">
                            <a href="#">Support <i class="ion ion-checkmark-circled"></i></a>
                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                          </span>
                          <span class="description">Sent you a message -<?php echo facebook_time_ago ("$created"); ?></span>
                        </div>
                        <!-- /.user-block -->
                        <p>
                  Wondering where to start? Follow my Lead.<br />
                  1.Register an account with us<br />
                  2.Submit your registration form<br />
                  3.Wait at least 1hr for your Loan limit to be processed<br />
                  4.After 1-2 hours your loan limit will be available on your dashboard<br />
                  5.Click Withdrawal in order to Withdraw your loan<br />
                  6. Money should sent to your MTN/ZAMTEL mobile money account within 20 minutes from the time you initiated the transaction<br />
                  7.Start Repayment following the loan-Repayment-card dates (which will be available on your dashboard after Withdrawal) and as per how our agents advise you to<br />

                        </p>

                        <form class="form-horizontal">
                          <div class="input-group input-group-sm mb-0">
                            <input class="form-control form-control-sm" placeholder="Response">
                            <div class="input-group-append">
                              <button type="submit" class="btn btn-danger">Send</button>
                            </div>
                          </div>
                        </form>
                      </div>

                                            <!-- Post -->
                                            <div class="post clearfix">
                                              <div class="user-block">
                                                <img class="img-circle img-bordered-sm" src="../../dist/profiles/card.jpg" alt="User Image">
                                                <span class="username">
                                                  <a href="#">Sarah <i class="ion ion-checkmark-circled"></i></a>
                                                  <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                                </span>
                                                <span class="description">Sent you a message -<?php echo facebook_time_ago ("$created"); ?></span>
                                              </div>
                                              <!-- /.user-block -->
<ul>
                                          <li>  You are eligible to earn referral points under Mobicash Refer & Win program only when the friends who you have shared the Unique referral codes with, completes Registration on Mobicash platform.
                                          </li>

        <li>The referral code is only valid once per user.</li>
        <li>Incase you are a new user on Mobicash and have never registered on Mobicash web or app, you will need to first register yourself to generate a unique referral code to share with your friends or family.</li>
<li>Earned amount value is 1=k-25.</li>
<li>All referral credits (discounts / Credits ) will be added to your Mobicash account and will be visible in the rewards section once you log in to your Mobicash account on the web.</li>
<li>The Credits / Discount codes will only be valid up to 90 days from the date of receipt of the amount.</li>
<li>The Referral program is purely created to reward Mobicash Users for spreading love amongst their family and friends and Mobicash has the right to discontinue this at any time.</li>
<li>This offer is valid for new users only.</li>
</ul>

                                              <form class="form-horizontal">
                                                <div class="input-group input-group-sm mb-0">
                                                  <input class="form-control form-control-sm" placeholder="Response">
                                                  <div class="input-group-append">
                                                    <button type="submit" class="btn btn-danger">Send</button>
                                                  </div>
                                                </div>
                                              </form>
                                            </div>

                      <!-- /.post -->
                      <div class="post clearfix">
                        <div class="user-block">
                          <img class="img-circle img-bordered-sm" src="../../dist/profiles/card.jpg" alt="User Image">
                          <span class="username">
                            <a href="#">Support <i class="ion ion-checkmark-circled"></i></a>
                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                          </span>
                          <span class="description">Sent you a message -<?php echo facebook_time_ago ("$created"); ?></span>
                        </div>
                        <!-- /.user-block -->
                        <p>
                      <span class="text-info">  <?php echo strtoupper("$Friend_lname"); ?>
                      </span>,  Mobicash may approve the full facility applied for or
lesser sum or decline the facility in its sole discretion
without giving any reasons, such decision of the
Mobicash may be by endorsement to that effect in the
relevant part of the letter or by a separate letter and
in either case it shall be effective to bind the parties
without any further act by the Borrower.

                        </p>

                        <form class="form-horizontal">
                          <div class="input-group input-group-sm mb-0">
                            <input class="form-control form-control-sm" placeholder="Response">
                            <div class="input-group-append">
                              <button type="submit" class="btn btn-danger">Send</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="timeline">
                      <!-- The timeline -->
                      <div class="timeline timeline-inverse">
                        <!-- timeline time label -->
                        <div class="time-label">
                          <span class="bg-danger">
                            <?php echo "$created"; ?>
                          </span>
                        </div>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <div>
                          <i class="fas fa-envelope bg-primary"></i>

                          <div class="timeline-item">
                            <span class="time"><i class="far fa-clock"></i> <?php echo facebook_time_ago ("$created"); ?></span>

                            <h3 class="timeline-header"><a href="#">Support Team <i class="ion ion-checkmark-circled"></i></a>
                            </h3>

                            <div class="timeline-body">
                            It has now been several Months since COVID-19 outbreak and the public disclosure by the World Health Organisation (WHO) as pandemic; which has so far affected global market operations; and that means businesses are coming to a grinding halt everywhere you look.But don't you worry for Mobicash is here to give you Loan to revive your businesses
                            </div>
                            <!--
                            <div class="timeline-footer">
                              <a href="#" class="btn btn-primary btn-sm">Read more</a>
                              <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </div>
                          -->
                          </div>
                        </div>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <div>
                          <i class="fas fa-user bg-info"></i>

                          <div class="timeline-item">
                            <span class="time"><i class="far fa-clock"></i> <?php echo facebook_time_ago ("$created"); ?></span>

                            <h3 class="timeline-header border-0"><a href="#">Sarah <i class="ion ion-checkmark-circled"></i></a> Sent you a mail
                            </h3>
                          </div>
                        </div>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <div>
                          <i class="fas fa-comments bg-warning"></i>

                          <div class="timeline-item">
                            <span class="time"><i class="far fa-clock"></i> <?php echo facebook_time_ago ("$created"); ?></span>

                            <h3 class="timeline-header"><a href="#">Darius <i class="ion ion-checkmark-circled"></i></a> </h3>

                            <div class="timeline-body">
                              Got a problem? contact customer care now
                            </div>
                            <div class="timeline-footer">
                              <a href="https://wa.me/254740590663" class="btn btn-success elevation-3 btn-flat btn-sm">whatsapp</a>
                            </div>
                          </div>
                        </div>
                        <!-- END timeline item -->
                        <!-- timeline time label -->
                        <div class="time-label">
                          <span class="bg-success">
                              <?php echo "$created"; ?>
                          </span>
                        </div>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <div>
                          <i class="fas fa-camera bg-purple"></i>

                          <div class="timeline-item">
                            <span class="time"><i class="far fa-clock"></i> <?php echo facebook_time_ago ("$created"); ?></span>

                            <h3 class="timeline-header"><a href="#">Mina Lee <i class="ion ion-checkmark-circled"></i></a> uploaded new photo</h3>

                            <div class="timeline-body">
                              <p class="text-sm">

                              <img class="brand-image img H-10 W-10" style="width:300px; height:150px;" src="../../dist/img/Save2.png" alt="members">
                            </p>
                            </div>
                          </div>
                        </div>
                        <!-- END timeline item -->
                        <div>
                          <i class="far fa-clock bg-gray"></i>
                        </div>
                      </div>
                    </div>
                    <!-- /.tab-pane -->


                                			<?php

                                			$customer_email = $_SESSION['customer_email'];

                                			$select_customer = "select * from customers where customer_email='$customer_email'";

                                			$run_customer = mysqli_query($con,$select_customer);

                                			$row_customer = mysqli_fetch_array($run_customer);

                                			$customer_id = $row_customer['customer_id'];

                                			$customer_contact = $row_customer['customer_contact'];

                                			$get_customers_addresses = "select * from customers_addresses where customer_id='$customer_id'";

                                			$run_customers_addresses = mysqli_query($con,$get_customers_addresses);

                                			$row_addresses = mysqli_fetch_array($run_customers_addresses);

                                			$sbilling_first_name = $row_addresses["billing_first_name"];

                                			$sbilling_last_name = $row_addresses["billing_last_name"];

                                			$sbilling_country = $row_addresses["billing_country"];

                                			$sbilling_address_1 = $row_addresses["billing_address_1"];

                                			$sbilling_address_2 = $row_addresses["billing_address_2"];

                                			$sbilling_state = $row_addresses["billing_state"];

                                			$sbilling_city = $row_addresses["billing_city"];

                                			$sbilling_postcode = $row_addresses["billing_postcode"];



                                			?>



                    			<?php
                    			$errors = array();
                    			if(isset($_POST['Billing'])){



                    			$billing_first_names= mysqli_real_escape_string($con, $_POST['Bfirstname']);

                    			$billing_last_names = mysqli_real_escape_string($con, $_POST['Blastname']);
                    			$billing_address_1s= mysqli_real_escape_string($con, $_POST['Baddress']);
                    			$billing_address_2s= mysqli_real_escape_string($con, $_POST['Bphone']);

                    				$billing_countrys= mysqli_real_escape_string($con, $_POST['Bcountry']);
                    				$billing_states= mysqli_real_escape_string($con, $_POST['Btown']);
                    		$billing_postcodes= mysqli_real_escape_string($con, $_POST['postcode']);
                      if (empty($billing_first_names AND $billing_states)) { array_push($errors, "double check your form"); }
                    			else {


                    $update_billing_address = "UPDATE customers_addresses set billing_first_name='$billing_first_names',billing_last_name='$billing_last_names',billing_country='$billing_countrys',billing_address_1='$billing_address_1s',billing_address_2='$billing_address_2s',billing_state='$billing_states',
                    billing_postcode='$billing_postcodes' where customer_id='$customer_id'";

                    $run_update_billing_address = mysqli_query($con, $update_billing_address);


                    		if($run_update_billing_address){



                    		 echo '<a href="\' . #tabCheckoutAddons123 . \'">';

                    		}
                    		}
                    		}


                    		?>
                          <!-- Content Wrapper. Contains page content -->


                    <div class="tab-pane" id="settings">

                      	                <!--Card content-->
                      	                <form action="" role="form"  method="post" enctype="multipart/form-data" >

                      	                  <!--Grid row-->
                      	                  <div class="row">

                      	                    <!--Grid column-->
                      	                    <div class="col-md-6 mb-4">

                      	                      <!--firstName-->
                      	                      <label for="firstName" class="">First name</label>
                      	                      <input type="text" id="firstName" class="form-control" name="Bfirstname" value="<?php echo @$_POST["Bfirstname"]; ?>" placeholder=" <?php echo "$sbilling_first_name"; ?>"required>

                      	                    </div>
                      	                    <!--Grid column-->

                      	                    <!--Grid column-->
                      	                    <div class="col-md-6 mb-2">

                      	                      <!--lastName-->
                      	                      <label for="lastName" class="">Last name</label>
                      	                      <input type="text" id="lastName" class="form-control" name="Blastname" value="<?php echo @$_POST["Blastname"]; ?>"     placeholder="<?php echo "$sbilling_last_name"; ?>" required>

                      	                    </div>
                      	                    <!--Grid column-->

                      	                  </div>
                      	                  <!--Grid row-->
                      	                  <!--address-->
                      	                  <label for="address" class="">Address</label>
                      	                  <input type="text" id="address" class="form-control mb-4" placeholder= "<?php echo "$sbilling_address_1"; ?>" name="Baddress" value="<?php echo @$_POST["customer_contact"]; ?>" required>


                       				             <label for="exampleInputEmail1">Phone</label>
                       				             <input type="Tel" name="Bphone" placeholder=" <?php echo "$sbilling_address_2"; ?>"class="form-control" placeholder="Phone Number" <?php echo @$_POST["Bphone"]; ?>>
                       				             <span class="error text-sm text-danger">MTN number required for payment</span>



                      	                  <!--Grid row-->
                      	                  <div class="row">

                      	                    <!--Grid column-->
                      	                    <div class="col-lg-4 col-md-12 mb-4">

                      	                      <label for="country">Country</label>
                      	                      <select class="custom-select d-block w-100" id="country"name="Bcountry" value="<?php echo @$_POST["Bcountry"]; ?>" required>


                      													<option value=""> Select A Country </option>

                      													<?php

                      													$get_countries = "select * from countries";

                      													$run_countries = mysqli_query($con,$get_countries);

                      													while($row_countries = mysqli_fetch_array($run_countries)) {

                      													$country_id = $row_countries['country_id'];

                      													$country_name = $row_countries['country_name'];

                      													?>

                      													<option value="<?php echo $country_id; ?>">
                      													<?php echo $country_name; ?>

                      													</option>

                      													<?php } ?>

                      													</select>

                      	                      <div class="invalid-feedback">
                      	                        Please select a valid country.
                      	                      </div>

                      	                    </div>
                      	                    <!--Grid column-->

                      	                    <!--Grid column-->
                      	                    <div class="col-lg-4 col-md-6 mb-4">

                      												<label for="exampleInputEmail1">Town</label>
                       											 <input type="text" name="Btown" value="<?php echo @$_POST["Btown"]; ?>"class="form-control"  placeholder=" <?php echo "$sbilling_state" ?> " required>
                      	                    </div>
                      	                    <!--Grid column-->

                      	                    <!--Grid column-->
                      	                    <div class="col-lg-4 col-md-6 mb-4">

                      	                      <label for="zip">Zip</label>
                      	                      <input type="text" class="form-control" name="postcode" value="<?php echo @$_POST["Bcode"]; ?>" id="zip" placeholder="<?php echo "$sbilling_postcode"; ?>" >
                      	                      <div class="invalid-feedback">
                      	                        Zip code required.
                      	                      </div>

                      	                    </div>
                      	                    <!--Grid column-->

                      	                  </div>
                      	                  <!--Grid row-->

                      	                  <hr>

                      	                  <div class="mb-1">
                      	                    <input type="checkbox" class="form-check-input filled-in" id="chekboxRules">
                      	                    <label class="form-check-label" for="chekboxRules" required>I accept the terms and conditions</label>
                      	                  </div>
                      	                  <div class="mb-1">
                      	                    <input type="checkbox" class="form-check-input filled-in" id="safeTheInfo">
                      	                    <label class="form-check-label" for="safeTheInfo">Save this information for next time</label>
                      	                  </div>
                      	                  <div class="mb-1">
                      	                    <input type="checkbox" class="form-check-input filled-in" id="subscribeNewsletter">
                      	                    <label class="form-check-label" for="subscribeNewsletter" >Subscribe to the newsletter</label>
                      	                  </div>

                      	                  <hr>

                      	                  <button class="btn btn-primary btn-lg btn-block" name="Billing" type="submit">Update</button>

                      	                </form>
</div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019-<?php echo date("Y");?> <a href="http://connect-academy.com/">Mobicash</a>.</strong>
    All rights reserved.
    <span class="float-right badge bg-success"> <a href="https://wa.me/254740590663" class="nav-link">Whatsapp us</a></span>

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
  <!-- SweetAlert2 -->
  <script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- Toastr -->
  <script src="../../plugins/toastr/toastr.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
   <script type="text/javascript" src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>


  <script type="text/javascript">
    $(function() {
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
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
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
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
          image: '../../dist/img/user3-128x128.jpg',
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
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultWarning').click(function() {
        $(document).Toasts('create', {
          class: 'bg-warning',
          title: 'Payment',
          autohide: true,
          delay: 3000,
          body: 'You haven\'t made any payment yet.'
        })
      });
      $('.toastsDefaultDanger').click(function() {
        $(document).Toasts('create', {
          class: 'bg-danger',
          title: 'Referrals',
          autohide: true,
          delay: 3000,
          body: 'Contact us to finalize your Withdrawal.'
        })
      });
      $('.toastsDefaultMaroon').click(function() {
        $(document).Toasts('create', {
          class: 'bg-maroon',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
    });

  </script>
</body>

</html>
