<?php 
session_start();
include('../config/config.php');
    if(isset($_GET['status']))
    {
        //* check payment status
        if($_GET['status'] == 'cancelled')
        {
            // echo 'YOu cancel the payment';
            header('Location: pay.php');
        }
        elseif($_GET['status'] == 'successful')
        {
            $txid = $_GET['transaction_id'];

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$txid}/verify",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                  "Content-Type: application/json",
                  "Authorization: Bearer FLWSECK-35b1640dfc57f82b5365f7b73b4886d2-X"
                ),
              ));
              
              $response = curl_exec($curl);
              
              curl_close($curl);
              
              $res = json_decode($response);
              if($res->status)
              {
                $amountPaid = $res->data->charged_amount;
                $amountToPay = $res->data->meta->price;
                $email = $res->data->customer->email;
                $status=1;
                if($amountPaid >= $amountToPay)
                {
                    // insert transaction in db here
                    $today = date('y-m-d');
                        $transactionQuery = mysqli_query($conn,"INSERT INTO 
                        `tbltransactions`(`transactionCode`, `ClientId`, `Amount`, `startDate`, `Status`) 
                        VALUES ('$txid','$email','$amountToPay','$today','$status')");

                    if ($transactionQuery) {
                        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Status</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom styles for this template-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>

<body>
    <center>
        <div class="container">
            <div class="d-flex justify-content-center align-items-center vh-100">
                <div class="row">


                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="images/payment.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Payment Status</h5>
                            <p class="card-text">e-mail: <?php echo $email;?></p>
                            <p class="card-text">Amount : <?php echo $amountToPay;?> Rwf</p>
                            <a href="../product.php" class="btn btn-primary">Go to Login</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </center>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>

<?php
                    }else {
                        ?>

<?php
                    }
                }
                else
                {
                    echo 'Fraud transaction detected';
                }
              }
              else
              {
                  echo 'Can not process payment';
              }
        }
    }
?>