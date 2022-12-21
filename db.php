<?php

$server="localhost";
$username="";
$password="";
$database="erp_system";
$con=mysqli_connect('localhost','','','erp_system');
if(!$con)
{
	die("Connection Error..".mysqli_connect_error());
}
else
{
	echo "Connection Done Successfully";
}

?>
