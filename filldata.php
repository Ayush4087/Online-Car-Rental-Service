<html>
<head>
<body>
<?php 



include_once "register.php";
$servername = "localhost";
$username = "root";
$password = "w7PZk5lv9V2c5y28";
$dbname = "carrental";
$conn = mysqli_connect($servername , $username , $password , $dbname);


$sql = "INSERT INTO info (FirstName,LastName,DOB,Age,Gender,Email,Phone,Password)
VALUES ('".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["bday"]."','".$_POST["age"]."','".$_POST["gender"]."','".$_POST["email"]."','".$_POST["contact"]."','".$_POST["psw"]."')";
$result = mysqli_query($conn, $sql);
if ($result) {
   
    echo "<br> <font face='algerian' color = 'green'>SUCCESS !! </font>";
} else{
    echo "<br> INPUT DATA HAS FAILED.";
    
}
mysqli_close($conn);

?>


</body>
</head>
</html>

