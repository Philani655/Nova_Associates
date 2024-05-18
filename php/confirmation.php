<?php 
    session_start();
    
    $name = $_SESSION['name'];
    $price = $_SESSION['price']; 
    
?>
    
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Check Out Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../css/confirmation.css" rel="stylesheet">
  </head>
<body>
    <form action="../php/proceed_payment.php" method="Post">
    <div class="order-summary">
      <h1 class="text-center">Order Summary</h1>
      <div class="row mt-4">
        <div class="col-sm-6">
            <p class="fw-light">House Type</p>
        </div>
        <div class="col-sm-6">
            <span><?=$name?></span>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <p class="fw-light">Price</p>
            </div>
            <div class="col-sm-6">
                <span>&emsp;R<?=$price?></span>
            </div>
        </div>
        <hr class="text-dark opacity-30" style="margin-left: 10px; width: 95%;">
        <div class="row">
            <div class="col-sm-6 fw-bold">
                <p class="fw-light">Total Price</p>
            </div>
            <div class="col-sm-6">
                <span>&emsp;R<?=$price?></span>
            </div>
        </div>
    </div>
        <div class="d-grid gap-2 col-12 mx-auto mt-3">
            <input type="submit" value="Check Out" class="btn btn-primary button" style="background-color: #1d471d;">
        </div>
    </div>
    </form>
</body>
</html>