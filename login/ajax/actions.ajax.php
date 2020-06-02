<?php
// If necessary then set these
ini_set('post_max_size', '1000M');
ini_set('upload_max_filesize', '1000M');
ini_set('memory_limit','1000M');

require('../az.multi.upload.class.php');
$rename	=	'area';
//$rename	=	rand(1000,5000).time();
$upload	=	new ImageUploadAndResize();
$upload->uploadFiles('files', '../uploads', true, 250, '../mini-logo.png', 20, 20, $rename, 0777, 100, '850', '250');

// If want to insert files names into DB
// Un comment below code and set query with respect to your DB
//
//$db   =   new mysqli('localhost','root','root','practice');
// 
//print"<pre>";
//foreach($upload->prepareNames as $name){
//    $sql = "INSERT INTO dropzone (name) VALUES ('".$name."')";
// 
//    if ($db->query($sql) === TRUE) {
//        echo "New record created successfully";
//    } else {
//        echo "Error: " . $sql . "<br>" . $db->error;
//    }
//}
//print"</pre>";
