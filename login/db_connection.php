<?php include 'db_test.php';

$conn = OpenCon();

echo "Connected Successfully";

CloseCon($conn);

?>
<!--

//$my_controller = StartServer(5001);
//$my_controller.map('/sendContact', sendContact());
//
//function sendContact() {
//    $to = "ale.viana_afonso@hotmail.com";
//    $from = $_REQUEST['email'];
//    $name = $_REQUEST['name'];
//    $subject = $_REQUEST['subject'];
//    $number = $_REQUEST['number'];
//    $cmessage = $_REQUEST['message'];
//
//      $conn.run_query('INSERT INTO root.my_orders VALUES ()');
//
//    $headers = "From: $from";
//	$headers = "From: " . $from . "\r\n";
//	$headers .= "Reply-To: ". $from . "\r\n";
//	$headers .= "MIME-Version: 1.0\r\n";
//	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
//
//    $subject = "You have a message from your Bitmap Photography.";
//
//    $logo = 'img/logo.png';
//    $link = '#';
//
//	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
//	$body .= "<table style='width: 100%;'>";
//	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
//	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
//	$body .= "</td></tr></thead><tbody><tr>";
//	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
//	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
//	$body .= "</tr>";
//	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
//	$body .= "<tr><td></td></tr>";
//	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
//	$body .= "</tbody></table>";
//	$body .= "</body></html>";
//
//    $send = mail($to, $subject, $body, $headers);
//}
-->
