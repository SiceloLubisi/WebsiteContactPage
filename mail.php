<?php
    
    if(isset($_POST['btn-send']))
    {
        $name = $_POST['inputname'];
        $email = $_POST['inputemail'];
        $phone = $_POST['inputphone'];
        $companyName = $_POST['inputcompany'];
        $subject = $_POST['inputsubject'];
        $message = $_POST['inputmessage'];


        if(empty($name) || empty($email) || empty($phone) || empty($companyName) || empty($subject) || empty($message))
        {
            header('location:contact.php?error');
        }

        else
        {
            $to = "meglubicystudios@gmail.com"; 
            $body = ""; 

            $body .= "Evolve Systems Contact Page Visitor Information:\r\n\r\n";
            $body .= "From: ".$name. "\r\n";
            $body .= "Company Name: ".$companyName. "\r\n"; 
            $body .= "Email: ".$email. "\r\n";
            $body .= "Phone number: ".$phone. "\r\n";
            $body .= "Message: ".$message. "\r\n";


            if(mail($to, $subject, $body))
            {
                header("location:contact.php?success"); 
            }
        }
    }
    else
    {
        header("location:contact.php"); 
    }
?>

