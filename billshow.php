<html>
<head>
<body bgcolor="lightblue">

<?php
echo "<center>";
echo "<font face = ' algerian' color = 'red' size = '30'>";
echo "<u>BILL</u> <br><br>";
echo "</font>";
session_start();


echo "<font face = 'Helvetica' color = 'blue' align='left'> E-Mail: </font>".$_SESSION["u_email"];
echo "<br>";
echo "<font face = 'Helvetica' color = 'blue' align='left'> Pick-Up Date: </font>".$_SESSION["pick_date"];
echo "<br>";
echo "<font face = 'Helvetica' color = 'blue' align='left'>Location: </font>".$_SESSION["locan"];
echo "<br>";
echo "<font face = 'Helvetica' color = 'blue' align='left'> Type: </font>".$_SESSION["type"];
echo "<br>";
echo "<font face = 'Helvetica' color = 'blue' align='left'> Total Amount: </font>".$_SESSION["tot_hours"]*1000;

echo "</font>";
echo "</center>";


?>
<br><br>
<center>
<a href="carlogin.php"><button>Main Page</button></a>
</center>
</body>
</head>
</html>