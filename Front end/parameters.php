<?php
 session_start();  
$host= 'localhost';
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

  $Ibase=urldecode($_SESSION['source']);
  //echo $Ibase64;
  //echo $Ibase;
  
    $docname1=$_SESSION['DocName'];

     $age=$_SESSION['dob'];
    
	 $Pname=$_SESSION['patient_name'];
	 $PFname=$_SESSION['father_name'];
	 $pgender1=$_SESSION['gender'];
	 $_SESSION['gender']=$pgender1;
	 
	 $bod1=$_SESSION['dateofbirth'];
	 $bod = date("Y-m-d", strtotime($bod1));
	 
	 $status1=$_SESSION['mstatus'];
	
    $mobile=$_POST['p_phone'];
	$email=$_POST['p_email'];
	
	$pstreet1=$_POST['Patient_addressstreet'];
	$pstreet2=$_POST['Patient_addressstreetline']; 
	$PStreet=$pstreet1.$pstreet2;
	$PCity=$_POST['city'];
	$Pcountry=$_POST['country'];
	$Pstate=$_POST['state'];
	$Pzip=$_POST['code'];
	$Tstreet1=$_POST['Patient_Taddressstreet'];
	$Tstreet2=$_POST['Patient_Taddressstreetline'];
	$TStreet=$Tstreet1.$Tstreet2;
	$TCity=$_POST['city'];
	$Tcountry=$_POST['country2'];
	$Tstate=$_POST['state2'];
	$Tzip=$_POST['code'];
	$Ephone=$_POST['E_phone'];
	$Eemail=$_POST['E_email'];
	$Estreet1=$_POST['APatient_addressstreet'];
	$Estreet2=$_POST['APatient_addressstreetline'];
	$EStreet=$Estreet1.$Estreet2;
	$ECity=$_POST['city'];
	$Ecountry=$_POST['country3'];
	$Estate=$_POST['state3'];
	$Ezip=$_POST['code'];
	
	$_SESSION['patient_name']=$Pname;
	$_SESSION['dob']=$age;
	
	//echo "here";
	$sql  = "INSERT INTO `patient` (`Patient_id`, `Name`, `Fathers_name`, `Gender`, `Dob`, `Marital_status`, `Mobile`, `Email`, `PStreet`, `PCity`, `PZip`, `PState`, `PCountry`, `TStreet`, `TCity`, `TZip`, `TState`, `TCountry`, `EStreet`, `ECity`, `EZip`, `EState`, `ECountry`, `EMobile`, `EEmail`, `Imagebase64`) VALUES (NULL, '$Pname', '$PFname', '$pgender1', '$bod', '$status1', '$mobile', '$email', '$PStreet', '$PCity', '$Pzip', '$Pstate', '$Pcountry', '$TStreet', '$TCity', '$Tzip', '$Tstate', '$Tcountry', '$EStreet', '$ECity', '$Ezip', '$Estate', '$Ecountry', '$Ephone', '$Eemail','$Ibase')";
	
	
   


	//echo $sql;
	if(mysqli_query($con,$sql))
	{
		$last_id = mysqli_insert_id($con);
		  //echo "New record created successfully. Last inserted ID is: " . $last_id;
		//echo "<p style='color:white'>data inserted</p>";
	}else{
		echo "Error";
	}
	$_SESSION['Patient_id']=$last_id;
	
	
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	body
	{
		margin:0;
               font-family: Arial, Helvetica, sans-serif;
	}	

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
	footer
		{
		    text-align:center;
			background-color:black;
			color:#fff;
		
		} 

        



table{
  border-collapse:collapse;
border-radius:30px;
 
   background: rgb(238,241,251,0.6);
}


 td{
    
     color:#532558;
     font-family: Arial, Helvetica, sans-serif;
   }
	 label[name=ward]{
	 text-align:center:
	 width: 180px;
    padding: 12px 20px;
    margin: 8px 0;
	 }
	 
	 
