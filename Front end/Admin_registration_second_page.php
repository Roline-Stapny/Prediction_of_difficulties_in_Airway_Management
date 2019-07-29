<?php
session_start() ;  

    $admin_id=$_POST['admin_id'];
	$first_name=$_POST['first_name'];
	$middle_name=$_POST['middle_name'];
	$last_name=$_POST['last_name'];
	$Pname=$first_name.$middle_name.$last_name;
	
	
	$user_name=$_POST['user_name'];
	
	if($_POST['password1']==$_POST['password2'])
	{
		$password=$_POST['password1'];
	}		

	$_SESSION['name']=$Pname;
	$_SESSION['user_name']=$_POST['user_name'];
	$_SESSION['password']=$password;
	$_SESSION['admin_id']=$_POST['admin_id'];   
/*if(isset($_POST['insert']))
	{
		
	$name=$_SESSION['name'];
	echo "$name";
	
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

	echo "id";
	echo "$adminid";
	
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
		echo "<p style='color:white'>data inserted</p>";
	}else{
		echo $con->error;
	}
}
	*/
?>

<html lang="en">
<head>
	<!-- Meta tags -->
	<font color="white" face="arial">
	<title>Admin Registration</title>
	
	<!-- stylesheets -->
	<link rel="stylesheet" href="css(3)/font-awesome.css">
	<link rel="stylesheet" href="css(3)/style.css">
	<!-- google fonts  -->
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i,700" rel="stylesheet">
</head>
<style>
body{
 font-family: Arial, Helvetica, sans-serif;
 margin:0px;
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
                    background:linear-gradient(to bottom right, #FFC039, yellow);
                      color:black;
					
                   }
		li a:active {
                    background-color: green;
					color:black;
					}
		input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

td{
     
     color:#532558;
     font-family: Arial, Helvetica, sans-serif;
     }
</style>
<script src="js/countries.js"></script>
<body style="background-image:url('images/banner9.jpg')">
<div class="w3-top" style="background-color:#FFC039">
<div class="w3-bar w3-card  " style="background-color:#FFC039">
	<!-- title -->
	<h1 style="font-family:sans-serif;color:#030606;font-size:45px;text-align:left;" >
	
	<img class="img-responsive sp-default-logo" src="images/logo-nitte.jpg" width="30%" style="padding:8px;margin-left:50px" alt="Nitte"> </h1>

	</div>
	<ul id="menu" style="align :center">
                
		<li><a href="home.php"><b>Home<b></a></li>
		<li><a href="personal_info.php">Personal Registration</a></li>
		<li><a href="#">Transaction</a></li>
		<li><a href="#">Processing </a></li>
		<li><a href="#">Report</a></li>
	</ul>
	</div>
	<br>
	
		
			<div class="heading">
				<h2 style="color:#FDFAB2"><b>Admin Registration </b></h2>
			</div>
			<div class="container" style="width:1150px; background:#EEF1FB;  border-radius:25px; color:black">
			
			<div class="agile-form" > <!-- style="display:inline-block"  #EEF1FBCF -->
				
				<form action="second_page.php" method="post" enctype="multipart/form-data">
					
					   
					<table style="width:1100px">
					
					<tr>
					<td>
					    Department <span class="form-required"> * </span>
					</td>
					
					<td>
					   <select style="width:220px" name="department">
									    <option value="cardiology">Anesthetics</option>
										<option value="cardiology">Cardiology</option>
										<option value="gastro">Gastroenterology </option>
										<option value="gyneco">Gynecology</option>
					
									 </select>
					</td>
					<td style="width:250px">
					
					</td>
					<td style="width:200px">
					     Mobile Number  <span class="form-required" style="padding-right:50px"> * </span>
					</td>
					
					<td>
					<input type="text" name="mobile_number" style="width:220px" placeholder="Phone Numbers" required pattern="(7|8|9)\d{9}" title="Please enter 10 digit number starting with 7,8 or 9 " >
						</td>
					   
						
					</tr>
					
				      <tr>
                          <td class="form-label" style="padding-top:0px; width:220px">
						  Address <span class="form-required"> * </span>
						  </td>
						  
						    <td>
						  <input type="text" name="addressline1" style="width:220px" placeholder="Address Line 1" required title="Missing address" >
						  </td>
						    <td>
						 <input type="text" name="addressline2" style="width:220px" placeholder="Address Line 2" required title="Missing address" >
						  </td>
						   
						   <td class="form-label" style="padding-top:0px; width:100px">
						       Email-ID <span class="form-required"> * </span>
						   </td>
						   
						  <td style="width:220px">
							  <input  type="text" name="email" placeholder="myname@example.com" required>
							  </td>
						  
						
					   </tr>
					   
					   <tr>
					   <td style="width:220px">
					     <td style="width:220px"><input type="text" name="city"  placeholder="City " required ></td>
					   
					   </td>
					  
					   <td><input type="text" name="zip" style="width:220px" placeholder="Zip code " required pattern="[0-9]{6}" title="only 6 digits allowed"></td>
					   
					   
					   <td style="width:100px">Upload Photo<span class="form-required"> * </span> </td>
					   <td>
					     
							<input type="file" name="image" id="image" accept="image/*"  required/>
							</td>
					  
					   
					   </tr>
					   
					   
					   
					   <tr>
					   
					   
					    
					   <td style="width:220px"></td>
					   <td style="width:220px"> 
                         <select id="country" name ="country"></select>
					   </td>
					   <td ><select style="width:220px" name ="state" id ="state" ></select>

			 
                        <script language="javascript">populateCountries("country", "state");</script>
					   </td>
					   <td></td>
					   <td></td>
					   
				        
								
					   </tr>
					   
					   
					   
					   
</table>
					   
					   
					  
		              <!--  
		                    <label class="form-label" style="padding-top:0px">
							   Address
							   <span class="form-required"> * </span>
							</label>
							
						     <div style="margin-left:120px; display:inline-block;">
							 
							   
							  <input type="text" name="street_address" style="width:350px" placeholder=" " required>  
							  <li style="margin-top:2px">Street Address</li>
							    
							  
							     <input type="text" name="street_address2" style="width:350px" placeholder=" " required>  
							      <li style="margin-top:2px">Street Address2</li>
								  
							      <input type="text" name="city" style="width:350px" placeholder=" " required pattern="[A-Za-z]+$" title="Enter only letters">
								  
								<li style="margin-top:2px">City</li>
								
								<input type="text" name="zip" style="width:350px" placeholder=" " required pattern="[0-9]{6}" title="only 6 digits allowed">
							    <li style="margin-top:2px">Postal / Zip Code</li>
								
								
							  </div>
							 
						
                        					

                        											
						 <span style="float:right;margin-right:150px;margin-top:-60px ">
						    
							 Mobile Number&nbsp;&nbsp; <span class="form-required"> * </span>
							 &nbsp;&nbsp;<input style="width:350px" type="text" name="mobile_number" placeholder="Mobile Number" required pattern="(7|8|9)\d{9}" title="Please enter 10 digit number starting with 7,8 or 9 ">
							
							<br><br><br>
							Email Id&nbsp;&nbsp; <span class="form-required"> * </span>
						    &nbsp;&nbsp;<input style="width:340px; margin-left:46px" type="email" name="email" placeholder="myname@example.com" required>
							 
							 <br><br><br>
							 Country&nbsp;&nbsp;<span class="form-required"> * </span>
							 &nbsp;&nbsp;<input type="text" name="country" style="width:350px; margin-left:45px" placeholder=" " required pattern="[A-Za-z]+$" title="Enter only letters">
							  
							  <br><br><br>
							  State / Province&nbsp;<span class="form-required"> * </span>
							 &nbsp; <input type="text" name="state" style="width:350px;margin-left:-5px" placeholder=" " required pattern="[A-Za-z]+$" title="Enter only letters">
							
							<br><br><br>
							Upload Photo&nbsp;<span class="form-required"> * </span>
							&nbsp;&nbsp;&nbsp;<input type="file" name="pic" accept="image/*">
							
						</span>
					-->
			
						
						<center>  <input type="submit" name="insert" value="Submit" style="width:200px; height:50px; background: radial-gradient(at top left, #689F38, green); border:0px;color:white; border-radius:4px" /> 
						
					</ul>
					
				</form>	
			</div>
		</div>
		</font>
		<div class="copyright">
			<p></a></p> 
		</div>
	</div>
</body>
</html>

