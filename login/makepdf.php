<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/autoload.php';

//Grab variables
$message1 = $_POST['message1'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$address = $_POST['address_line_1'];
$suburb = $_POST['suburb'];
$city = $_POST['city'];
$postcode = $_POST['postcode'];
$np = $_POST['Network_Performance'];
$nl = $_POST['Network_Latency'];
$nu = $_POST['Network_Update_Rate'];
$rnp1 = $_POST['Re_Check_Performance1'];
$tl = $_POST['Tag_Latency'];
$tur = $_POST['Tag_Update_Rate'];
$rnp2 = $_POST['Re_Check_Performance2'];
$not = $_POST['Number_of_Tags'];
$message2 = $_POST['message2'];


$foo = '';
for ($i = 1; $i <= 10; $i++) {
    if ( (isset($_POST["Area_Name".$i]) && !empty($_POST["Area_Name".$i])) && (isset($_POST["Network_Setup".$i]) && !empty($_POST["Network_Setup".$i])) && (isset($_POST["Area_Type".$i]) && !empty($_POST["Area_Type".$i])) && (isset($_POST["Area".$i]) && !empty($_POST["Area".$i])) && (isset($_POST["Height".$i]) && !empty($_POST["Height".$i])) ) {
        $foo .= '
          <tr>
            <td>' . $_POST['Area_Name'.$i] . '</td>
            <td>' .  $_POST['Network_Setup'.$i] . '</td>
            <td>' . $_POST['Area_Type'.$i] . '</td>
            <td>' . $_POST['Area'.$i] . '</td>
            <td>' . $_POST['Height'.$i] . '</td>
          </tr>';  
    }
}

//Create new PDF instance
//$footertext='{PAGENO} - {DATE j-m-Y} - Wamazoola Forms';
$mpdf = new \Mpdf\Mpdf();

//$stylesheet = file_get_contents('style.css');
//Create PDF

// Write PDF
//$mpdf->WriteHTML($data);
$mpdf->WriteHTML('
<div class="logo-img">
    <a href="http://ucr.nz">
        <img src="img/logofinal.png" alt="">
    </a>
</div>
<h2>New Use Case Matrix</h2>
<h3>Side Estimator</h3>
<strong>First Name: </strong>' . $fname . '<br />
<strong>Last Name: </strong>' . $lname . '<br />
<strong>Email: </strong>' . $email . '<br /><br />
<strong>Address: </strong>' . $address . '<br />
<strong>Suburb: </strong>' . $suburb . '<br />
<strong>City: </strong>' . $city . '<br />
<strong>Postcode: </strong>' . $postcode . '<br />
<h3>Summary Description<br /></h3>
' . $message1 .'
<br />
<br />

<style>
#customers {
  font-family: "Roboto", sans-serif;
  font-size: 12px;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #f37a20;
  color: white;
}
</style>
<table id="customers">
  <tr>
    <th></strong>Use Case<strong></th>
    <th></strong>Results<strong></th>
  </tr>
  <tr>
    <td><strong>Minimum Network Performance Setting</strong></td>
    <td>' . $np . '</td>
  </tr>
  <tr>
    <td><strong>Network Technical Performance - Latency</strong></td>
    <td>' . $nl . '</td>
  </tr>
  <tr>
    <td><strong>Network Technical Performance - Update Rate</strong></td>
    <td>' . $nu . '</td>
  </tr>
  <tr>
    <td><strong>Re-Check Minimum Network Performance Setting</strong></td>
    <td>' . $rnp1 . '</td>
  </tr>
  <tr>
    <td><strong>Tag Performance - Tag power</strong></td>
    <td>' . $tl . '</td>
  </tr>
  <tr>
    <td><strong>Tag Performance - Update rate</strong></td>
    <td>' . $tur . '</td>
  </tr>
  <tr>
    <td><strong>Re-Check Minimum Network Performance Setting</strong></td>
    <td>' . $rnp2 . '</td>
  </tr>
  <tr>
    <td><strong>Number of Tags</strong></td>
    <td>' . $not . '</td>
  </tr>
  </table>
  
<h3>Summary Description<br /></h3>
' . $message2 . '
<br />
<br />
  
<style>
#customers {
  font-family: "Roboto", sans-serif;
  font-size: 12px;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #f37a20;
  color: white;
}
</style>
<table id="customers">
  <tr>
    <th></strong>Area Name<strong></th>
    <th></strong>Network Setup<strong></th>
    <th></strong>Area Type<strong></th>
    <th></strong>Area m²<strong></th>
    <th></strong>Height<strong></th>
  </tr>
  '. $foo .'
