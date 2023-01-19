<?php
require 'connection.php';
if(!empty($_SESSION["Id"]))
{
	$Id=$_SESSION["Id"];
	$result=mysqli_query($conn,"select * from log where Id='$Id'");
	$row=mysqli_fetch_assoc($result);
	
}
?>
<!DOCTYPE html>
<html>
    <head>
       
        <title>Login</title>
    </head>
    <body>
        <h1>WELCOME <?php echo $row["username"] ?></h1>
        <a href="login.php">Logout</a>
    </body>
</html>
