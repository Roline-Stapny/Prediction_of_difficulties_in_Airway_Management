<?php
//session_start() ;   
/*$host= 'localhost';  
global $con;
global $sql;
$uname= 'root';
$pass= '';
$db= 'difficulties_in_airway';
$con= mysqli_connect($host,$uname,$pass,$db);


if(!$con)
	echo 'Not Connected succesful';

//$con=mysql_connect("localhost","root","") or die("not connected");
//mysql_select_db($con,"admindata")or die("db not found");
*//*
	
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
     
 */   
?>
<html>
<head>

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
	 width:220px
     }
		
					

</style>

<script src="js/countries.js"></script>
<script src="js/department.js"></script>


<script>
function validateForm() {
    
    var p1 = document.forms["myForm"]["password1"].value;
	var p2 = document.forms["myForm"]["password2"].value;
	
	
    if (p1!=p2) {
        alert("PASSWORDS NOT MATCHING!!!!");
        return false;
    }
	
	
	return true;
}

</script>

</head>


<body  style="background-color:#FFD700;background-image:url('images/banner9.jpg')" id="menu_1" >
<header>
	<div style="background-color:rgb(255, 179, 0);color:black;margin-top:0px">
	   <!--  <h1><a><img  src="images/logo-nitte.jpg" width="30%" style="padding-bottom: 1px;" alt="Nitte"></a></h1>
-->
	<h1 style="font-family:sans-serif;color:#030606;font-size:45px;text-align:left;background-color:rgb(255, 179, 0);margin-bottom:0px" >
	
	<img class="img-responsive sp-default-logo" src="images/logo-nitte.jpg" width="31%" style="padding:2px;padding-top:5px;margin-left:50px" alt="Nitte"> </h1>
	
	
	</header>
     
	<ul id="menu" style="align :center">
                
		<li><a href="home.php"><b>Home<b></a></li>
		<li><a href="personal_info.html" style="color:white">Personal Registration</a></li>
		<li><a href="#">Transaction</a></li>
		<li><a href="#">Processing </a></li>
		<li><a href="#">Report</a></li>
	</ul>
	</div>
	<center>
	<div class="heading">
				<h2 style="color:#FDFAB2" >Admin Registration </h2>
				</div>
	
<div class="container" style="width:700px; background:#EEF1FB;  border-radius:25px; padding:25px">
		        
				<form name="myForm" action="Admin_registration_second_page.php" onsubmit="return validateForm()" method="post">
				 
					
					<table >
					
					<tr>
						<td>
							Admin ID <span class="form-required" style="color:red"> * </span>
						</td>
						
						<td>
							<input type="text" name="admin_id" placeholder="Admin Id number" required/>
						</td>
					</tr>
				      <tr>
                          <td>
						  Admin Name <span class="form-required" style="color:red"> * </span>
						  </td>
						  
						    <td>
						  <input type="text" name="first_name" placeholder="First Name" required pattern="[A-Za-z]+$" title="Enter only letters" />
						  </td>
						    <td>
						 <input type="text" name="middle_name" placeholder="Middle Name" required pattern="[A-Za-z]+$" title="Enter only letters" />
						  </td>
						    <td>
						 <input type="text" name="last_name" placeholder="Last Name" required pattern="[A-Za-z]+$" title="Enter only letters" />
						  </td>
						
					   </tr>
					   
					   <tr>
					   </tr>
					   <tr>
					   </tr>
					   <tr>
					   </tr>
					   

					   
					   
					   <tr>
					     <td>
							User Name <span class="form-required" style="color:red"> * </span>
					     </td>
						 <td>
						     <input type="text" name="user_name" placeholder="Enter Username" required minlength="6" maxlength="15" />
				   
						 </td>
						 
					   </tr>
					   
					   <tr>
					   </tr>
					   <tr>
					   </tr>
					   <tr>
					   </tr>
					   
					   <tr style="margin-top:20px">
					     <td>
							Password <span class="form-required" style="color:red"> * </span>
					     </td>
						 <td>
						     <input type="text" name="password1" placeholder="Enter Password " required minlength="6" maxlength="15"  />
				   
						 </td>
						 
					   </tr>
					   
					    <tr>
					   </tr>
					   <tr>
					   </tr>
					   <tr>
					   </tr>
					   
					   <tr>
					     <td>
							Re-Type password <span class="form-required" style="color:red"> * </span>
					     </td>
						 <td>
						    <input type="text" name="password2" placeholder="Re-enter password" required minlength="6" maxlength="15"/>
				   
						 </td>
						 
					   </tr>
					   
					   
					   
					   
					   
					   </table>
					   
					   
					   
					   
					   
						<br><br>
							<center><button type="submit" name="submit" style="width:200px; height:50px;  background: radial-gradient(at top left, #689F38, green); border:0px;color:white; border-radius:4px"><b>Next</b></a></button></center>
					
					
	                    </ul>

	
					
					   
				</form>	
			</div>
</center>
		</body>
</html>
