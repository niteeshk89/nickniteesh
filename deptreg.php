<html>
<head>
	<title>Registered candidates</title>
</head>
<body>
<button onclick="myFunction()">Print this page</button>

<script>
function myFunction() {
    window.print();
}
</script>
</body>
</html>
<style type="text/css">
	table, th, td {
     border: 1px solid black;
}
</style>
<?php

if(isset($_POST["submit"])){


$dept=$_POST['dept'];

     include 'connection.php';

     $result = mysql_query("SELECT * FROM reg WHERE dept='$dept'");

     if(mysql_num_rows($result)>0){
     	echo "<table><tr><th>ID</th><th>Name</th><th>college</th><th>phno</th><th>email</th><th>gender</th><th>year</th><th>accomodation</th><th>dept</th><th>events</th><th>frnd rollno</th></tr>";
	    while($row=mysql_fetch_assoc($result)) {

         echo "<tr><td>" . $row["regno"]. "</td><td>" . $row["firstname"]. " " . $row["lastname"]. "</td><td>" . $row["college"]. "</td><td>" . $row["phno"]. "</td><td>" . $row["email"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["year"]. "</td><td>" . $row["accomodation"]. "</td><td>" . $row["dept"]. "</td><td>" . $row["events"]. "</td><td>" . $row["frndno"]. "</td></tr>";
     }
     echo "</table>";

}
else
{
	header("Location:notval.php");
	
}


?>

