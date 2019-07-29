<?php
   
	$host= 'localhost';
    global $con;
	global $sql;
	$uname= 'root';
	$pass= '';
	$db= 'difficulties_in_airway';
	$con= mysqli_connect($host,$uname,$pass,$db);
	if(!$con)
		echo 'Not Connected succesful';
	
	$un = $_POST['Name'];
    $pw = $_POST['Password'];

	//echo "here";
	 $sql  = "SELECT uname,password FROM `userexpro` WHERE uname = '$un' AND password = '$pw'";
	 
	$result=mysqli_query($con,$sql);
	
	$row= mysqli_fetch_assoc($result);
	
	if(!$row)
		
		{
			echo "<script type='text/javascript'> alert('Incorrect passwords'); </script>";
		echo "<script>setTimeout(\"location.href = 'userlogin.php';\",0);</script>";
	
		}
		
	else
	{
		header("Location: personal_info.php");
	}
	/*	while($row=mysqli_fetch_assoc($result)){
			
			$check_username=$row['uname'];
			$check_password=$row['password'];
			
		}
	    
		if($un==$check_username && $pw==$check_password){
				
				//echo "<script>setTimeout(\"location.href = 'personal_info.php';\",3000);</script>";
			
		}
		
	else 
		
		   echo " no match"
			//echo "<script>setTimeout(\"location.href = 'userlogdata.php';\",3000);</script>";
	
	
	*/
	
		//echo "DATA INSERTED SUCCESSFULLY.... PLEASE WAIT UNTILL REDIRECTED";
		//echo "<script>setTimeout(\"location.href = 'doctor.php';\",3500);</script>";
		
		//echo "<p style='color:white'>data inserted</p>";
		
		
	
		
	

?>