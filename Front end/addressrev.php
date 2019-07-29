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


$imabase64=$_POST['source'];
$imaenc=urlencode($imabase64);
$_SESSION['source']=$imaenc;
//echo $imaenc;
//echo $_SESSION['source'];

   $docname=$_POST['DocName'];
   //echo $docname;
   $_SESSION['DocName']=$docname;
	
	$pname1=$_POST['patient_name'];
	
	$pmiddle_name=$_POST['patient_midname'];
	$plast_name1=$_POST['patient_lastname'];
	$Pname=$pname1.$pmiddle_name.$plast_name1;
	$_SESSION['patient_name'] = $Pname;
	
	$pfname1=$_POST['Father_name'];
	$pfmiddle_name=$_POST['father_midname'];
	$pflast_name=$_POST['father_lastname'];
	$PFname=$pfname1.$pfmiddle_name.$pflast_name;
	$_SESSION['father_name'] = $PFname;
	$pgender1=$_POST['gender'];
	$_SESSION['gender']=$pgender1;
	
	$bod1=$_POST['dateofbirth'];
	
	$_SESSION['dob']=$bod1;
	$status1=$_POST['Mstatus'];
	$_SESSION['mstatus']=$status1;
	
       $result = date('Y-m-d');
        
        $diff = date_diff(date_create($bod1), date_create($result));
          
       $age=$diff->format('%y');
	   $_SESSION['dob']=$age;
	 
	 $_SESSION['dateofbirth']=$bod1;
	

?>

<html>
<head>
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
            background-color:#000000CC;
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
                      					color:#444444;
					
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

         table.one{
  border-collapse:collapse;

   text-align:center; 
    margin-left:auto; 
    margin-right:auto;
   background:#FEFFDBD6 ;/*rgb(238,241,251,0.6)*/
/*margin-left:10px*/;
  width:90%;
height:25%;
 
}

table.two   {
     border-collapse:collapse;
     margin-left:10px;
  float:left;
     width:47%;
   height:23%;
/*width:60%;
   height:53%;*/
   background: #FEFFDBD6;
  
}

table.three
{

   border-collapse:collapse;
   
    
    float:right;
  margin-right:10px;
   /* width:47%;
   height:23%;*/
   /*width:60%;
   height:53%;*/
   width:50%;
   height:23%;
    background: #FEFFDBD6;/*rgb(238,241,251,0.6);*/

}

table.four
{

   border-collapse:collapse;
 /* float:left;*/
 
  /*margin-right:10px;*/
   width:60%;
   height:53%;
    text-align:center; 
    margin-left:auto; 
    margin-right:auto;
   background:#FFF8E1D6; /*rgb(238,241,251,0.6);*/
}

table  {
     border-collapse:collapse;
   
margin-right:10px;
    width:45%;
   height:53%;
   background: rgb(214,203,211, 0.6);
  
}?

  td{
     font-family: Arial, Helvetica, sans-serif;
     color:#FDFAB2;
     
     }
#rcorners2 {
    border-radius: 25px;
   
    
      
}

