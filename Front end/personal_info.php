<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<html>
<?php

session_start();  
define('DB_name','difficulties_in_airway');
define('DB_user','root');
define('DB_pass','');
define('DB_host','localhost');
$link=mysql_connect(DB_host,DB_user,DB_pass);
if(!$link)
{
	die('couldnt not connect:'.mysql_error());
}

$db_selected=mysql_select_db(DB_name,$link);

if(!$db_selected){
	die('couldnt connect to database :'.DB_name.';'.mysql_error());
}

?>

	
	
	
	
	
	
	
<head>
<style>
body{
 font-family: Arial, Helvetica, sans-serif;

 }

    table{
  border-collapse:collapse;

 
   background: rgb(238,241,251,0.6);


}
 lable{
      margin-left:30px;
  }
	body
	{
		margin:0;
	}	
     ul#menu {
            list-style-type:none;
             
            margin:0px;
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
 
  

}
 

  td{
     
     color:#532558;
     font-family: Arial, Helvetica, sans-serif;
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

 input[type=date], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

 input[type=email], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
 input[type=tel], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
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

span{
color:red;
}

#rcorners2 {
    border-radius: 25px;
   
    
      
}

.tab {
    overflow: hidden;
    border: 1px solid #ccc;
  
    background:linear-gradient(to bottom right, orange, yellow);
}

.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
	
}

.tab button:hover {
    
}

/* Create an active/current tablink class */
.tab button.active {
    background: radial-gradient(at top left, #FFC60B, #FEFFDB);
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    /*border: 1px solid #ccc;*/
    border: none;
}
	
			

</style>

<script src="js/countries.js"></script>
<script src="js/department.js"></script>


<script type="text/javascript">
function Checkfname(){
	if(document.getElementById('fname').value==''){
		document.getElementById('errorfname').innerHTML='enter first name';
		document.getElementById('fname').focus();
		
	
	}
	else
	{
		document.getElementById('errorfname').innerHTML='';
	}
	return false;
	
}

function Checkmname(){
	if(document.getElementById('mname').value==''){
		document.getElementById('errormname').innerHTML='enter middle name';
		document.getElementById('mname').focus();
		
	
	}
	else
	{
		document.getElementById('errormname').innerHTML='';
	}
	return false;
	
}
function Checklname(){
	if(document.getElementById('lname').value==''){
		document.getElementById('errorlname').innerHTML='enter last name';
		document.getElementById('lname').focus();
	}
	else
	{
		document.getElementById('errorlname').innerHTML='';
	}
	return false;
}




function Checkffname(){
	if(document.getElementById('ffname').value==''){
		document.getElementById('errorffname').innerHTML='enter first name';
		document.getElementById('ffname').focus();
		
	
	}
	else
	{
		document.getElementById('errorffname').innerHTML='';
	}
	return false;
	
}

function Checkfmname(){
	if(document.getElementById('fmname').value==''){
		document.getElementById('errorfmname').innerHTML='enter middle name';
		document.getElementById('fmname').focus();
		
	
	}
	else
	{
		document.getElementById('errorfmname').innerHTML='';
	}
	return false;
	
}
function Checkflname(){
	if(document.getElementById('flname').value==''){
		document.getElementById('errorflname').innerHTML='enter last name';
		document.getElementById('flname').focus();
	}
	else
	{
		document.getElementById('errorflname').innerHTML='';
	}
	return false;
}





</script>


</head>
<body  style="background-image:url('images/banner9.jpg')" id="menu" >
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
	
<div>

<form action="addressrev.php" method="post">
<div class="tab">
 

</div>
<h2 align="center" style="color:#FDFAB2;"><b>Patients Details </b>  </h2>	
<br>

<table align="center" bgcolor="#EEF1FB"   box-shadow="10px 10px"  id="rcorners2">

<tr><td></td><td></td><td></td>
   <td>
    <video id="video" width="80" height="80" autoplay></video>
<button id="snap">Snap Photo</button>
<canvas id="canvas" width="80" height="80"></canvas>

<script>

// Get access to the camera!
if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    // Not adding `{ audio: true }` since we only want video now
    navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
        //video.src = window.URL.createObjectURL(stream);
        video.srcObject = stream;
        video.play();
		
    });
}


// Grab elements, create settings, etc.
var video = document.getElementById('video');
var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var video = document.getElementById('video');

// Trigger photo take
document.getElementById("snap").addEventListener("click", function() {
	context.drawImage(video, 0, 0, 80, 80);
	var imasrc=canvas.toDataURL();
    document.getElementById("sour").value = imasrc;
	
});




</script>

    

    
  
