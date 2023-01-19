<?php
require 'connection.php';
if(isset($_POST["submit"]))
{
    $usernameemail=$_POST["usernameemail"];
    $password=$_POST["password"];
    $result=mysqli_query($conn, "SELECT * FROM log WHERE username='$usernameemail'");
    $row=mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0)
        {
            if($password==$row["password"])
            {
                $_SESSION["login"]=true;
                $_SESSION["Id"]=$row["Id"];
								echo $_SESSION["Id"];
                header("Location: logwel.php");
            }
            else
            {
                echo
                "<script> alert('wrong password');</script>";
            }
        }
    else
    {
        echo
        "<script>alert('User not registered');</script>";
    }
}
?>
<!DOCTYPE html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login Form</h1>
    <form action="" method="POST">
    <label for="usernameemail">Username or Email :</label>
    <input type="text" name="usernameemail" id="usernameemail" required><br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" required><br>
    <button type="submit" name="submit" id="submit">login</button>
<a href="reg.php">Register</a>
</form>
</body>
</html>
