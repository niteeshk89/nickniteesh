<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ASPIRE</title>
	<meta name="description" content="fest powered by AITAM" />
	<meta name="keywords" content="events,projects,fest,expo,workshops" />
	<meta name="author" content="Luka Cvetinovic for Codrops" />
	<link rel="manifest" href="img/favicons/manifest.json">
	<link rel="shortcut icon" href="img/logo.jpg">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="css/cardio.css">
	<link rel="stylesheet" href="css/w3.css">
</head>

<body>
 <?php include 'retrive.php';?>


	<div class="preloader">
		<img src="img2/preloader.gif" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="home.php"><img src="img2/aspirecube.png" data-active-url="img2/aspirecube.png" width="50px" alt=""></a>
				</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
				    <!--<li><a href="home.php">Home</a></li>-->
					
					<li><a href="home.php" class="btn btn-blue">Home</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
<br><br><br><br><br><br><br><br><br><br><br><br>
<center><h2><?php echo "HI ".$_SESSION['fname']." ".$_SESSION['lname']?>
        <?php echo"you have successfully registered for ".$events ; ?></h2><br>
       <h2> <?php echo "In ".$_SESSION['dept']." Department" ?></h2>
        <h2><?php echo "your registration code is";  ?></h2>
        <h2><?php echo "A2K17P#".$regno;?></h2>
        <h4 style="color:red">please get remembered your registration code or take print of the page</h4>

<button onclick="myFunction()">Print this page</button>

<script>
function myFunction() {
    window.print();
}
</script>
</center>

<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content modal-popup">
        <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
        <h3 class="white">Register</h3>
        <form name="register" action="dbcon.php" method="post" class="popup-form">
          <input type="text" name="fname" class="form-control form-white" placeholder="First Name" REQUIRED>
          <input type="text" name="lname" class="form-control form-white" placeholder="Last Name" REQUIRED>
          <input type="text" name="college" class="form-control form-white" placeholder="College/University" REQUIRED>
          <input type="text" name="phno" class="form-control form-white" placeholder="Mobile Number" REQUIRED>
          <input type="email" name="email" class="form-control form-white" placeholder="E-mail" REQUIRED>

         <select class=" form-control form-white dropdown" name="gender" REQUIRED>
    <option value="" disabled selected>Gender</option>
    <option class="color"  value="male">male</option>
    <option class="color" value="female">Female</option>
  </select>

         <select class=" form-control form-white dropdown" name="year" REQUIRED>
    <option value="" disabled selected>Year</option>
    <option class="color"  value="1">1st</option>
    <option class="color" value="2">2nd</option>
    <option class="color"  value="3">3rd</option>
    <option class="color" value="4">4th</option>
  </select>

         <select class=" form-control form-white dropdown" name="acc" REQUIRED>
    <option value="" disabled selected>Want Accomodation</option>
    <option class="color"  value="yes">Yes</option>
    <option class="color" value="no">No</option>
  </select>


  <script>