<td></td>
  
<td></td>
</tr>
<tr>



<td><input type="hidden" id="sour" name="source"></input></td>
</tr>

<tr>
<td><lable>Patients  Name: <span class="form-required"> * </span>
</lable></td>
<td> 
<input type="text" id="fname" name="patient_name" placeholder="Enter First  Name " required pattern="[a-zA-Z ]{1,30}" title="alphabets and length minimum of 2 letters" onblur="Checkfname();" >
</td>
<td>
       <input type="text" id="mname" name="patient_midname" placeholder="Middle name "  pattern="[a-zA-Z ]{1,30}" title="alphabets and length minimum of 2 letters" onblur="Checkmname();" >
   </td>

<td>
       <input type="text" id="lname" name="patient_lastname" placeholder="Last Name" required pattern="[a-zA-Z ]{1,30}" title="alphabets and length minimum of 2 letters" onblur="Checklname();">
   </td>
<td></td>
</tr>
<tr>
<td></td>


<td><span id="errorfname"></span></td>
<td><span id="errormname"></span></td>
<td><span id="errorlname"></span></td>
</tr>


<tr>
      <td>
    <lable>Patient's Fathers Name:  <span class="form-required"> * </span></lable>
    </td>
  <td> 
<input type="text" id="ffname" name="Father_name" placeholder="Enter First  Name " pattern="[a-zA-Z ]{2,30}" title="alphabets and length minimum of 2 letters"  onblur="Checkffname();">
</td>
<td>
       <input type="text" id="fmname" name="father_midname" placeholder="Middle name "  pattern="[a-zA-Z ]{1,30}" title="alphabets and length minimum of 2 letters" onblur="Checkfmname();" >
   </td>

<td>
       <input type="text" id="flname" name="father_lastname" placeholder="Last Name" required pattern="[a-zA-Z ]{1,30}" title="alphabets and length minimum of 2 letters" onblur="Checkflname();" >
   </td>
<td></td>
   
</tr>
<tr>

<td></td>
<td><span id="errorffname"></span></td>
<td><span id="errorfmname"></span></td>
<td><span id="errorflname"></span></td>
</tr>

<tr>
    <td>
    <lable>Patients Gender  <span class="form-required"> * </span></lable>
   </td>
   <td> 
          <select class="form-dropdown" name="gender"  required>
									
									<option value="Male"> Male </option>
									<option value="Female"> Female </option>
									<option value="Transgender"> Others </option>
								</select>

    </td>
    <td>			
          
   </td>

   
   <td></td>

  <td></td>
   
</tr>
<tr>
     <td>
       <lable >Date Of Birth  <span class="form-required" title="enter your birthdate"> * </span></lable>
     </td>
   <td> <input type="date"  name="dateofbirth" id="dateofbirth" required > </td>
   
   <td></td>
   <td></td>
   <td></td>
   
</tr>
<tr>
<td></td>


<td><span id="errordate"></span></td>

</tr>


<tr>
<td>
<lable >Marital Status   <span class="form-required"> * </span></lable>
</td>
   <td>
      <select class="Marital" name="Mstatus">
									
										<option value="Married"> Married </option>
										<option value="Single"> Single </option>
										<option value="Divorcy"> Divorcy </option>
										<option value="Widow"> Widow</option>
		
									 </select>

   </td>

<td>
   
</td>
<td> </td>
<td></td>


  
</tr>   
<tr>
<td><lable>Doctor Assigned:<span class="form-required"> * </span></lable></td>
<td>
<?php
$sql="SELECT * FROM doctor";
$result=mysql_query($sql);
    echo '<input id="docname" type="text" name="DocName" list="names" maxlength="50" > <datalist id="names">';
    while($rows=mysql_fetch_array($result)){
    ?>
    <option value="<?php echo $rows['Name']; ?>">
    <?php
    }
    ?>
    </datalist>
</td>
</tr>

<tr>
<td>

</td>
   <td>
      
   </td>
<td></td>
<td></td>
<td></td>
  
</tr> 
<tr>  <td></td> <td></td> <td></td><td><input type="submit" name="Save"  value="Save"/></td></tr>    
<tr>
 <td></td>
<td> 
</td>
<td>
</td>
<td></td>
<td>
</td>
<td></td>
</tr>    
</table>
</form>
</div>
<!--<footer style="text-align:center">
	 <div class="bottom">
				<div class="contact_right">
				    <h3></h3>
						<p></p>
						<p><a href="mailto:rakshashetty106@gmail.com"></a></p>
				</div>
		 </div>
				<p style="text-align:center">  <b></b></p>
		</footer>
		</body>
</html>-->

