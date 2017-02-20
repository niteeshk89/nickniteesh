<?php
if(isset($_POST["submit"])){


$email=$_POST['email'];

 include 'connection.php';


     $result = mysql_query("SELECT * FROM reg where email='$email'");

     if(mysql_num_rows($result)>0){
     	echo "<table><tr><th>REG CODE</th><th>dept</th><th>events</th></tr>";
	    while($row=mysql_fetch_assoc($result)) {

         echo "<tr><td>A2K17P#" . $row["regno"]. "</td><td>" . $row["dept"]. "</td><td>" . $row["events"]. "</td></tr>";
     }
     echo "</table><br><br>";

}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="home.php">HOME</a>
</body>
</html>