button
{
width: 100%;
   
    background:radial-gradient(at top left,#689F38,green);
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;

}

 input[type=text], select {
    width: 180px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

 input[type=float], select {
    width: 180px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[name=dateofa], select {
    width: 180px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[name=ward], select {
    width: 50%;
    padding: 12px 20px;
    margin:8px 0;
	float:left;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


   .tab {
    overflow: hidden;
    border: 1px solid #ccc;
	 float: left;
	width: 15%;
	height: 450px;
    background-color: rgba(255, 215, 0,0.1);
}
.tab button:hover {
    background-color: #ddd;
}
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
	  
    display: none;
	 float: left;
    padding: 6px 12px;
	height: 400px;
	width: 80%;
  border
  -left: none;
    /*border: 1px solid #ccc;*/
    border-top: none;
}
.dropbtn {
    background:radial-gradient(at top left,#689F38,green);
	
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
	width: 150px;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
	
  input[type=submit] {
    width: 30%;
    background-color: #4CAF50;
font-family: Arial, Helvetica, sans-serif;
    color: white;
    padding: 14px 20px;
  float:right;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

 
  



					

</style>


<script src="js/countries.js"></script>
<script src="js/department.js"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


 <link rel="stylesheet" href="/resources/demos/style.css">
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  
 <script>

  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  
  
  function compute() {
			
			 
			  height=Number(document.getElementById("height").value);
			  weight=Number(document.getElementById("weight").value);
			  var bmi= weight/(height/100*height/100);
			
			document.getElementById("bmi").value = bmi;
			 }

  </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
function validateForm()
{

   var x = document.forms["myForm"]["doc_id"].value;
    if (x == "") {
        alert("Id must be filled out");
        return false;
    }
}

</script>
<script type="text/javascript">
            function add_number(){
            var first_number = parseFloat(document.getElementById("weight").value);
            var second_number = parseFloat(document.getElementById("height").value);
            var result = (first_number/(second_number*second_number));
            document.getElementById("txtresult").value= result;    
            }
			
			
			function Checkweight(){
				  if(document.getElementById('weight').value==''){
					  document.getElementById('errorweight').innerHTML="enter weight";
					  
					  document.getElementById('weight').focus();
				  }
				  else{
					   document.getElementById('errorweight').innerHTML="";
				  }
				  
            
			}
			
			function Checkheight(){
				if(document.getElementById('height').value==''){
					  document.getElementById('errorheight').innerHTML="enter height";
					  document.getElementById('height').focus();
				  }
				  else{
					   document.getElementById('errorheight').innerHTML="";
				  }
				 }
				 
				 
			function Checkneckc(){
				if(document.getElementById('neckc').value==''||document.getElementById('neckc').value>60||document.getElementById('neckc').value<10){
					  document.getElementById('errorneckc').innerHTML="enter value between 10 and 60";
					  document.getElementById('neckc').focus();
				  }
				  else{
					   document.getElementById('errorneckc').innerHTML="";
				  }
				 }
			function Checkinterincisor(){
				if(document.getElementById('interin').value==''||document.getElementById('interin').value<2||document.getElementById('interin').value>6){
					  document.getElementById('errorinterincisor').innerHTML="enter value between 2 and 6";
					  document.getElementById('interin').focus();
				  }
				  else{
					   document.getElementById('errorinterincisor').innerHTML="";
				  }
				 }
			function Checkthyromental(){
				if(document.getElementById('thyro').value==''||document.getElementById('thyro').value<1||document.getElementById('thyro').value>9){
					  document.getElementById('errorthyromental').innerHTML="enter value between 1 and 9";
					  document.getElementById('thyro').focus();
				  }
				  else{
					   document.getElementById('errorthyromental').innerHTML="";
				  }
				 }
				 	 
			function Checkheadneck(){
				if(document.getElementById('head_neck').value==''||document.getElementById('head_neck').value<80||document.getElementById('head_neck').value>270){
					  document.getElementById('errorheadneck').innerHTML="enter value between 80 and 270";
					  document.getElementById('head_neck').focus();
				  }
				  else{
					   document.getElementById('errorheadneck').innerHTML="";
				  }
				 }
				 
			
        </script>
		</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="/resources/demos/style.css">
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
		<!--<li><a href="personal_info.php">Personal Details</a></li>
		<li><a href="addressrev.php">Contact Info</a></li>
		<li><a href="parameters.php">Physical Parameters</a></li>-->
	
                 
		
	</ul>
	</div>
	
<form action="http://localhost:12346/datafinal"  name="myForm" onsubmit="return validateForm()" method="post">	
<!--<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Patient Contact')" id="defaultOpen">Patient's Contact</button>
  <button class="tablinks" onclick="openCity(event, 'Emergency Contact')">Emergency Contact</button>

</div>-->
<div>
<!--<h2 align="center" style="color:#FDFAB2"> <b>Physical Parameters</b></h2>-->
	<br>
	
<table align="center" bgcolor="#EEF1FB"  width="100%" height="100" box-shadow="20px 20px"  id="rcorners2">
<tr>
<td>
 <lable style="float:center">Patient Id </label>  <!-- <lable>Patient Registration</lable>-->
 </td>
 <td><lable>
   <?php
    
     echo "$last_id";
    ?>
	</lable></td>
	
 
 <td><lable>Patient Name</lable></td>
 <td><lable>
   <?php
    
     echo "$Pname";
    ?>
	</lable></td>
 

 <td>
      <input type="text" name="docname" value='<?php echo"$docname1 ";?>'/>
  </td>
 
 <td>
       

   </td>

</tr>


   <!--<div class="pic-container pic-medium pic">
      <img class="pic" src="images/patient-icon-1.jpg" alt="" style="width:30%;margin-right:100px;padding:5px">
          <div class="pic-overlay">
      <a><i class="fa fa-window-close-o" aria-hidden="true"></i></a>
      <a><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
          </div>
<!--<img src=".jpg" style="width:50%;padding:0px;margin-right:0px">-->




<tr>
   <td>
    <lable>Date of Admission <span class="form-required" style="color:red"> * </span></lable>
    </td>
<td> <input   type="date" name="dateofa" id="dateofa"> </td>
 <td><lable name="ward"> Ward No </lable></td>
 <td> <input  type="text" name="wardno" id="wardid"> </td>
   <td></td>
   <td></td>
	
    </tr>
    
</table>
</div>
<br> 
<br>

<div> 
<table width="100%"  align="center">
<tr>
   <td nowrap>
    <lable>Physical Parameters<span class="form-required" style="color:red"> * </span></lable>
    </td>
</tr>
</div>
<tr><td><div  class="tab">
<button class="tablinks" onclick="openCity(event, 'Basic')"><h3>Basic<h3></button>
  <button class="tablinks" onclick="openCity(event, 'Mask Ventilation')"><h3>Mask Ventilation<h3></button>
  <button class="tablinks" onclick="openCity(event, 'Intubation')"><h4>Intubation<h4></button>
</div>

<div id="Basic" class="tabcontent">
  <h3>General Parameters</h3>
  
  <table width="700" height="300px" align="center">
  <tr><td><lable>Age<span class="form-required" style="color:red"> </span></lable></td>
  
	<td><input type=text name="age" value='<?php echo"$age";?>'/></td>
  </tr>
  <tr><td><lable>Weight <span class="form-required" style="color:red"> </span></lable></td>
<td>
 <input type="float"  onkeyup="compute()"id="weight" placeholder="Weight(kg)" onblur="Checkweight();" required pattern ="^[0-9]*\.?[0-9]*+$" required ></td>
       
 </td>
 </tr>
 <tr><td></td><td><span style="color:red" id="errorweight"></span></td></tr>
 
<tr><td><lable>Height <span class="form-required" style="color:red"></span></lable>
</td>
<td><input type="float"  onkeyup="compute()" id="height" placeholder="Height(cms)" onblur="Checkheight();" required pattern ="^[0-9]*\.?[0-9]*+$" required ></td>
 
 <!--<td><input type="button" width="40px" height="30px" name="clickbtn" value="Cal" onclick="add_number()"></td>-->
  </tr>
  <tr><td></td><td><span style="color:red" id="errorheight"></span></td></tr>
  
<tr><td><lable>BMI<span class="form-required" style="color:red"> </span></lable></td>
  <td><input type="float" id="bmi" name="bmi"></lable>
            </td>
			</tr>
			<tr>
	<td><lable>Gender <span class="form-required" style="color:red"> </span></lable></td>
  
  <td>
    <select class="form-dropdown" name="gender" style="width:180px" required>
									
									<option  value="1" > Male </option>
									<option value="0"> Female </option>
									
								</select>
  </td>
  </tr>
</table>

</div>




<div id="Mask Ventilation" class="tabcontent">
 <h3>Mask Ventilation</h3>
<table width="1000" align="center">

<tr><td>
<lable>Neck Circumference</lable>
</td>
 <td>
   <input type="float" id="neckc" name="nc" placeholder="Neck Circumference" onblur="Checkneckc();" pattern ="^[0-9]*\.?[0-9]*+$"  min="10" max="60" style="width:150px" required>
    </td>
  
  
  
 
   <td nowrap ><lable>Neck radiation</lable></td>
 <td>
 <select class="form-dropdown" name="neck_radiation" style="width:150px" required>
									
									<option  value="0" > Absent </option>
									<option  value="1"> Present </option>
									
								</select>

   </td>
   
 </tr>
 
 <tr><td></td><td><span style="color:red" id="errorneckc"></span> </td> 
   

 </tr>
  
<tr>

  
 <td><lable>Mallampati</lable>
</td>
   <td>
                               <select class="form-dropdown"  min="3" max="8" name="mal" style="width:150px" required>
									
									<option  value="1" >I </option>
									<option  value="2">II </option>
									<option  value="3">III </option>
									<option  value="4">IV </option>
									
								</select>

   </td>
  
 <td><lable>Teeth</label>
</td>
   <td>
 <select class="form-dropdown" name="teeth" style="width:150px" required>
									
									<option  value="1" > Yes </option>
									<option  value="0"> No </option>
									
								</select>

   </td>
   
   
  <tr>
<td><lable>ULBT</lable>
</td>
   <td>
                               <select class="form-dropdown" style="width:150px" min="3" max="8" name="ulbt" style="width:150px"  required>
									
									<option  value="1" >I</option>
									<option value="2">II </option>
									<option value="3">III </option>
									
								</select>

   </td>
  
 <td> <lable> Beard</label>
</td>
<td>  <select class="form-dropdown" name="beard" style="width:150px" required>
									
									<option  value="1" > Present </option>
									<option selected value="0"> Absent </option>
									
								</select>


 
       </td>
</tr>

<tr><td><lable> Snoring</label></td>
<td><select class="form-dropdown" name="hos" style="width:150px" required>
									
									
									<option selected value="0"> Absent </option>
									<option  value="1" > Present </option>
									
								</select>
</td>
<td> <lable> Macroglossia</label> 
</td>
<td>  <select class="form-dropdown" name="macroglossia" style="width:150px" required>
									
									
									<option selected value="0"> Absent </option>
									<option  value="1" > Present </option>
									
								</select>


 
       </td>
</tr>

<tr>
	  
<td><lable> Stiff Lungs</label></td>
<td><select class="form-dropdown" name="stiff_lungs" style="width:150px" required>
									
									
									<option selected value="0"> Absent </option>
									<option  value="1" > Present </option>
									
								</select>
</td>
</tr>

  </table>
 </div>
 
 
 
 
<div id="Intubation" class="tabcontent">
  <h3>Intubation</h3>
  <table width="1100px" height="300px" align="center">
  <tr>
  <td nowrap ><lable>Interincisor gap</lable></td>
  <td> 
  <input type="float" id="interin" name="interincisor_gap" onblur="Checkinterincisor();" placeholder="Interincisor gap" pattern ="^[0-9]*\.?[0-9]*+$" min="2" max="6"  style="width:150px" required  >
  </td>
  <td nowrap ><lable>Thyromental Distance</lable></td>
  <td> 
  <input type="float" id="thyro" name="thyromental_distance" onblur="Checkthyromental();" placeholder="Thyromental" pattern ="^[0-9]*\.?[0-9]*+$" min="1" max="9"  style="width:150px" required  >
  </td></tr>
  <tr>
  
  </tr>
  <td></td>
  <td><span style="color:red" id="errorinterincisor"></span></td>
  <td></td>
  <td><span style="color:red" id="errorthyromental"></span></td>
  
  <tr>
       <td nowrap ><lable>Head & neck</lable></td>
  <td> 
  <input type="float" id="head_neck" name="hnm"  onblur="Checkheadneck();" placeholder="headneck" pattern ="^[0-9]*\.?[0-9]*+$" min="80" max="270"  style="width:150px" required  >
  </td>
    <td nowrap ><lable>Buck teeth</lable></td>
  <td><select class="form-dropdown" name="dental_condition" style="width:150px" required>
									
									
									<option selected value="0"> Absent </option>
									<option  value="1" > Present </option>
									
								</select>
</td>
  </tr>
  
  <tr>
  <td></td>
  
  <td><span style="color:red" id="errorheadneck"></span></td>
 </tr>
  
  <tr>
  
  <tr>
  <td nowrap ><lable>Neck thick</lable></td>
  <td> <select class="form-dropdown" name="neck_thick" style="width:150px" required>
									
									
									<option selected value="0"> Absent </option>
									<option  value=" 1" > Present </option>
									
								</select>
  
  </td>
    <td nowrap ><lable>Mouth opening</lable></td>
  <td><select class="form-dropdown" name="absence_of_mouth" style="width:150px" required>
									
									<option value="0" > Present </option>
									<option  value="1"> Absent </option>
									
									
								</select>
</td>
  </tr>
  
    <tr>
  <td nowrap ><lable>Strider history</lable></td>
  <td> <select class="form-dropdown" name="strider_history" style="width:150px"  required>
									
									
									<option selected value="0"> Absent </option>
									<option  value="1" > Present </option>
									
								</select>
  
  </td>
  
  

  <td nowrap ><lable>Facial Assymentry</lable></td>
   <td>
   <select class="form-dropdown" name="facial_assemetry"  style="width:150px" required>
									
									
									<option selected value="0"> Absent </option>
									<option  value="1" > Present </option>
									
								</select>
   
   </td>
  
   
  </tr>
  <tr>
  <td nowrap ><lable>Small Mandible</lable></td>
  <td> <select class="form-dropdown" name="small_mandible"  style="width:150px" required>
									
									
									<option selected value="0"> No </option>
									<option  value="1" > Yes </option>
									
								</select>
  
  </td>
   <td nowrap ><lable>Pregnant</lable></td>
   <td>
   <select class="form-dropdown" name="pregnant"  style="width:150px" required>
									
									
									<option selected value="0"> No </option>
									<option  value="1" > Yes </option>
									
								</select>
   
   </td>
   
  </tr>

  <tr>
  <td></td>
 
 
  <td><input type="submit" name="submit" align="left" value="Save" >
  </td>
  <td>
      <input type="hidden" name="patient_id" value='<?php echo"$last_id";?>'/>
  </td>
  <td>
  <input type="hidden" name="patient_name" value='<?php echo "$Pname";?>' />
  </td>
  </tr>
  
 </div>

</table>





<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 




