<html>
<head>
<body>
<?php 

session_start();

include_once "carlogin.php";
$servername = "localhost";
$username = "root";
$password = "w7PZk5lv9V2c5y28";
$dbname = "carrental";
$conn = mysqli_connect($servername , $username , $password , $dbname);

$email = $_POST["email"];
$passwd = $_POST["psw"];

$_SESSION["u_email"] = $email;

$sql="SELECT * FROM info WHERE Email='$email' and Password = '$passwd'";
$result=mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
if($count==1)
{echo "<font face='algerian' color = 'blue'>Welcome! You have been loggen in... <a href='date.php'>click here</a></font>";}
else
{echo "<font face='algerian' color = 'red'>Invalid Password Plz Register..</font>";}
 ?>
 </body>
 </head>
 </html>