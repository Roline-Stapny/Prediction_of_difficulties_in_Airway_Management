<?php
session_start() ; 
if(isset($_POST['insert']))
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
	$name=$_SESSION['name'];
	$username=$_SESSION['user_name'];
	$password=$_SESSION['password'];
	$adminid=$_SESSION['admin_id'];
	
	//echo $_SESSION['name'];
    //echo "$name";
	//echo "password";
	
	
	$street1=$_POST['addressline1'];
	$street2=$_POST['addressline2'];
	$street=$street1.$street2;
	
	$city=$_POST['city'];
	$zip=$_POST['zip'];
	$state=$_POST['state'];
	$country=$_POST['country'];
	$mobile=$_POST['mobile_number'];
    $email=$_POST['email'];
	
	$dept=$_POST['department'];
	
	if(isset($_FILES['image'])){
        
	     $image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //SQL Injection defence!
		 
    }
	else{echo "file is not uploaded"; }
	
	
	//$image_name = addslashes($_FILES['pic']['name']);
	
	//echo "here";
	
	
	
	
    $sql  =  "INSERT INTO `admin`(`Admin_id`, `Name`, `Username`, `Password`, `Street`, `City`, `Zip`, `Sate`, `Country`, `Mobile`, `Email`, `Dept`, `Photo`) VALUES ('$adminid','$name','$username','$password','$street','$city','$zip','$state','$country','$mobile','$email','$dept','$image');";
	if(mysqli_query($con,$sql))
	{
	     
		echo "DATA INSERTED SUCCESSFULLY.... PLEASE WAIT UNTILL REDIRECTED";
		echo "<script>setTimeout(\"location.href = 'home.php';\",3500);</script>";
		
		//echo "<p style='color:white'>data inserted</p>";
		
		
	}else{
		
		echo "ERROR WHILE INSERTING THE DATA: $con->error.... PLEASE WAIT UNTILL REDIRECTED";
		echo "<script>setTimeout(\"location.href = 'home.php';\",3500);</script>";
		
		// header("Location: http://localhost:8080/final_project(26032019)/final_project(25032019)/home.php");
	}
}
?>