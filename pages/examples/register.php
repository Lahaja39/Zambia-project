<?php
// DB credentials.
define('DB_HOST','localhost'); // Host name
define('DB_USER','robaa'); // db user name
define('DB_PASS','Lahaja40'); // db user password name
define('DB_NAME','updated_ecom_store'); // db name
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS);
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
<?php
//Database Configuration File
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
error_reporting(0);
date_default_timezone_set("Africa/Lusaka");
if (isset($_POST['register'])) {
  $remoteip = $_SERVER['REMOTE_ADDR'];
  $customer_username =$_POST['customer_username'];
  $customer_email =$_POST['customer_email'];
  $password_1 =$_POST['password_1'];
  $password_2 =$_POST['password_2'];
  $encrypted_password = password_hash($password_1, PASSWORD_DEFAULT);
  $customer_contact =$_POST['customer_contact'];
  $create_datetime = date("Y-m-d H:i:s");
  $customer_confirm_code = mt_rand();
  $c_ip = getRealUserIp();
  $Loan = mt_rand(4000,20000);
    if ($password_1 != $password_2) {
  	array_push($errors, "The two passwords do not match");
    }
    else {
      // code...

// Query for validation of username and email-id
$ret="SELECT * FROM customers where (customer_username=:customer_username ||  customer_email=:customer_email)";
$queryt = $dbh -> prepare($ret);
$queryt->bindParam(':customer_username',$customer_username,PDO::PARAM_STR);
$queryt->bindParam(':customer_email',$customer_email,PDO::PARAM_STR);
$queryt -> execute();
$results = $queryt -> fetchAll(PDO::FETCH_OBJ);
if($queryt -> rowCount() == 0)
{
// Query for Insertion
$sql="INSERT INTO customers (customer_email,customer_pass,customer_username,customer_contact,customer_ip,customer_confirm_code,Loan,Created) VALUES(:customer_email,:encrypted_password,:customer_username,:customer_contact,:customer_ip,:customer_confirm_code,:Loan,:Created)";
$query = $dbh->prepare($sql);
// Binding Post Values
$query->bindParam(':customer_email',$customer_email,PDO::PARAM_STR);
$query->bindParam(':encrypted_password',$encrypted_password,PDO::PARAM_STR);
$query->bindParam(':customer_username',$customer_username,PDO::PARAM_STR);
$query->bindParam(':customer_contact',$customer_contact,PDO::PARAM_INT);
$query->bindParam(':customer_ip',$c_ip,PDO::PARAM_STR);
$query->bindParam(':customer_confirm_code',$customer_confirm_code,PDO::PARAM_STR);
$query->bindParam(':Loan',$Loan,PDO::PARAM_STR);
$query->bindParam(':Created',$create_datetime,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
  $insert_friends = "INSERT INTO friends (customer_id) VALUES (:lastInsertId)";
  $query = $dbh->prepare($insert_friends);
  $query->bindParam(':lastInsertId',$lastInsertId,PDO::PARAM_STR);
  $query->execute();
$insert_customers_addresses = "INSERT INTO customers_addresses (customer_id) VALUES (:lastInsertId)";
$query = $dbh->prepare($insert_customers_addresses);
    $query->bindParam(':lastInsertId',$lastInsertId,PDO::PARAM_STR);
    $query->execute();
    $InsertId = $dbh->lastInsertId();
    if ($InsertId) {
	header('location: ../../index.php');
}
}

else
{
  	array_push($errors, "Something went wrong.Please try again");

}
}
 else
{
  array_push($errors,"Username or Email-id already exist.<br> Please try another");
}
}
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Mobicash| Registration</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel=icon href="../../dist/img/lipisha.ico">
 <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/intlTelInput.css">
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style media="screen">
  .error {
color: #a94442;
background: #f2dede;
border: 1px solid #a94442;
margin-bottom: 20px;
}
.validation_errors p {
text-align: left;
margin-left: 10px;
}
.tick1{
font-size:18px !important;
color:green;
}

.cross1{
font-size:18px !important;
color:red;
}

.tick2{
font-size:18px !important;
color:green;
}

.cross2{
font-size:18px !important;
color:red;
}


  </style>
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.php"><b>MOBICASH</b></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>
      <?php if (count($errors) > 0) : ?>
        <div class="message error validation_errors">
        	<?php foreach ($errors as $error) : ?>
        	  <p><?php echo $error ?></p>
        	<?php endforeach ?>
        </div>
      <?php endif ?>

<form action="" method="post" enctype="multipart/form-data" >

        <div class="form-group mb-2">


          <div class="input-group">
          <input type="text" class="form-control" placeholder="username" name="customer_username" value="<?php echo @$_POST["customer_username"]; ?>" required>


          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
            </div>
</div>

        </div>
        <div class="form-group mb-2">
                  <div class="input-group">
                  <input type="email" class="form-control" placeholder="Email" name="customer_email" value="<?php echo @$_POST["customer_email"]; ?>" required>


                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                    </div>
        </div>

                </div>

        <div class="form-group mb-2">
  <div class="input-group">
            <input type="tel" id="phone" onkeypress="return isNumber(event)"  class="form-control" placeholder="Contact" name="customer_contact" value="<?php echo @$_POST["customer_contact"]; ?>">


        </div>
      </div>


        <div class="input-group mb-2">
          <input type="password" class="form-control"id="pass" placeholder="Password" name="password_1" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="input-group-addon"><!-- input-group-addon Starts -->

<i class="fa fa-check tick1"> </i>

<i class="fa fa-times cross1"> </i>

</span><!-- input-group-addon Ends -->

            </div>
          </div>
        </div>
        <div class="" id="example-getting-started-text" style="font-weight:bold;padding:6px 12px;">

          </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control confirm" id="con_pass" placeholder="Retype password" name="password_2">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="input-group-addon"><!-- input-group-addon Starts -->
<i class="fa fa-check tick2"> </i>
<i class="fa fa-times cross2"> </i>
</span><!-- input-group-addon Ends -->
<script src="../../dist/js/intlTelInput.js"></script>
<script>
var input = document.querySelector("#phone");
window.intlTelInput(input, {
  allowDropdown: true,
  // autoHideDialCode: false,
  // autoPlaceholder: "off",
  // dropdownContainer: document.body,
  // excludeCountries: ["us"],
  // formatOnDisplay: false,
  // geoIpLookup: function(callback) {
  //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
  //     var countryCode = (resp && resp.country) ? resp.country : "";
  //     callback(countryCode);
  //   });
  // },
  // hiddenInput: "full_number",
   initialCountry: "zm",
  // localizedCountries: { 'de': 'Deutschland' },
  // nationalMode: false,
 onlyCountries: ['zm','ke','ug'],
  // placeholderNumberType: "MOBILE",
  preferredCountries: ['zm'],
  // separateDialCode: true,
  utilsScript: "../../dist/js/utils.js",
});
</script>
<script src="../../docs/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){

$('.tick1').hide();
$('.cross1').hide();

$('.tick2').hide();
$('.cross2').hide();


$('.confirm').focusout(function(){

var password = $('#pass').val();

var confirmPassword = $('#con_pass').val();

if(password == confirmPassword){

$('.tick1').show();
$('.cross1').hide();

$('.tick2').show();
$('.cross2').hide();



}
else{

$('.tick1').hide();
$('.cross1').show();

$('.tick2').hide();
$('.cross2').show();


}


});


});

</script>
            </div>
          </div>
        </div>


<div class="form-group"><!-- form-group Starts -->


</div><!-- form-group Ends -->



        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <input type="submit" class="btn btn-primary btn-block" name="register" value="sign up" data-disa788ble-with="Signing in...">
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary toastrDefaultWarning">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger toastrDefaultWarning">
          <i class="fab fa-google-plus mr-2 "></i>
          Sign up using Google+
        </a>
      </div>

      <a href="../../index.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="../../docs/assets/plugins/jquery/jquery-disable-with.js"></script>
<script>
    new DisableWith('data-disable-with');
</script>
<script src="../../docs/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
  <script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- Toastr -->
  <script src="../../plugins/toastr/toastr.min.js"></script>

<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

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
        toastr.warning('Looks like your device doesn\'t support this option')
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
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultDanger').click(function() {
        $(document).Toasts('create', {
          class: 'bg-danger',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
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
