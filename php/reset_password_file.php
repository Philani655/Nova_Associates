<?php
    include '../database_config/config.php';

    if($_SERVER['REQUEST_METHOD'] =='POST')
    {
        $email = $_POST['email'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];
        
        if($new_password!==$confirm_password)
        {
            echo "<script>window.location.href = '../php/reset_password.php';</script>";
            exit();
        }

        //checking email from database
        $updateSQL = "UPDATE customer ".
                     "SET password = '$confirm_password' ".
                     "WHERE email = '$email' ";

        if($conn->query($updateSQL) === TRUE)
        {
            echo "<script>alert('Password has been successfully updated');</script>";
            echo "<script>window.location.href = '../php/login.php';</script>";
        }
        else
        {
            echo "<script>alert('Something went wrong with your new password and email');</script>";
            echo "<script>window.location.href = '../php/reset_password.php';</script>";
        }
    }

