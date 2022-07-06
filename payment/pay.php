<?php
session_start();
if (isset($_POST['pay'])) {
	$email=$_POST['email'];
	$amount=$_POST['amount'];
	$Product=$_POST['proid'];
    $ProductName = "Payment to Gibeon TV";

	  $request = [
        'tx_ref' => time(),
        'amount' => $amount,
        'currency' => 'RWF',
        'payment_options' => 'mobilemoney',
        'redirect_url' => 'http://localhost/gibeon/payment/process.php',
        'customer' => [
            'email' => $email,
            'name' => $email
        ],
        'meta' => [
            'price' => $amount
        ],
        'customizations' => [
            'title' => $ProductName,
            'description' => 'Buying products on Gibeon TV'
        ]
    ];



 //* Ca;; f;iterwave emdpoint
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.flutterwave.com/v3/payments',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode($request),
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer FLWSECK_TEST-79dd879c060de8f09417d49e55afafec-X',
        'Content-Type: application/json'
    ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

      $res = json_decode($response);
    if($res->status == 'success')
    {
        $link = $res->data->link;
        header('Location: '.$link);
        $_SESSION['email'] = $email;
    }
    else
    {
        echo 'We can not process your payment';
    }
        
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
</head>

<body class="bg-dark">

</body>

</html>