<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



//Load composer's autoloader
require 'vendor/autoload.php';


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
  
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'rahathasan4422@gmail.com';                 // SMTP username
    $mail->Password = 'path905an';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('rahathasan4422@gmail.com');
    $mail->addAddress('jahidulpathan@gmail.com');     // Add a recipient

    $mail->addAttachment('my_pdf.pdf');         // Add attachments
    $mail->addAttachment('Project Proposal ASH-1401056M.docx');

    $body = '<center><p>THANK YOU FOR REGISTRING</p></center>';

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Welcome!';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);
    

    $mail->send();
    //echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

