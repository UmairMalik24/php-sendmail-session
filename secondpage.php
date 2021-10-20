<?php session_start() ?>
<?php

$newarr = $_SESSION['qr'];

$qrcodes = explode(",",$newarr);

$qrcodes =  array_map('trim', $qrcodes);
 
$count = array_count_values($qrcodes);
$chek = array_keys($count);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> -->

    <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <!------ Include the above in your HEAD tag -------->
    <title>Receipt</title>
</head>





<div class="container" id="email-data">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    
                        <p><strong>Buyer's Name: </strong><?php echo $_SESSION['buyer'] ?></p>
                        <p><strong>Email: </strong><?php echo $_SESSION['email'] ?></p>
                        <p>
                        <p><strong>Store Title: </strong><?php echo $_SESSION['store'] ?></p>
                        <br>
                        <p>
                        <em>Receipt's Total: <strong><?php echo $_SESSION['total'] ?></strong></em>
                    </p>
                        
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>Date: <?php echo $_SESSION['date'] ?></em>
                    </p>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Receipt</h1>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">UPC CODE</th>
                            <th class="text-center">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $total = 0;
                        foreach($chek as $key)
                        {
                            echo "<tr><td class='text-center col-md-9'><em>$key</em></h4></td><td class='col-md-1' style='text-align: center'> $count[$key]  </td></tr>";
                            $total = $total+$count[$key];
                        }
               
                    ?>
                        <tr>
                            <td class='text-center col-md-9'><strong>Total</strong></h4></td>
                            <td class='text-center col-md-1'><strong><?php echo $total ?></strong></h4></td>
                        </tr>
                        
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            
                        </tr>
                    </tbody>
                </table>
                <!-- <button type="button" class="btn btn-success btn-lg btn-block">
                    Pay Now   <span class="glyphicon glyphicon-chevron-right"></span>
                </button> </td>
            </div>
        </div>
    </div>
                    </div>
    
    </html>
    <script>
        
        $.ajax({
            url: 'sendmail.php', //This is the current doc
            type: "POST",
            // dataType:'json', // add json datatype to get json
            data: ({name: $("#email-data").html()}),
            success: function(data){
                console.log("data");
            }
        });  
        // $.ajax(
        // 'sendmail.php',
        // {
        //     success: function(data) {
        //         alert('AJAX call was successful!');
        //         alert('Data from the server' + data);
        //     },
        //     error: function() {
        //         alert('There was some error performing the AJAX call!');
        //     }
        // }
        // );
    </script>
    <script>
        $(document).ready(function () {
            <?php $var = '$("#email-data").html();'; ?>
        });
    </script>
        
<?php



$pageStart = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MY WEBSITE PAGE</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> 
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
    var d = $("#email-data").html()
    //console.log($("#email-data").html());
    $("#dumm").html(d);
});
</script>
</head>
<body>
    <h1>Test</h1>
    <div id="dumm">
    
    </div>
</body>
</html>';

// echo $pageStart;
//print $var;
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;
// require 'vendor/phpmailer/phpmailer/src/Exception.php';
// require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
// require 'vendor/phpmailer/phpmailer/src/SMTP.php';

// // passing true in constructor enables exceptions in PHPMailer
// $mail = new PHPMailer(true);

// try {
//     // Server settings
//     $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
//     $mail->isSMTP();
//     $mail->Host = 'smtp.gmail.com';
//     $mail->SMTPAuth = true;
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//     $mail->Port = 587;

//     $mail->Username = 'omair6336@gmail.com'; // YOUR gmail email
//     $mail->Password = 'umairmalik6336'; // YOUR gmail password

//     // Sender and recipient settings
//     $mail->setFrom('omair6336@gmail.com', 'Sender Name');
//     $mail->addAddress('umair6336@gmail.com', 'Receiver Name');
//     $mail->addReplyTo('umair6336@gmail.com', 'Sender Name'); // to set the reply to

//     // Setting the email content
//     $mail->IsHTML(true);
//     $mail->Subject = "Send email using Gmail SMTP and PHPMailer";
//     //$mail->Body = 'HTML message body. <b>Gmail</b> SMTP email body.';
//     $mail->Body = $pageStart;

//     $chk = $mail->send();
//     if($chk){
//     echo 'Email message sent.';
// }
// } catch (Exception $e) {
//     echo 'Error in sending email. Mailer Error: {$mail->ErrorInfo}';
// }