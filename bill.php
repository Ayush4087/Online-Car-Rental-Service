<html>
<head>
<body>
<?php 



include_once "date.php";
$servername = "localhost";
$username = "root";
$password = "w7PZk5lv9V2c5y28";
$dbname = "carrental";
$conn1 = mysqli_connect($servername , $username , $password , $dbname);

$_SESSION["tot_hours"] = $_POST["hours"];
$_SESSION["pick_date"] = $_POST["pick_time"];
$_SESSION["locan"] = $_POST["location"];
$_SESSION["type"] = $_POST["cartype"];



$sql1 = "INSERT INTO billshow(country,location,pick_time,drop_time,picktime,hours,cartype,email)
 VALUES ('".$_POST["country"]."','".$_POST["location"]."','".$_POST["pick_time"]."','".$_POST["drop_time"]."','".$_POST["picktime"]."','".$_POST["hours"]."','".$_POST["cartype"]."','".$_SESSION["u_email"]."')";
$result = mysqli_query($conn1, $sql1);

if ($result) {
   
    echo "<br> <font face='algerian' color = 'green'>Your Booking Has Been Done Successfully :: <a href='billshow.php'><button>BILL </button> </a></font>";

	
} 
else{
    echo "<br> INPUT DATA HAS FAILED.";
    
}
mysqli_close($conn1);

?>




</body>
</head>
</html>