</table>
');

$data = '';

$data .= '<h1>New Case Details</h1>';

//Add Data
//if($message1)
//{
//    $data .= '<br /><strong>Message: </strong><br />' .$message1. '<br />';
//}
$data .= '<strong>First Name: </strong>' . $fname . '<br />';
$data .= '<strong>Last Name: </strong>' . $lname . '<br />';
$data .= '<strong>Email: </strong>' . $email . '<br /><br />';
$data .= '<strong>Address: </strong>' . $address . '<br />';
$data .= '<strong>Suburb: </strong>' . $suburb . '<br />';
$data .= '<strong>City: </strong>' . $city . '<br />';
$data .= '<strong>Postcode: </strong>' . $postcode . '<br />';

//Output to string
$pdf = $mpdf->Output('','S');
//$mpdf->Output('mypdf.pdf','D');


//Grab enquiry data
$enquirydata = [
    
    'fname' => $fname,
    'lname' => $lname,
    'email' => $email,
    'address_line_1' => $address,
    'suburb' => $suburb,
    'city' => $city,
    'postcode' => $postcode,
];



//Run the function
sendEmail($pdf,$enquirydata);




function sendEmail($pdf, $enquirydata)
{
    
    
$emailbody = '';

$emailbody .= '<h1>Email enquiry from: ' . $enquirydata['fname'] .'</h1>';
$emailbody .= 'First Name: ' . $enquirydata['fname'] . '<br />';
$emailbody .= 'Last Name: ' . $enquirydata['lname'] . '<br />';
$emailbody .= 'Email: ' . $enquirydata['email'] . '<br />';
$emailbody .= 'Address: ' . $enquirydata['address_line_1'] . '<br />';
$emailbody .= 'Suburb: ' . $enquirydata['suburb'] . '<br />';
$emailbody .= 'City: ' . $enquirydata['city'] . '<br />';
$emailbody .= 'Postcode: ' . $enquirydata['postcode'] . '<br />';

//foreach ($enquirydata as $title => $data)
//{
//    
//    $emailbody .= '<strong>' . $title . '<strong>: ' . $data . '<br />';
//    
//}
    
    
    
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = false;                      // Enable verbose debug output
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
//    $mail->addCC('rossanderson@ucr.nz', 'rossanderson');
    $mail->addCC('alexviana@ucr.nz', 'Alex Viana');
    
    
    //Attachments
    $mail->addStringAttachment($pdf, 'myattachment.pdf');

    for ($ct = 0; $ct < count($_FILES['userfile']['tmp_name']); $ct++) {
        
    $uploadfile = tempnam(sys_get_temp_dir(), hash('sha256', $_FILES['userfile']['name'][$ct]));
    $errors= array();
    $filename = $_FILES['userfile']['name'][$ct];
    $file_size =$_FILES['userfile']['size'][$ct];
    $file_tmp =$_FILES['userfile']['tmp_name'][$ct];
    $file_type=$_FILES['userfile']['type'][$ct];
    $file_ext=strtolower(end(explode('.',$_FILES['userfile']['name'][$ct])));
        
    $extensions= array("jpeg","jpg","png");
        
    if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
        
    if(empty($errors)==true){
         $mail->addAttachment($file_tmp,"images/".$filename);
         echo "Success";
      }else{
         print_r($errors);
      }
}
    
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