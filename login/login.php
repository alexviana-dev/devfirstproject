<?php
$User=$_POST['User'];//username
$Pass=$_POST['Pass'];//password 
session_start();

$con=mysqli_connect("localhost","root","","practice");//mysqli("localhost","username of database","password of database","database name")
$result=mysqli_query($con,"SELECT * FROM `loginform` WHERE `User`='$User' && `Pass`='$Pass'");
$count=mysqli_num_rows($result);
if($count==1)
{
	echo "";
	$_SESSION['log_in']=1;
	include('UseCaseMatrix.php');

}
else
{
	echo "Login or Password incorrect";
	header("refresh:2;url=login.html");// it takes 2 sec to go index page
}


?>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="css/nice-select.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/gijgo.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/slicknav.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="https://demo.learncodeweb.com/favicon.ico">
<!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">-->
  <link rel="stylesheet" href="dropzone/dropzone.css" type="text/css">
<!--  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css" type="text/css">
  <!-- Place this tag in your head or just before your close body tag. -->


    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/modalusecase1.js"></script>
    <script src="js/modalusecase2.js"></script>
    <script src="js/modalusecase3.js"></script>
    <script src="js/modalusecase4.js"></script>
    <script src="js/switch.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="js/main.js"></script>