function populate(s1,s2){
  var s1 = document.getElementById(s1);
  var s2 = document.getElementById(s2);
  s2.innerHTML = "";
  if(s1.value == "Civil Engineering"){
    var optionArray = ["Events|","WORKSHOP|WORKSHOP","PAPER PRESENTATION|PAPER PRESENTATION","POSTER PRESENTATION|POSTER PRESENTATION","PROJECT EXPO|PROJECT EXPO","CEREBROCUS|CEREBROCUS","BRICK BOND|BRICK BOND","BUOYANCY & FLOTATION|BUOYANCY & FLOTATION"];
  } else if(s1.value == "Computer Science and Engineering"){
    var optionArray = ["Events|","WORKSHOP|WORKSHOP","PAPER PRESENTATION|PAPER PRESENTATION","POSTER PRESENTATION|POSTER PRESENTATION","PROJECT EXPO|PROJECT EXPO","FAQ's (QUIZ CONTEST)|FAQ's (QUIZ CONTEST)","SPEAKERS SUMMIT|SPEAKERS SUMMIT","CODE SENSE|CODE SENSE"];
  } else if(s1.value == "Electronics and Communications Engineering"){
    var optionArray = ["Events|","WORKSHOP|WORKSHOP","PAPER PRESENTATION|PAPER PRESENTATION","POSTER PRESENTATION|POSTER PRESENTATION","PROJECT EXPO|PROJECT EXPO","VAC VIVAZ|VAC VIVAZ","PANCHATANTRA|PANCHATANTRA","LOGIPARYANTA|LOGIPARYANTA"];
  }else if(s1.value == "Electrical and Electronics Engineering"){
    var optionArray = ["Events|","WORKSHOP|WORKSHOP","PAPER PRESENTATION|PAPER PRESENTATION","POSTER PRESENTATION|POSTER PRESENTATION","ZIGTRICKS|ZIGTRICKS","ELECTROFICIA|ELECTROFICIA","WITRICITY|WITRICITY","PROJECT EXPO|PROJECT EXPO"];
  }else if(s1.value == "Information Technology and Sciences"){
    var optionArray = ["Events|","WORKSHOP|WORKSHOP","PAPER PRESENTATION|PAPER PRESENTATION","POSTER PRESENTATION|POSTER PRESENTATION","PROJECT EXPO|PROJECT EXPO","FAQ's (QUIZ CONTEST)|FAQ's (QUIZ CONTEST)","MAKE A GIF|MAKE A GIF"];
  }else if(s1.value == "Mechanical Engineering"){
    var optionArray = ["Events|","WORKSHOP|WORKSHOP","PAPER PRESENTATION|PAPER PRESENTATION","POSTER PRESENTATION|POSTER PRESENTATION","PROJECT EXPO|PROJECT EXPO","FAQ's (QUIZ CONTEST)|FAQ's (QUIZ CONTEST)","MYST|MYST","ENIGMA|ENIGMA","TECHNOKRITI|TECHNOKRITI"];
  }else if(s1.value == "Others"){
    var optionArray = ["Events|","WORKSHOP|WORKSHOP","PAPER PRESENTATION|PAPER PRESENTATION","POSTER PRESENTATION|POSTER PRESENTATION","PROJECT EXPO|PROJECT EXPO","MYST|MYST","ENIGMA|ENIGMA","TECHNOKRITI|TECHNOKRITI","MAKE A GIF|MAKE A GIF","ZIGTRICKS|ZIGTRICKS","ELECTROFICIA|ELECTROFICIA","WITRICITY|WITRICITY","VAC VIVAZ|VAC VIVAZ","PANCHATANTRA|PANCHATANTRA","LOGIPARYANTA|LOGIPARYANTA","SPEAKERS SUMMIT|SPEAKERS SUMMIT","CODE SENSE|CODE SENSE","CEREBROCUS|CEREBROCUS","BRICK BOND|BRICK BOND","BUOYANCY & FLOTATION|BUOYANCY & FLOTATION"];
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

         <select class=" form-control form-white dropdown" id="department" name="department" onchange="populate(this.id,'events')" REQUIRED>
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
    
          <br><h5 class="colors"> Optional</h5> 
                    <select class=" form-control form-white dropdown" name="refer" REQUIRED>
    <option value="" disabled selected>REFERENCE BY</option>
    <option class="color"  value="NEWS PAPER">NEWS PAPER</option>
    <option class="color" value="INTERNET">INTERNET</option>
    <option class="color"  value="FRIENDS IN AITAM COLLEGE">FRIENDS IN AITAM COLLEGE</option>
    <option class="color" value="OTHER">OTHER</option>
    </select>
     
         
            <input type="text" name="frndno" class="form-control form-white" placeholder="Friend Ph.no / Roll no / E-mail">
     
          
          <button type="submit" name="submit" value="submit" class="btn btn-submit">Submit</button>
        </form>
      </div>
    </div>
</div>

<gome>
<h4></h4>

</gome>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/typewriter.js"></script>
	<script src="js/jquery.onepagenav.js"></script>
	<script src="js/main.js"></script>
	<script src="jquery.max.js"></script>
<script> 
            $(document).ready(function(){
      $("#hi").click(function(){
       $("#wall").slideToggle("slow");
      });
       });
 </script>
 <script type="text/javascript">
	

(function () {
    var follower, init, mouseX, mouseY, positionElement, printout, timer;
    follower = document.getElementById('follower');
    printout = document.getElementById('printout');
    mouseX = function (_this) {
        return function (event) {
            return event.clientX;
        };
    }(this);
    mouseY = function (_this) {
        return function (event) {
            return event.clientY;
        };
    }(this);
    positionElement = function (_this) {
        return function (event) {
            var mouse;
            mouse = {
                x: mouseX(event),
                y: mouseY(event)
            };
            follower.style.top = mouse.y + 'px';
            return follower.style.left = mouse.x + 'px';
        };
    }(this);
    timer = false;
    window.onmousemove = init = function (_this) {
        return function (event) {
            var _event;
            _event = event;
            return timer = setTimeout(function () {
                return positionElement(_event);
            }, 1);
        };
    }(this);
}.call(this));


</script>

</body>


<style>


html {
  

}
#follower {
  position: absolute;
  top: 50%;
  left: 50%;
}
#follower #circle1 {
  position: absolute;
  -webkit-animation: pulse 2s infinite; /* Chrome, Safari, Opera */
  animation: pulse 2s infinite;
  background: #fff;
  border-radius: 50%;
  height: 0em;
  width: 0em;
  margin-top: 0em;
  margin-left: 0em;
}
#follower #circle2 {
  position: absolute;
  -webkit-animation: pulse 4s infinite; /* Chrome, Safari, Opera */
  animation: pulse 4s infinite;
  background: rgba(200,0,0,0.8);
  border-radius: 50%;
  height: 0em;
  width: 0em;
  margin-top: 0em;
  margin-left: 0em;
}
@-moz-keyframes pulse {
  0% {
    opacity: 0.2;
    height: 1em;
    width: 1em;
    margin-top: -0.5em;
    margin-left: -0.5em;
  }
  50% {
    opacity: 0.9;
    height: 3em;
    width: 3em;
    margin-top: -1.5em;
    margin-left: -1.5em;
  }
  100% {
    opacity: 0.2;
    height: 1em;
    width: 1em;
    margin-top: -0.5em;
    margin-left: -0.5em;
  }
}
@-webkit-keyframes pulse {
  0% {
    opacity: 0.2;
    height: 1em;
    width: 1em;
    margin-top: -0.5em;
    margin-left: -0.5em;
  }
  50% {
    opacity: 0.9;
    height: 3em;
    width: 3em;
    margin-top: -1.5em;
    margin-left: -1.5em;
  }
  100% {
    opacity: 0.2;
    height: 1em;
    width: 1em;
    margin-top: -0.5em;
    margin-left: -0.5em;
  }
}
@-o-keyframes pulse {
  0% {
    opacity: 0.2;
    height: 1em;
    width: 1em;
    margin-top: -0.5em;
    margin-left: -0.5em;
  }
  50% {
    opacity: 0.9;
    height: 3em;
    width: 3em;
    margin-top: -1.5em;
    margin-left: -1.5em;
  }
  100% {
    opacity: 0.2;
    height: 1em;
    width: 1em;
    margin-top: -0.5em;
    margin-left: -0.5em;
  }
}
@keyframes pulse {
  0% {
    opacity: 0.2;
    height: 1em;
    width: 1em;
    margin-top: -0.5em;
    margin-left: -0.5em;
  }
  50% {
    opacity: 0.9;
    height: 3em;
    width: 3em;
    margin-top: -1.5em;
    margin-left: -1.5em;
  }
  100% {
    opacity: 0.2;
    height: 1em;
    width: 1em;
    margin-top: -0.5em;
    margin-left: -0.5em;
  }
}

.roundpic{
	border-radius: 50%;
	height: 200px;
	background-color: green;
	width: 40%;

}
.rounddes{
	width: 60%;
	height: 200px;
	text-decoration: none;
	text-align: center;
	background-color: white;
	border-bottom-color: black;
	border-bottom-width: 5px;
}

select>option{
      color: skyblue;
    background-color: transparent;
}

    .colors{
    color: white;
    background-color: transparent;
  }


</style>

</html>
