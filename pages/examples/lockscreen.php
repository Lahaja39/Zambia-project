<?php
$errors = array();
if(isset($_POST['guru'])){

$customer_pass = $_POST['key'];
$pass= 'Lahaja40';

if (empty($customer_pass)) { array_push($errors, "Code required"); }
elseif ($customer_pass != $pass) {
  array_push($errors, "We don't recognize the code");
  // code...
}
}
 ?>
<?php
$con = mysqli_connect("localhost", "robaa", "Lahaja40", "updated_ecom_store");
  $conn = mysqli_connect("localhost", "robaa", "Lahaja40", "updated_ecom_store");
  $results = mysqli_query($conn, "SELECT * FROM customers");
  $customers = mysqli_fetch_all($results, MYSQLI_ASSOC);
?>
<?php
    session_start();
    if(!isset($_SESSION["customer_email"])) {
        header("location:../../index.php");
      }

    $conn=mysqli_connect("localhost", "robaa", "Lahaja40", "updated_ecom_store") or die("connection failed".mysqli_connect_error());
    $user = $_SESSION["customer_email"];
    $query = "SELECT * from customers where customer_email='$user'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        if($row = mysqli_fetch_assoc($result)) {
          $Loan=$row['Loan'];
$customer_name=$row['customer_name'];
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
$query = "SELECT * from friends where Friend_email='$user'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    if($row = mysqli_fetch_assoc($result)) {
      $Friend_fname=$row['Friend_fname'];
        $Friend_lname=$row['Friend_lname'];
          $Friend_image=$row['Friend_image'];
      $Friend_occupation=$row['Friend_occupation'];
                }
} else {
    echo "0 results";


}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Mobicash| Lockscreen</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
          <?php

$userImage = '../../dist/persons/' . $Friend_image. '';
$defaultImage = '../../dist/profiles/online-shop-logo-template_59362-86.jpg';

$image = (file_exists($userImage)) ?   $userImage: $defaultImage;
           ?>
    <a href="../../index2.php"><b>MOBICASH</b></a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name"> <?php echo "$Friend_fname"; ?>.  .   <?php echo "$Friend_lname"; ?></div>

  <?php if (count($errors) > 0) : ?>
  <div class="message text-danger text-sm">
    <?php foreach ($errors as $error) : ?>
    <p class="mb-1"><?php echo $error ?></p>
    <?php endforeach ?>
  </div>
  <?php endif ?>
  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image border border-success">
      <img src='<?php echo "$image"; ?>' alt="User Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials" action="" method="POST">


      <div class="input-group">
        <input type="password" class="form-control" placeholder="password" name="key" id="key">

        <div class="input-group-append">
          <button type="button" name="guru"class="btn"><i class="fas fa-arrow-right text-muted"></i></button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->

  <div class="help-block text-center">
    Enter your savings code to proceed
  </div>
  <div class="text-center">
    <a href="logout.php">Or sign in as a different user</a>
  </div>
  <div class="lockscreen-footer text-center">
    Copyright &copy; 2019-2020 <b><a href="http://connect-academy.com" class="text-black">Mobicash.io</a></b><br>
    All rights reserved <br>
    <span class="text-center badge bg-success"> <a href="https://wa.me/254740590663" class="nav-link">Whatsapp us</a></span>

</div>
<!-- /.center -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
