<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>ASPIRE | REGISTRATION</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Normalize -->
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <!-- Animate.css -->
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <!-- Main style -->
  
  <link rel="stylesheet" type="text/css" href="css/cardio.css">
  <!-- Scripts -->
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/typewriter.js"></script>
  <script src="js/main.js"></script>
  <script src="jquery.max.js"></script>
	<style>
	/* Smartphones (portrait and landscape) ----------- */
@media only screen
and (min-device-width : 320px) 
and (max-device-width : 480px) {
/* Styles */
}
 
/* Smartphones (landscape) ----------- */
@media only screen
and (min-width : 321px) {
/* Styles */
}
 
/* Smartphones (portrait) ----------- */
@media only screen
and (max-width : 320px) {
/* Styles */
}
 
/* iPads (portrait and landscape) ----------- */
@media only screen
and (min-device-width : 768px) 
and (max-device-width : 1024px) {
/* Styles */
}

	</style>
</head>
<body style="background-color:black;">
<br><br>
        <Center><h3 class="white">Register</h3></center>
        <form name="register" action="deptlist.php" method="post" class="popup-form">



  <script>
function populate(s1,s2){
  var s1 = document.getElementById(s1);
  var s2 = document.getElementById(s2);
  s2.innerHTML = "";
  if(s1.value == "Civil Engineering"){
    var optionArray = ["Events|","CYBER CRIMES AND SECURITY CHALLENGES - WORKSHOP|CYBER CRIMES AND SECURITY CHALLENGES - WORKSHOP","DRINKING WATER SUPPLY ANALYSIS - WORKSHOP|DRINKING WATER SUPPLY ANALYSIS - WORKSHOP","PAPER PRESENTATION|PAPER PRESENTATION","POSTER PRESENTATION|POSTER PRESENTATION","PROJECT EXPO|PROJECT EXPO","CEREBROCUS|CEREBROCUS","BRICK BOND|BRICK BOND","TRUSS BRIDGE|TRUSS BRIDGE"];
  } else if(s1.value == "Computer Science and Engineering"){
    var optionArray = ["Events|","CYBER CRIMES AND SECURITY CHALLENGES - WORKSHOP|CYBER CRIMES AND SECURITY CHALLENGES - WORKSHOP","DRINKING WATER SUPPLY ANALYSIS - WORKSHOP|DRINKING WATER SUPPLY ANALYSIS - WORKSHOP","PAPER PRESENTATION|PAPER PRESENTATION","POSTER PRESENTATION|POSTER PRESENTATION","PROJECT EXPO|PROJECT EXPO","FAQ's (QUIZ CONTEST)|FAQ's (QUIZ CONTEST)","SPEAKERS SUMMIT|SPEAKERS SUMMIT","CODE SENSE|CODE SENSE"];
  } else if(s1.value == "Electronics and Communications Engineering"){
    var optionArray = ["Events|","CYBER CRIMES AND SECURITY CHALLENGES - WORKSHOP|CYBER CRIMES AND SECURITY CHALLENGES - WORKSHOP","DRINKING WATER SUPPLY ANALYSIS - WORKSHOP|DRINKING WATER SUPPLY ANALYSIS - WORKSHOP","WORKSHOP|WORKSHOP","PAPER PRESENTATION|PAPER PRESENTATION","POSTER PRESENTATION|POSTER PRESENTATION","PROJECT EXPO|PROJECT EXPO","VAC VIVAZ|VAC VIVAZ","PANCHATANTRA|PANCHATANTRA","LOGIPARYANTA|LOGIPARYANTA"];
  }else if(s1.value == "Electrical and Electronics Engineering"){
    var optionArray = ["Events|","CYBER CRIMES AND SECURITY CHALLENGES - WORKSHOP|CYBER CRIMES AND SECURITY CHALLENGES - WORKSHOP","DRINKING WATER SUPPLY ANALYSIS - WORKSHOP|DRINKING WATER SUPPLY ANALYSIS - WORKSHOP","WORKSHOP|WORKSHOP","PAPER PRESENTATION|PAPER PRESENTATION","POSTER PRESENTATION|POSTER PRESENTATION","ZIGTRICKS|ZIGTRICKS","ELECTROFICIA|ELECTROFICIA","WITRICITY|WITRICITY","PROJECT EXPO|PROJECT EXPO"];
  }else if(s1.value == "Information Technology and Sciences"){
    var optionArray = ["Events|","CYBER CRIMES AND SECURITY CHALLENGES - WORKSHOP|CYBER CRIMES AND SECURITY CHALLENGES - WORKSHOP","DRINKING WATER SUPPLY ANALYSIS - WORKSHOP|DRINKING WATER SUPPLY ANALYSIS - WORKSHOP","WORKSHOP|WORKSHOP","PAPER PRESENTATION|PAPER PRESENTATION","POSTER PRESENTATION|POSTER PRESENTATION","PROJECT EXPO|PROJECT EXPO","FAQ's (QUIZ CONTEST)|FAQ's (QUIZ CONTEST)","MAKE A GIF|MAKE A GIF"];
  }else if(s1.value == "Mechanical Engineering"){
    var optionArray = ["Events|","CYBER CRIMES AND SECURITY CHALLENGES - WORKSHOP|CYBER CRIMES AND SECURITY CHALLENGES - WORKSHOP","DRINKING WATER SUPPLY ANALYSIS - WORKSHOP|DRINKING WATER SUPPLY ANALYSIS - WORKSHOP","WORKSHOP|WORKSHOP","PAPER PRESENTATION|PAPER PRESENTATION","POSTER PRESENTATION|POSTER PRESENTATION","PROJECT EXPO|PROJECT EXPO","FAQ's (QUIZ CONTEST)|FAQ's (QUIZ CONTEST)","MYST|MYST","ENIGMA|ENIGMA"];
  }else if(s1.value == "Others"){
    var optionArray = ["Events|","CYBER CRIMES AND SECURITY CHALLENGES - WORKSHOP|CYBER CRIMES AND SECURITY CHALLENGES - WORKSHOP","DRINKING WATER SUPPLY ANALYSIS - WORKSHOP|DRINKING WATER SUPPLY ANALYSIS - WORKSHOP","WORKSHOP|WORKSHOP","PAPER PRESENTATION|PAPER PRESENTATION","POSTER PRESENTATION|POSTER PRESENTATION","PROJECT EXPO|PROJECT EXPO","MYST|MYST","ENIGMA|ENIGMA","TECHNOKRITI|TECHNOKRITI","MAKE A GIF|MAKE A GIF","ZIGTRICKS|ZIGTRICKS","ELECTROFICIA|ELECTROFICIA","WITRICITY|WITRICITY","VAC VIVAZ|VAC VIVAZ","PANCHATANTRA|PANCHATANTRA","LOGIPARYANTA|LOGIPARYANTA","SPEAKERS SUMMIT|SPEAKERS SUMMIT","CODE SENSE|CODE SENSE","CEREBROCUS|CEREBROCUS","BRICK BOND|BRICK BOND","BUOYANCY & FLOTATION|BUOYANCY & FLOTATION"];
  }
  for(var option in optionArray){
    var pair = optionArray[option].split("|");
    var newOption = document.createElement("option");
    newOption.value = pair[0];
    newOption.innerHTML = pair[1];
    s2.options.add(newOption);
  }
}

</script>

         <select class=" form-control form-white dropdown" id="department" name="dept" onchange="populate(this.id,'events')" REQUIRED>
    <option value="" disabled selected>Department</option>
    <option id="civil" class="color"  value="Civil Engineering"><a href=""></a>Civil Engineering</option>
    <option id="cse" class="color" value="Computer Science and Engineering">Computer Science and Engineering</option>
    <option id="ece" class="color"  value="Electronics and Communications Engineering">Electronics and Communications Engineering</option>
    <option id="eee" class="color" value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
    <option id="it" class="color" value="Information Technology and Sciences">Information Technology and Sciences</option>
    <option id="mech" class="color" value="Mechanical Engineering">Mechanical Engineering</option>
    <option id="others" class="color" value="Others">Others</option>
  </select>

         <select class=" form-control form-white dropdown" id="events" name="events" REQUIRED>
         <option value="" disabled selected>Events</option>
  </select>
    
     
          
          <button type="submit" name="submit" value="submit" class="btn btn-submit">Submit</button>
        </form>
</body>
</html>