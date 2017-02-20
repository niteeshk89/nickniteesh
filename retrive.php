<?php
	session_start();
	 $email=$_SESSION['email'];
     $events=$_SESSION['events'];

     include 'connection.php';

     $result = mysql_query("SELECT sno FROM reg WHERE email='$email' AND events='$events'");

     if(mysql_num_rows($result)==1){
	    while($row=mysql_fetch_assoc($result)) {
        $regno= $row["sno"];     
        session_destroy();
}
}
else
{
    session_destroy();
	header("Location:notval.php");
	}
?>