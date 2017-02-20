
<?php
if(isset($_POST["submit"])){

$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$college=$_POST['college'];
$phno=$_POST['phno'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$year=$_POST['year'];
$accomodation=$_POST['acc'];
$dept=$_POST['department'];
$events=$_POST['events'];
$refer=$_POST['refer'];
$frndno=$_POST['frndno'];

 include 'connection.php';

$sql="INSERT INTO reg(firstname,lastname,college,phno,email,gender,year,accomodation,dept,events,refer,frndno) VALUES('$firstname','$lastname','$college','$phno','$email','$gender','$year','$accomodation','$dept','$events','$refer','$frndno')";
$result=mysql_query($sql);

if($result){ 
    session_start();
        $_SESSION['fname']= $firstname;
        $_SESSION['lname']= $lastname;
        $_SESSION['email']=$email;
        $_SESSION['events']=$events;
        $_SESSION['dept']=$dept;
   header("Location:regcode.php");
   }	
else{
	echo "failed";
}
}
?>