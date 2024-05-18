<?php
    include '../database_config/config.php';
    
    if($_SERVER['REQUEST_METHOD'] =='POST')
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        //checking email from database
        $searchSQL = "SELECT * FROM customer ".
                     "WHERE email = '$email' ".
                     "AND ".
                     "Password = '$password' ";
        
        $userLoginResult = $conn->query($searchSQL);
                
        //checking the result number of rows
        if($userLoginResult->num_rows == 1)
        {
            echo "<script>window.location.href = '../php/properties.php';</script>";
        }
        else
        {
            echo "<script>alert('Invalid login try again');</script>";
            echo "<script>window.location.href = '../php/login.php';</script>";
        }   
    }

