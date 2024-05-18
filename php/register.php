<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="../images/logo.jpg">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="../css/register_style.css" rel="stylesheet">
  </head>
  <body>
<?php
    include '../php/register_file.php';
?>
    <div class="container-fluid">
        <form class="mx-auto" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return validate_account()">
            <h4 class="text-center fw-bold">Create An Account</h4>
            <div class="form-group mb-3 mt-5">
                <i class='icon bx bxs-envelope fa-lg'></i>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" aria-describedby="emailHelp">
            </div>
            <div class="form-group mb-3">
                <i class='icon bx bxs-phone fa-lg'></i>
                <input type="phone" class="form-control" id="phone" name="phone" placeholder="Phone Number" aria-describedby="phoneHelp">
            </div>
            <div class="form-group mb-3">
                <i class='icon bx bxs-lock-alt fa-lg'></i>
                <input type="password" class="form-control" id="password" name="password"placeholder="Password" aria-describedby="passwordHelp">
            </div>
            <div class="form-group">
                <i class='icon bx bxs-lock-alt fa-lg'></i>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" aria-describedby="confirmPasswordHelp">
            </div>
            <div class="mt-4 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">I hereby declare that the above information is true and correct</label>
            </div>
                <button type="submit" class="btn btn-primary mt-4">Register</button>
        </form>
    </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
     crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../javascript/register_account.js"></script>
  </body>
</html>