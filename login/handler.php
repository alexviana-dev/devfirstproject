<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */
require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;


$pp = new FormHandler(); 

$validator = $pp->getValidator();
$validator->fields(['Network_Performance','Network_Latency','Network_Update_Rate','Re_Check_Performance','Tag_Latency','Tag_Update_Rate','Re_Check_Performance','Number_of_Tags','Open_Area_Name1','Open_Area_Network_Setup1','Open_Area1','Semi_Confined_Name1','Semi_Confined_Network_Setup1','Semi_Confined_Area1','Confined_Name1','Confined_Network_Setup1','Confined_Area1','Open_Area_Name2','Open_Area_Network_Setup2','Open_Area2','Semi_Confined_Name2','Semi_Confined_Network_Setup2','Semi_Confined_Area2','Confined_Name2','Confined_Network_Setup2','Confined_Area2','Open_Area_Name3','Open_Area_Network_Setup3','Open_Area3','Semi_Confined_Name3','Semi_Confined_Network_Setup3','Semi_Confined_Area3','Confined_Name3','Confined_Network_Setup3','Confined_Area3','Open_Area_Name4','Open_Area_Network_Setup4','Open_Area4','Semi_Confined_Name4','Semi_Confined_Network_Setup4','Semi_Confined_Area4','Confined_Name4','Confined_Network_Setup4','Confined_Area4','Open_Area_Name5','Open_Area_Network_Setup5','Open_Area5','Semi_Confined_Name5','Semi_Confined_Network_Setup5','Semi_Confined_Area5','Confined_Name5','Confined_Network_Setup5','Confined_Area5','Open_Area_Name6','Open_Area_Network_Setup6','Open_Area6','Semi_Confined_Name6','Semi_Confined_Network_Setup6','Semi_Confined_Area6','Confined_Name6','Confined_Network_Setup6','Confined_Area6','Open_Area_Name7','Open_Area_Network_Setup7','Open_Area7','Semi_Confined_Name7','Semi_Confined_Network_Setup7','Semi_Confined_Area7','Confined_Name7','Confined_Network_Setup7','Confined_Area7','Open_Area_Name8','Open_Area_Network_Setup8','Open_Area8','Semi_Confined_Name8','Semi_Confined_Network_Setup8','Semi_Confined_Area8','Confined_Name8','Confined_Network_Setup8','Confined_Area8','Open_Area_Name9','Open_Area_Network_Setup9','Open_Area9','Semi_Confined_Name9','Semi_Confined_Network_Setup8','Semi_Confined_Area9','Confined_Name9','Confined_Network_Setup9','Confined_Area9','Open_Area_Name10','Open_Area_Network_Setup10','Open_Area10','Semi_Confined_Name10','Semi_Confined_Network_Setup10','Semi_Confined_Area10','Confined_Name10','Confined_Network_Setup10','Confined_Area10'])->areRequired()->maxLength(50);
$validator->field('comments')->maxLength(6000);



$pp->sendEmailTo('alexandreviana65@gmail.com'); // ← Your email here

echo $pp->process($_POST);