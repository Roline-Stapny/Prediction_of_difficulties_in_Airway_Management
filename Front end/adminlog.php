
<!DOCTYPE HTML>
<html lang=en>

<head>
<style>
body{
 font-family: Arial, Helvetica, sans-serif;
 
 }
div.b {
  
  top: 0;
 
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
button[type=submit] {
    width: 100%;
    background: radial-gradient(at top left, #689F38, green);
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color:black;
}

button[type=button] {
    width: 100%;
   background: radial-gradient(at top left, #689F38, green);
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color:black;
}
					</style>
	
	<script type="text/javascript">
		
		function validation(){
		 var p1 = document.forms["myForm"]["password1"].value;
	var p2 = document.forms["myForm"]["password2"].value;
	if (p1!=p2) {
        alert("PASSWORDS NOT MATCHING!!!!");
        return false;
    }
	
	
	return true;
	
	}
		
	

		
	</script>
		<!-- Meta tags -->
	<title>Appoint My Doctor Form a Simple Appointment form Responsive Widget :: w3layouts</title>
	<meta name="keywords" content="Appoint My Doctor Form Responsive widget, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- stylesheets -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<!-- google fonts  -->
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i,700" rel="stylesheet">
	
	
</head>

<body style="background-color:powderblue;background-image:url('images/banner9.jpg')">
 <font color="white" face="sans-serif">

<div class="b" style="background-color:#FFC039">
  <div class="w3-bar  w3-card" style="background-color:#FFC039">
	<!-- title -->
	<h1 style="color:#030606;font-size:45px;text-align:left;background-color:#FFC039" ><img class="img-responsive sp-default-logo" src="images/logo-nitte.jpg" width="30%" style="padding-bottom:13px;" alt="Nitte"> </h1>

	</div>
	<ul id="menu" style="align :center">
                
		<li><a href="home.php"><b>Home<b></a></li>
		<li><a href="personal_info.php">Personal Registration</a></li>
		<li><a href="#">Transaction</a></li>
		<li><a href="#">Processing </a></li>
		<li><a href="#">Report</a></li>
                 
		
	</ul>
	</div>
	<br><br><br>
	
	<!-- //title -->
<h2 style="text-align:center"> Admin login
				<i class="fas fa-level-down-alt"></i>
			</h2>
	<!-- content -->
	<div class="sub-main-w3">
	
		<form name="myForm" action="query.php" onsubmit="return validateForm()" method="post">
			
			<div class="form-style-agile">
				<label>
					Username<span class="form-required">  </span> 
					<i class="fas fa-user"></i>
				</label>
				<input placeholder="Username" name="Name" type="text"  required pattern="[A-Za-z]+$" minlength="4" title="Enter only letters">
			</div>
			<div class="form-style-agile">
				<label>
					Password
					<i class="fas fa-unlock-alt"></i>
				</label>
				<input placeholder="Password" name="Password" type="password" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Please include at least 1 uppercase character, 1 lowercase character, and 1 number." required minlength="6" >
			</div>
			<!-- checkbox -->
			<div class="wthree-text">
				<ul>
					<li>
						<label class="anim">
							<input type="checkbox" class="checkbox" >
							<span>Remember me</span>
						</label>
					</li>
					<li>
						<a href="#">Forgot Password?</a>
					</li>
				</ul>
			
			</div>
			<!-- //checkbox -->
			<button type="Submit" name="Submit"  required pattern="123" title="enter the proper pattern" ><a href="query.php" style="color:white">Login</a></button>
			<br>
			<button type="button"><a href="Admin_registraion_first_page.php">sign up </a></button>
			
		</form>
	</div>
	<!-- //content -->

	
	

</body>

</html>