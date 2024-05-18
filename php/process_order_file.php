<?php
    session_start();
    include '../database_config/config.php';
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require '../phpmailer/src/Exception.php';
    require '../phpmailer/src/PHPMailer.php';
    require '../phpmailer/src/SMTP.php';
    
    if($_SERVER['REQUEST_METHOD'] =='POST')
    {
        $_name = $_POST['name'];
        $email = $_POST['email'];
        
        //checking email into database
        $checkEmailQuery = "SELECT * FROM customer "
                         . "WHERE email = '$email' ";

        $emailCheckedResult = $conn->query($checkEmailQuery);

        if ($emailCheckedResult-> num_rows != 1) 
        {
            echo "<script>alert('Create the account to buy our house plan');</script>";
            echo "<script>window.location.href = '../php/register.php';</script>";
            exit();
        }
        
        $image_id = $_SESSION['image_id'];
        $name = $_SESSION['name'];
        $price = $_SESSION['price'];
        $document = $_SESSION['document'];
        $currentDate = date('Y-m-d');
        
        
        //insert data into database 
        $insertSQL = "INSERT INTO orders (customer_email , image_id , image_name , image_price , buy_date ) "
                    ." VALUES ( '$email','$image_id' , '$name' , '$price' , '$currentDate' )";
        
        if($conn->query($insertSQL) === TRUE)
        {
            $mail = new PHPMailer(true);
            
            try
            {
                //Server settings
                
                // Set mailer to use SMTP
                $mail->isSMTP(); 
                
                // Specify main and backup SMTP servers
                $mail->Host = 'smtp.gmail.com';
                
                // Enable SMTP authentication
                $mail->SMTPAuth = true;        
                
                // SMTP username
                $mail->Username = 'bryannevhutalu7@gmail.com'; 
                
                // SMTP password
                $mail->Password = 'giczlilkdytwrkuc';    
                
                // Enable TLS encryption, `ssl` also accepted
                $mail->SMTPSecure = 'ssl';    
                
                // TCP port to connect to
                $mail->Port = 465;                 

                //Recipients
                $mail->setFrom('bryannevhutalu7@gmail.com', 'Nova associate');
                
                // Add a recipient
                $mail->addAddress($email);  
                
                // Optional: Add reply-to address
                $mail->addReplyTo($email, 'Information');  

                $mail->addAttachment($document);
                // Content
                $mail->isHTML(true);  
                
                // Set email format to HTML
                $mail->Subject = 'Payment';
                $mail->Body    = "<b>$_name</b> your payments is recieved <br><b>Below is the house plan details you buy :</b><br>"
                                ."<ul>"
                                    . "<li>$name</li>"
                                    . "<li>Cost R$price</li>"
                                ."</ul>"
                                . "Below is the pdf that tell you more about <b>Nova Associate</b><br><br>"
                                . "<b>Thank you</b>";
                $mail->AltBody = '';

                $mail->send();
            echo "<script>alert('Confrimation payment has been sent to your email');</script>";

            } catch (Exception $e) {
                echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo} ');</script>";
            }
            
        echo "<script>alert('Successfully payment');</script>";
            echo "<script>window.location.href = '../php/properties.php';</script>";
            exit();
        }     
    }