button
{
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
  float:left;
    margin: 8px 0;
   margin-left:0;
    border: none;
    border-radius: 4px;
    cursor: pointer;

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

 input[type=email], select {
    width: 100%;
    font-family: Arial, Helvetica, sans-serif;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
 input[type=tel], select {
    width: 100%;
  font-family: Arial, Helvetica, sans-serif;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


input[type=submit] {
    width: 10%;
   /* background-color: #4CAF50;*/
    background: radial-gradient(at top left, #689F38, green);
    
font-family: Arial, Helvetica, sans-serif;
    color: white;
    padding: 14px 14px;
  float:right;
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
div {
    
    
 
}

#rcorners2 {
    border-radius: 25px;
   
    
      
}


.tab {
    overflow: hidden;
    color:#444444;
   /* border: 1px solid #ccc;*/
   /* background-color:#ffb88c;    #FFD700  rgb(255, 179, 0)*/
     background:linear-gradient(to bottom right, orange, yellow);
}

.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    /*padding: 14px 14px;*/
   /* transition: 0.3s;*/
    font-size: 17px;
	color:#444444;
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
    color:#444444;
   /* padding: 6px 12px;*/
    /*border: 1px solid #ccc;*/
    border-top: none;
}
					

</style>

<script src="js/countries.js"></script>
<script src="js/department.js"></script>

<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

 $(document).ready(function(){
		  $("#code").keyup(function(){
			  var name=$("#code").val();
			  
			  if(name != "")
			  {
				  $.ajax({
					  
				  type:"POST",
				  url:"request1.php",
				  data: {
					  code:name
				  },
				  success: function(html)
				  {
					  
					  $("#city").val(html);
				  }
				  });
			  }
		  });
		  
		  
		  $("#code1").keyup(function(){
			  var name=$("#code1").val();
			  
			  if(name != "")
			  {
				  $.ajax({
					  
				  type:"POST",
				  url:"request1.php",
				  data: {
					  code:name
				  },
				  success: function(html)
				  {
					  
					  $("#city1").val(html);
				  }
				  });
			  }
		  });
		  
		  $("#code2").keyup(function(){
			  var name=$("#code2").val();
			  
			  if(name != "")
			  {
				  $.ajax({
					  
				  type:"POST",
				  url:"request1.php",
				  data: {
					  code:name
				  },
				  success: function(html)
				  {
					  
					  $("#city2").val(html);
				  }
				  });
			  }
		  });
		  
	  });
	  
	  
	  

</script>



<script>
function validateForm()
{

   var x = document.forms["myForm"]["doc_id"].value;
    if (x == "") {
        alert("Id must be filled out");
        return false;
    }
}


function Checkmobileno(){
	 var letters = /^[A-Za-z]+$/;
    if(document.getElementById('mobileno').value==''||document.getElementById('mobileno').value.match(letters)||document.getElementById('mobileno').value.length<10){
		document.getElementById('errormobileno').innerHTML='Enter 10 digit mobile number';
		document.getElementById('mobileno').focus();
	}
	else
	{
		document.getElementById('errormobileno').innerHTML='';
	}
	return false;

}

function Checkemail(){
    var x=document.getElementById('email_id').value;  
    var atposition=x.indexOf("@");  
    var dotposition=x.lastIndexOf(".");  
    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length||x==''){  
	 
		document.getElementById('erroremail').innerHTML='Enter valid email';
		document.getElementById('email_id').focus();
	}
	else
	{
		document.getElementById('erroremail').innerHTML='';
	}
	return false;
}

function Checkstreet1padd(){
	if(document.getElementById('street1padd').value==''){
		document.getElementById('errorstreet1padd').innerHTML='Enter street adrress';
		document.getElementById('street1padd').focus();
		
	
	}
	else
	{
		document.getElementById('errorstreet1padd').innerHTML='';
	}
	return false;
}


function Checkstreet2padd(){
	if(document.getElementById('street2padd').value==''){
		document.getElementById('errorstreet2padd').innerHTML='Enter street address';
		document.getElementById('street2padd').focus();
		
	
	}
	else
	{
		document.getElementById('errorstreet2padd').innerHTML='';
	}
	return false;
}

function Checkstreet1tadd(){
	if(document.getElementById('street1tadd').value==''){
		document.getElementById('errorstreet1tadd').innerHTML='Enter  temporary street ';
		document.getElementById('street1tadd').focus();
		
	
	}
	else
	{
		document.getElementById('errorstreet1tadd').innerHTML='';
	}
	return false;
}

function Checkstreet2tadd(){
	if(document.getElementById('street2tadd').value==''){
		document.getElementById('errorstreet2tadd').innerHTML='Enter  temporary street ';
		document.getElementById('street2tadd').focus();
		
	
	}
	else
	{
		document.getElementById('errorstreet2tadd').innerHTML='';
	}
	return false;
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
		<!--<li><a href="personal_info.php">Personal Details</a></li>
		<li><a href="addressrev.php">Contact Info</a></li>
		<li><a href="parameters.php">Physical Parameters</a></li>-->
	
                 
		
	</ul>
	</div>
<div>
<form action="parameters.php" method="post">	


	

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Patient Contact')" id="defaultOpen">Patient's Contact</button>
  <button class="tablinks" onclick="openCity(event, 'Emergency Contact')">Emergency Contact</button>

</div>

<div id="Patient Contact" class="tabcontent">
  <h3 style="color:#FDFAB2; " align="center"><strong>Patients Contact Details </strong> </h3>
<table class="one" id="rcorners2" style="color:#0B1D45" >
<tr>


<td>
<lable> Patient Name</lable>
<td>
<lable>
   <?php
      $pname=$pname1.$plast_name1;
     echo "$pname";
    ?>
	</lable>
</td>
</td>

<td>
   
      
</td>
</tr>
<tr>
   <td>
    <lable>Patient's Mobile Number  <span class="form-required"> * </span></lable>
   </td> 
    <td>
        <input id="mobileno" name="p_phone" onblur="Checkmobileno();" placeholder="Enter Patient's phoneNo" required  type="tel" minlength="10" maxlength="10" >
    </td>
   
</tr>

<tr>
<td></td>
<td><span  style="color:red" id="errormobileno"></span></td>
</tr>

<tr>
<td>
<lable>Email Address:  <span class="form-required"> * </span></lable>
</td>

<td>
    <input  id="email_id" type="email" onblur="Checkemail();" name="p_email" placeholder="Enter Patient's Email" required pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*$"  >
   </td>

</tr>
<tr>
<td></td>
<td><span style="color:red" id="erroremail"></span></td>
</tr>
</table>

<br>

<table class="two" id="rcorners2" style="color:#0B1D45">
 <tr>
<td></td>
</tr>
<tr>

      <td>
    <lable>Patient's  Permanent address:  <span class="form-required"> * </span></lable>
    </td>
   <td>
    
       <input type="text" id="street1padd" onblur="Checkstreet1padd();" name="Patient_addressstreet" placeholder="Street Address" required maxlength="20" title="maximum length 10" >
   </td>
   
  
   <td width="25%" margin-right="10px"> 
          <input type="text" id="street2padd" onblur="Checkstreet2padd();" name="Patient_addressstreetline" placeholder="Street Line 2" required  maxlength="20" >
   </td>
</tr>
<tr>
<td></td>
<td><span style="color:red" id="errorstreet1padd"></span></td>
<td><span style="color:red" id="errorstreet2padd"></span></td>
</tr>
<tr>
    <td></td>
   <td width="25%"> 
          <select id="country" name ="country"></select>
    </td>
    <td>			
           <select name ="state" id ="state" ></select>

			 
                        <script language="javascript">
				populateCountries("country", "state");
				
			</script>
   </td>
<td></td>
   </tr>
<tr>
     <td>
     </td>
	 <td><input type="text" name="code" id="code" placeholder="Postal/ZipCode" required  maxlength="6" minlength="6">
	 
   <td> <input type="text" name="city" id="city"  placeholder="City" required  maxlength="maximum length of 40 ">   </td>
  
   <td></td>
   <td></td>
   
   
</tr>
</table>

<table class="three" id="rcorners2" style="color:#0B1D45">
<tr>
      <td>
    <lable>Patient's  Temporary address:  <span class="form-required"> * </span></lable>
    </td>
   <td>
    
       <input type="text" id="street1tadd" onblur="Checkstreet1tadd();" name="Patient_Taddressstreet" placeholder="Street Address" required maxlength="20" title="maximum length 10" >
   </td>
   
  
   <td width="25%" margin-right="10px"> 
          <input type="text" id="street2tadd"onblur="Checkstreet2tadd();" name="Patient_Taddressstreetline" placeholder="Street Line 2" required  maxlength="20 ">
   </td>
</tr>
<tr>
<td></td>
<td><span style="color:red" id="errorstreet1tadd"></span></td>
<td><span style="color:red" id="errorstreet2tadd"></span></td>
</tr>
<tr>
    <td></td>
   <td width="25%"> 
          <select id="country2" name ="country2"></select>
    </td>
    <td>			
           <select name ="state2" id ="state2" ></select>

			 
                        <script language="javascript">
				populateCountries("country2", "state2");
				
			</script>
   </td>
 <td></td>
   </tr>
<tr>
     <td>
     </td>
	  <td><input type="text" name="code1" id="code1" placeholder="Postal/ZipCode" required  maxlength="6" minlength="6">
	 
   <td> <input type="text" name="city1" id="city1"  placeholder="City" required  maxlength="maximum length of 40 ">   </td>
  
   <td></td>
   <td></td>
  
   
</tr>
</table>
</div>

<div id="Emergency Contact" class="tabcontent">
<h3 style="color:#FFDAEF " align="center">Emergency Details</h3>
<br>

<table class="four" id="rcorners2" style="color:#063810" align="center">
<tr>
   <td>
    <lable>Emergency Mobile Number  </lable>
    </td>

    <td>
        <input  name="E_phone" placeholder="Enter alternative phoneNo"   type="tel" minlength="10" maxlength="10" >
   </td>
  
<td>
  
</td>
   <td>
     

   </td>
<td></td>
</tr>
<tr>
<td><lable> Emergency Email Address:  </lable></td>
<td> 
<input type="email" name="E_email" placeholder="Enter alternative Email"  pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*$"  >
</td>
<td>
       
   </td>

<td>
      
   </td>
<td></td>
</tr>


<tr>
      <td>
    <lable>Alternative  address:  </lable>
    </td>
   <td>
       <input type="text" name="APatient_addressstreet" placeholder="Street Address" required maxlength="10" title="maximum length 10" >
   </td>
   
  
   <td> 
          <input type="text" name="APatient_addressstreetline" placeholder="Street Line 2" required  maxlength="maximum length of 30 ">
   </td>

  <td> </td>
  <td></td>
   
</tr>

<tr>
    <td>
   </td>
   <td width="25%"> 
          <select id="country3" name ="country3"></select>
    </td>
    <td>			
           <select name ="state3" id ="state3" ></select>

			 
                        <script language="javascript">
				populateCountries("country3", "state3");
				
			</script>
   </td>

   
   
   
</tr>
<tr>
     <td>
     </td>
	   <td><input type="text" name="code2" id="code2" placeholder="Postal/ZipCode" required  maxlength="6" minlength="6">
	 
   <td> <input type="text" name="city2" id="city2"  placeholder="City" required  maxlength="maximum length of 40 ">   </td>
  
   
   
</tr>

</table>
<a href="http://localhost/final_project/parameters.php">
<input type="submit" name="submit" align="left" value="Save" ></a>
</div>
<br>


</form>
</div>

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



