<!DOCTYPE html>
<html> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
	margin:0px;
	font-family: "Lato", sans-serif}
.mySlides {display: none}
 lable{
      margin-left:30px;
  }
     ul#menu {
            list-style-type:none;
             
            margin:0 auto ;
            text-align:center;
            padding:6px;
           
            left-padding:30px;
            overflow: hidden;
            background-color:black;
           }

        li {
            display:inline-block;
            float:left;
            margin:0 auto;
           }

        li a {
                display: block;
                color: white;
                text-align: center;
                padding:10px;
                text-decoration: none;
             }

        li a:hover {
                    background-color:yellow;
                      					color:black;
					
                   }
		li a:active {
                    background-color: green;
					color:black;
					}
					.navbar {
  overflow: hidden;
  background-color: #333;
}
.navbar {
	background-color:black;
}
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color:#f5af19;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<body>

<!-- Navbar -->
<div class="w3-top" style="background-color:#FFC039">
<div class="w3-bar w3-card  " style="background-color:#FFC039">
  <h1 style="font-family:sans-serif;color:#030606;font-size:45px;text-align:left;background-color:#FFC039;" ><img class="img-responsive sp-default-logo" src="images/logo-nitte.jpg" width="40%" style="padding-bottom: 13px;" alt="Nitte"> </h1>
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
<div class="navbar" >
  <a href="#home">About Us</a>
  <a href="doctorpage.php">Doctor Registration</a>
  <a href="userlogin.php">User Login</a>
   <a href="home_prediction.php">Prediction</a>
 
  
  
  
</div>
</div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="images/banner9.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      
      
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="images/nitte_credentials.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      
      
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="images/kshop.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
     
     
    </div>
  </div>

  
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 >KSHEMA</h2>
    <p class="w3-opacity"><i>strive for excellence</i></p>
    <p class="w3-justify">The Institution offers MBBS and MD/MS programs recognized by the Medical Council of India. Besides this, it offers B.Sc courses in Medical Imaging Technology, Medical Laboratory Technology , Anaesthesia & Operation Theatre Technology, Respiratory Therapy and Master's program in Public Health (MPH). Justice K.S. Hegde Charitable Hospital, the 1200 bed super-speciality hospital attached to the Institution serves as a teaching hospital for all the affiliated courses, and provides all levels of holistic health care including major super-specialty services and provides excellent training opportunities to the students of the academy.  </p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Nitte Journey</p>
        <img src="images/nitte_founder.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Governance</p>
        <img src="images/nitte_credentials.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Recognition&Accridation</p>
        <img src="images/nitte_chart.jpg" class="w3-round" alt="Random Name" style="width:60%">
      </div>
    </div>
  </div>

  
  
<!-- End Page Content -->
</div>



<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>