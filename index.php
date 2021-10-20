<?php session_start() ?>

<?php 

    if(isset($_POST['submit']))
    {
        $buyer = $_POST['name'];
        $email = $_POST['email'];
        $total = $_POST['total'];
        $store = $_POST['store'];
        $qr = $_POST['barcodes'];
        $date = $_POST['date'];

        
        $_SESSION['buyer'] = $buyer;
        $_SESSION['email'] = $email;
        $_SESSION['total'] = $total;
        $_SESSION['store'] = $store;
        $_SESSION['date'] = $date;
        $_SESSION['qr'] = $qr;
        header("Location: secondpage.php");
        exit();       
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>

    
<div class="container" style="margin-top:100px">
    <form action="#" method="POST">
        <div class="row mb-3">
            <label for="name" class="col-sm-1 col-form-label">Buyer's Name</label>
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="John Doe" id="name" name="name">
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-md-1 col-form-label">Email</label>
            <div class="col-md-6" >
                <input type="email" class="form-control" placeholder="xyz@example.com" id="email" name="email">
            </div>
        </div>
        <div class="row mb-3">
            <label for="total" class="col-sm-1 col-form-label">Total</label>
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder = "$100" id="total" name="total" style="width:200px">
            </div>
        </div>
        <div class="row mb-3">
            <label for="store" class="col-sm-1 col-form-label">Store Title</label>
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Walmart" id="store" name="store">
            </div>
        </div>
        <div class="row mb-3">
            <label for="date" class="col-sm-1 col-form-label">Date</label>
            <div class="col-md-6">
                <input type="date" class="form-control" id="date" name="date">
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-sm-1 col-form-label">Barcodes</label>
            <div class="col-md-6">
                <textarea class="form-control" name="barcodes" id="barcodes" cols="30" rows="10"></textarea>
            </div>
        </div>
        <input type="submit" class="btn btn-primary" name="submit">
    </form>
</div>

<script>
    $('textarea').keypress(function(e){
        if (e.keyCode == 13) {
            // alert($('textarea').val());
            $('textarea').val($('textarea').val() + ',');
        }
    });
</script>

</body>
</html>