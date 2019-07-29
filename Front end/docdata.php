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
	$docID=$_POST["docId"];
	$dept=$_POST["department"];
	$dname=$_POST['doctors_name'];
	$dstreet1=$_POST['doc_addressstreet'];
	$dstreet2=$_POST['doc_addressstreetline'];
	$country=$_POST['country'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$zip=$_POST['code'];	
	$dphone=$_POST['doc_phone'];
	$dmail=$_POST['doc_email'];
	$dSpec=$_POST['doc_spec'];
	$dExp=$_POST['doc_yearEx'];
	
	
	
	//echo "here";
	 $sql  = "INSERT INTO `doctor` (`Doctor_id`, `Name`, `Dept`, `Mobile`, `Email`, `Specialization`, `Experience`, `Street`,`City`, `Zip`, `State`, `Country`, `Imagebase`) VALUES ('$docID', '$dname', '$dept', '$dphone', '$dmail', '$dSpec', '$dExp', '$dstreet1','$city', '$zip', '$state', '$country', '$ibase')";
	if(mysqli_query($con,$sql))
	{
	     
		echo "<h2 style='color:white'>DATA INSERTED SUCCESSFULLY.... PLEASE WAIT UNTILL REDIRECTED</h2>";
		echo "<script>setTimeout(\"location.href = 'doctorpage.php';\",3500);</script>";
		
		//echo "<p style='color:white'>data inserted</p>";
		
		
	}else{
		
		echo "<h2 style='color:white'>ERROR WHILE INSERTING THE DATA: $con->error.... PLEASE WAIT UNTILL REDIRECTED</h2>";
		echo "<script>setTimeout(\"location.href = 'doctor.php';\",10000);</script>";
		
		// header("Location: http://localhost:8080/final_project(26032019)/final_project(25032019)/home.php");
	}
}
?>