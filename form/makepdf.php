<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/autoload.php';

//Grab variables
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

//Create new PDF instance
$mpdf = new \Mpdf\Mpdf();


//Create PDF

$data = '';

$data .= '<h1>New Case Details</h1>';

//Add Data
$data .= '<strong>First Name: </strong>' . $fname . '<br />';
$data .= '<strong>Last Name: </strong>' . $lname . '<br />';
$data .= '<strong>Subject: </strong>' . $subject . '<br />';
$data .= '<strong>Email: </strong>' . $email . '<br />';
$data .= '<strong>Phone: </strong>' . $phone . '<br />';

if($message)
{
    $data .= '<br /><strong>Message</strong><br />' .$message;
}

// Write PDF
$mpdf->WriteHTML($data);
$mpdf->WriteHTML('<h1>Hello world!</h1>');

//Output to string 
$pdf = $mpdf->Output('','S');


//Grab enquiry data
$enquirydata = [
    
    'fname' => $fname,
    'lname' => $lname,
    'subject' => $subject,
    'email' => $email,
    'phone' => $phone,
    'message' => $message
];



//Run the function
sendEmail($pdf,$enquirydata);




function sendEmail($pdf, $enquirydata)
{
    
    
$emailbody = '';

$emailbody .= '<h1>Email enquiry from ' . $enquirydata['fname'] .'</h1>';

foreach ($enquirydata as $title => $data)
{
    
    $emailbody .= '<strong>' . $title . '<strong>: ' . $data . '<br />';
    
}
    
    
    
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'ucr.nz';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'admin@ucr.nz';                     // SMTP username
    $mail->Password   = 'S[0ZlbnSy])U';                               // SMTP password
    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    
    //Recipients
    $mail->setFrom('admin@ucr.nz', 'admin');
    $mail->addAddress($enquirydata['email'], $fname);     // Add a recipient
    $mail->addCC('rossanderson@ucr.nz', 'rossanderson');
    $mail->addCC('alexviana@ucr.nz', 'Alex Viana');
    
    
    //Attachments
    $mail->addStringAttachment($pdf, 'myattachment.pdf');
    
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Enquiry from ' . $enquirydata['fname'];
    $mail->Body    = $emailbody;
    $mail->AltBody = strip_tags($emailbody);

    $mail->send();
    
    
    header('Location:thanks.php?fname=' . $enquirydata['fname']);

} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}   
    
}
?>