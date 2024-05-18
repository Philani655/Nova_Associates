<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="../images/logo.jpg">
    <link rel="stylesheet" href="../css/reset.css">
    <title>Reset Password</title>
</head>
<body>
    <?php
        include '../php/reset_password_file.php';
    ?>
    <div class="container">
        <div class="form">
            <span class="title">Reset Password</span></br>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return reset_password()">
                <p class="text">
                    Create a new password for your Nova Associates account and submit
                    an email for new password conformation.
                </p>
                <div class="field">
                    <input type="text" name="email" id="email" placeholder="Enter your email" required/>
                    <i class='bx bxs-envelope'></i>
                </div>

                <div class="field">
                    <input type="password" name="new_password" id="new_password" placeholder="New Password" required/>
                    <i class='bx bxs-lock-alt icon'></i>
                </div>

                <div class="field">
                    <input type="password" name="confirm_password" id="confirm_password"  placeholder="Confirm Password" required/>
                    <i class='bx bxs-lock-alt icon'></i>
                </div>

                <div class="field button">
                    <input type="submit" value="Reset Password">
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
     crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../javascript/reset_password_account.js"></script>
</body>
</html>