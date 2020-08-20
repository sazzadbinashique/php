<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';


if(isset($_POST['submit'])) {
    $postData= $_POST;
    $first_name = strip_tags(trim($postData['first_name']));
    $last_name = strip_tags(trim($postData['last_name']));
    $name = $first_name . ' ' . $last_name;
    $email = strip_tags(trim($postData['email']));
    $phone = strip_tags(trim($postData['phone']));
    $subject = strip_tags(trim($postData['subject']));
    $message = strip_tags(trim($postData['message']));
//    var_dump($message);die();

    if (empty($first_name) || empty($last_name) || empty($phone) || empty($email) || empty($subject) || empty($message)) {
        header('location:index.php?error');
    } else {

        $email_value = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (filter_var($email_value, FILTER_VALIDATE_EMAIL)) {
            $email = $email_value;
        } else {
            header('location:index.php?email');
        }

        $phone_value = preg_match('/\+?([0-9]{2})-?([0-9]{3})-?([0-9]{6,7})/', $phone);
        if ($phone_value == 1) {
            $phone = $phone;
        }else{
            header('location:index.php?phone');
        }
        /* $subject_value= preg_replace('/[^A-Za-z0-9\-]/', '', $subject);
         if($subject_value){
             $subject = $subject_value;
         }else{
             header('location:index.php?subject');
         }*/

        $mail = new PHPMailer();

        try {
            //Server settings
            $mail->SMTPDebug = false;                                            // Enable verbose debug output
            $mail->isSMTP();                                                    // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                               // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                           // Enable SMTP authentication
            $mail->Username   = 'test.revo.interactive@gmail.com';                        // SMTP username
            $mail->Password   = 'WHulqpYR@account';                                // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;                    // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 465; //587                                      // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom($email, $name);
            //$mail->addAddress('index.php@revo-interactive.com', 'Revo Interactive');       // Add a recipient
            $mail->addAddress('sazzad.sumon35@gmail.com', 'Revo Interactive');       // Add a recipient

            // Content
            $mail->isHTML(true);                                          // Set email format to HTML
            $mail->Subject = $subject;
            $body_message = '
                <html>
                <head>
                  <title>Sender - '.$name.'</title>
                </head>
                <body>
                  <p>Here are the information</p>
                  <table width="100%">
                    <tr>
                      <td width="20%">Name: </td><td width="80%">'.$name.'</td>
                    </tr>
                    <tr>
                    <td width="20%">Email: </td><td width="80%">'.$email.'</td>
                    </tr>
                    <tr>
                    <td width="20%">Phone No: </td> <td width="80%">'.$phone.'</td>
                    </tr>
                  
                    <tr>
                            <td width="20%">Message: </td>
                          <td width="80%">'.$message.'</td>
                    </tr>
                    
                  </table>
                </body>
                </html>
                ';
            $mail->Body    = $body_message;

            if($mail->send()){
                header("location:index.php?success");
            } else {
                var_dump('asdf');die();
                header('location:index.php?not_sent');
            }
        } catch (Exception $e) {
            header('location:index.php?not_sent');
        }
    }
}else{
    header('location:index.php?not_sent');
}


