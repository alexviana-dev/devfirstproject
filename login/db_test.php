<?php function OpenCon()
 {
 $servername = "localhost";
 $username = "ucrnc_admin";
 $password = "if9pmUZJ5YEdNiC";
 $db = "ucrnc_logindatabase";
    
 $conn = new mysqli($servername, $username, $password, $db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }


 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>