


<?php
    if (isset($_GET['txref'])) {
        $ref = $_GET['txref'];
        $amount = $_GET['amount']; //Get the correct amount of your product
        $currency = "ZMW"; //Correct Currency from Server

        $query = array(
            "SECKEY" => "FLWSECK-af6dc8950ec04a60d4ff7099aaea58b6-X",
            "txref" => $ref
        );

        $data_string = json_encode($query);

        $ch = curl_init('https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/verify');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

        $response = curl_exec($ch);

        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $header = substr($response, 0, $header_size);
        $body = substr($response, $header_size);

        curl_close($ch);

        $resp = json_decode($response, true);

      	$paymentStatus = $resp['data']['status'];
        $chargeResponsecode = $resp['data']['chargecode'];
        $chargeAmount = $resp['data']['amount'];
        $chargeCurrency = $resp['data']['currency'];

        if (($chargeResponsecode == "00" || $chargeResponsecode == "0") && ($chargeAmount == $amount)  && ($chargeCurrency == $currency)) {
          // transaction was successful...
  		  // please check other things like whether you already gave value for this ref
          // if the email matches the customer who owns the product etc
          //Give Value and return to Success page
          //   var_dump($resp);
          header('Location: lockscreen.php');
          exit();
        } else {
          //Dont Give Value and return to Failure page
          // var_dump($resp);
          header('Location: 404.php');
          exit();
        }
    }
		else {
      die('No reference supplied');
    }

?>
