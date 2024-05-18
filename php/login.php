<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="../images/logo.jpg">
    <link rel="stylesheet" href="../css/login_style.css">
    <title>Login</title>
</head>
<body>
     <?php
        include '../php/login_file.php';
    ?>
    <div class="container-fluid">
        <form class="mx-auto" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return validate_login()">
            <h4 class="text-center fw-bold">Login</h4>
            <div class="form-group mb-3 mt-5">
                <i class='icon bx bxs-envelope fa-lg'></i>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" aria-describedby="emailHelp">
            </div>
            <div class="form-group mb-3 mt-4">
                <i class='icon bx bxs-lock-alt fa-lg'></i>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password"> 
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input pt-3 ps-3 mt-3" id="exampleCheck1">
                <label class="form-check-label mt-3 " for="exampleCheck1">Remember me</label>
                <label class="form-label ms-4"><a href="reset_password.php">Forgot password?</a></label>
            </div>
                <button type="submit" class="btn btn-primary mt-4">Login</button>
            <div class="mt-3">
                <label class="form-label ms-5">Don't have an account?<a href="register.php">Sign up</a></label>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
     crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../javascript/login_account.js"></script>
    
</body>
</html>