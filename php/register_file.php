<?php

include '../database_config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    //checking user passwords
    if ($password != $confirm_password) 
    {
        echo "<script>alert('Invalid password');</script>";
        exit();
    }
    
    //checking email into database
    $checkEmailQuery = "SELECT * FROM customer "
                     . "WHERE email = '$email' ";

    $emailCheckedResult = $conn->query($checkEmailQuery);

    if ($emailCheckedResult-> num_rows == 1) 
    {
        echo "<script>alert('Email already exists');</script>";
        echo "<script>window.location.href = '../php/register.php';</script>";
        exit(); // Stop further execution
    }
    
    //insert data into database 
    $insertSQL = "INSERT INTO customer (email , phone , password ) "
                ." VALUES ('$email' , '$phone' , '$password' )";
    
    if($conn->query($insertSQL) === TRUE)
    {
        echo "<script>alert('Account created successfully');</script>";
        echo "<script>window.location.href = '../php/login.php';</script>";
    }
}
  
