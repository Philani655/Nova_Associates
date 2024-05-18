<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    
    $image_id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $document = $_POST['document'];
    
    $_SESSION['image_id'] = $image_id;
    $_SESSION['name'] = $name;
    $_SESSION['price'] = $price;
    $_SESSION['document'] = $document;

    header("Location:../php/confirmation.php");
    exit();
}



