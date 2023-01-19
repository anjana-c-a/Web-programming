<?php
session_start();
$conn=mysqli_connect("localhost","root","cetmca","db1");
if($cn)
{
	echo "Connected";
}
?>
