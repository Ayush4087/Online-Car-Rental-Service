<html>
<head>
<body>
<?php 

include_once "learn_form.php";

$servername = "localhost";
$username = "root";
$password = "w7PZk5lv9V2c5y28";
$dbname = "exam";

$conn = mysqli_connect($servername , $username , $password , $dbname);

$name = $_POST['name'];
$psw = $_POST['psw'];
$email = $_POST['email'];

$sql = "INSERT INTO supraza (name , password , email) VALUES ('$name' , '$psw' , '$email')";

$result = mysqli_query($conn, $sql);

if($result)
{
	echo "successfull..";
}
else
{
	echo "error";
}

 ?>
 
 </body>
 </head>
 </html>