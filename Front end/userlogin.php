<?php
$message="";
	?>
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
input[name=submit] {
    width: 100%;
    background: radial-gradient(at top left, #689F38, green);
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
   
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
	
	<!--<script type="text/javascript">
		
		function validation(){
		 var p1 = document.forms["myForm"]["password1"].value;
	var p2 = document.forms["myForm"]["password2"].value;
	if (p1!=p2) {
        alert("PASSWORDS NOT MATCHING!!!!");
        return false;
    }
	
	
	return true;
	
	}
	</script>-->
	
		<!-- Meta tags -->
	
	
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
 <font color="white" face="sans-serif">

<div class="b" style="background-color:#FFC039">
  <div class="w3-bar  w3-card" style="background-color:#FFC039">
	<!-- title -->
	<h1 style="color:#030606;font-size:45px;text-align:left;background-color:#FFC039" ><img class="img-responsive sp-default-logo" src="images/logo-nitte.jpg" width="30%" style="padding-bottom:13px;" alt="Nitte"> </h1>

	</div>
	
	<ul id="menu" style="align :center">
                
		<li><a href="home.php"><b>Home<b></a></li>
                 
		
	</ul>
	
	</div>
	<br><br><br>
	
	<!-- //title -->
<h2 style="text-align:center"> User login
				<i class="fas fa-level-down-alt"></i>
			</h2>
	<!-- content -->
	<div class="sub-main-w3">
	
		<form name="myForm" action="user.php" method="post">
		
			<div class="form-style-agile">
				<label>
					Username<span class="form-required">  </span> 
					<i class="fas fa-user"></i>
				</label>
				<input placeholder="Username" id="uname" name="Name" type="text"  required title="Enter only letters">
			</div>
			
			<div class="form-style-agile">
				<label>
					Password
					<i class="fas fa-unlock-alt"></i>
				</label>
				<input placeholder="Password" name="Password" id="pass" type="password" required  title="wrong password" required  >
			</div>
			<!-- checkbox -->
			
			<!-- //checkbox -->
			
			<input type="submit" name="submit" value="Login" />
			<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $message;?></div>
					
			<br>
			
			<button type="button" onclick="location.href='http://localhost:8080/Final%20year/user_reg.php'" > SIGN UP </button>
			
		</form>
	</div>
	<!-- //content -->

	
	

</body>
</html>


