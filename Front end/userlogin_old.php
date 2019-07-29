
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
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<!-- google fonts  -->
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i,700" rel="stylesheet">
	
	
</head>

<body style="background-color:powderblue;background-image:url('images/banner9.jpg')">
 <header>
	<div style="background-color:rgb(255, 179, 0);margin:0px">
	   <!--  <h1><a><img  src="images/logo-nitte.jpg" width="30%" style="padding-bottom: 1px;" alt="Nitte"></a></h1>
-->
	<!--<h1 style="font-family:sans-serif; font-size:45px; text-align:left; margin-bottom:0px" >-->
	
	<img class="img-responsive sp-default-logo" src="images/logo-nitte.jpg" width="31%" style="padding:2px;padding-top:5px;margin-left:50px" alt="Nitte"/> 
	
	<ul id="menu">
                
		<li><a href="home.php"><b>Home<b></a></li>
		<!--<li><a href="personel_info.php">Personal Details</a></li>
		<li><a href="addressrev.php">Contact Info</a></li>
		<li><a href="parameters.php">Physical Parameters</a></li>-->
		
                 
		
	</ul>
	</header>
     
	
	</div>
	<br><br><br>
	
	<!-- //title -->
<h2 style="text-align:center"> User login
				<i class="fas fa-level-down-alt"></i>
			</h2>
	<!-- content -->
	<div class="sub-main-w3">
	
		<form name="myForm" action="personal_info.php" onsubmit="return validateForm()" method="post">
			
			<div class="form-style-agile">
				<label>
					Username<span class="form-required">  </span> 
					<i class="fas fa-user"></i>
				</label>
				<input placeholder="Username" name="Name" type="text"  required pattern="username"  title="Enter only letters">
			</div>
			<div class="form-style-agile">
				<label>
					Password
					<i class="fas fa-unlock-alt"></i>
				</label>
				<input placeholder="Password" name="Password" type="password" required pattern="user123" title="wrong password" required  >
			</div>
			<!-- checkbox -->
			
			<!-- //checkbox -->
			<button type="Submit" name="Submit"  required pattern="123" title="enter the proper pattern" >Login</button>
			<br>
			<button type="button" ><a href="user_reg.php">sign up </a></button>
			
		</form>
	</div>
	<!-- //content -->

	
	

</body>

</html>