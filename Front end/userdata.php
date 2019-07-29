<html>

<body  style="background-image:url('images/banner9.jpg'); margin:0px" id="menu_1" >
<header>
	<div  style="background-color:#FFC039;color:black;margin-top:0px">
	   <!--  <h1><a><img  src="images/logo-nitte.jpg" width="30%" style="padding-bottom: 1px;" alt="Nitte"></a></h1>
-->
	<h1 style="font-family:sans-serif;color:#030606;font-size:45px;text-align:left;margin-bottom:0px" >
	
	<img class="img-responsive sp-default-logo" src="images/logo-nitte.jpg" width="31%" style="padding:2px;padding-top:5px;margin-left:50px" alt="Nitte"> </h1>
	
	
	</header>
	</body>
	</html>
<?php

if(isset($_POST['submit1']))
	{
		
	$host= 'localhost';
    global $con;
	global $sql;
	$uname= 'root';
	$pass= '';
	$db= 'difficulties_in_airway';
	$con= mysqli_connect($host,$uname,$pass,$db);
	if(!$con)
		echo 'Not Connected succesful';
	
	$ibase=$_POST['source'];
	$uname=$_POST['Uname'];
	$ufname=$_POST['user_name'];
	$umname=$_POST['user_mname'];
	$ulname=$_POST['user_lname'];
	$dept=$_POST["department"];
	$designation=$_POST['designation'];
	$ustreet1=$_POST['user_addressstreet'];
	$ustreet2=$_POST['user_addressstreetline'];
	$country=$_POST['country'];
	$state=$_POST['state'];
	$zip=$_POST['code4'];
	$city=$_POST['city4'];
		
	$uphone=$_POST['user_phone'];
	$umail=$_POST['user_email'];
	$password=$_POST['password'];
	
	
	
	//echo "here";
	 $sql  = "INSERT INTO `UserExpro` ( `uname`,`ufname`, `umname`, `ulname`, `dept`, `designation`, `street1`, `street2`, `country`, `state`, `zipcode`, `city`, `phone_no`, `email`, `image`, `password`) VALUES ( '$uname','$ufname', '$umname', '$ulname', '$dept', '$designation', '$ustreet1', '$ustreet2', '$country', '$state', '$zip', '$city', '$uphone', '$umail', '$ibase','$password')";
	if(mysqli_query($con,$sql))
	{
	     
		echo "<h2 style='color:white'>DATA INSERTED SUCCESSFULLY.... PLEASE WAIT UNTILL REDIRECTED</h2>";
		echo "<script>setTimeout(\"location.href = 'home.php';\",3500);</script>";
		
		//echo "<p style='color:white'>data inserted</p>";
		
		
	}else{
		
		echo "<h2 style='color:white'>ERROR WHILE INSERTING THE DATA: $con->error.... PLEASE WAIT UNTILL REDIRECTED</h2>";
		echo "<script>setTimeout(\"location.href = 'home.php';\",3500);</script>";
		
		// header("Location: http://localhost:8080/final_project(26032019)/final_project(25032019)/home.php");
	}
}
?>