<?php
session_start();
if(isset($_SESSION['log']))
{
?>

<?php
}
else
{
	echo "Access Denied";
	header("refresh:2;url=index.html");
}

?>