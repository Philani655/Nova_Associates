<?php 
    session_start(); 
    $price = $_SESSION['price'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proceed Payment Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../css/proceed.css" rel="stylesheet">
  </head>
  <body>
      <div class="container" onsubmit="return amount_validate()" >
     <form action="../php/process_order_file.php" method="post" onsubmit="return valid_credit_card()">
        <div class="row" >
          <div class="col">
                <h3 class="title">Biling Amount </h3>
                <div class="inputBox">
                    <span>Full Name :</span>
                    <input type="text" name="name" id="name" placeholder="Full name" required/>
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" name="email" id="email" placeholder="Email" required/>
                </div>
                <div class="inputBox">
                    <span>Address :</span>
                    <input type="text" name="address" id="address" placeholder="Address" required/>
                </div>
                <div class="inputBox">
                    <span>City :</span>
                    <input type="text" name="city" id="city" placeholder="City" required/>
                </div>
            </div>

            <div class="col">
                <h3 class="title">Payment</h3>
                <div class="inputBox">
                    <span>Card Accepted :</span>
                    <img src="../images/card_img.png">
                </div>
                <div class="inputBox">
                    <span>Name Of Card :</span>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="card">
                        <option value="Standard Bank">Standard Bank</option>
                        <option value="FirstRand">FirstRand</option>
                        <option value="ABSA ">ABSA</option>
                        <option value="Nedbank">Nedbank</option>
                        <option value="Capitec">Capitec</option>
                    </select>
                </div>
                <div class="inputBox">
                    <span>Credit Card Number :</span>
                    <input type="text" name="cardNumber" id="cardNumber" required/>
                </div>
                <div class="inputBox">
                    <span>Pay Amount :<b>R<?=$price?></b></span>
                    <input type="text" name="amount" id="amount" placeholder="<?=$price?>" required/>
                    <input type="hidden" name="price" id="price" value="<?=$price?>"/>
                </div>
                <div class="inputBox">
                    <span>Exp Month & Year :</span>
                    <input type="month" name="month" required/>
                </div>
            </div>
        </div>

         <input type="submit" value="Proceed to checkout" class="submit-btn">
    </form>
</div>
      <script src="../javascript/account_validation.js"></script>
  </body>
</html>