<html>
 <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<head>
<style>
	body
	{
		margin:0;
		 font-family: Arial, Helvetica, sans-serif;
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
           span{
color:red;
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
	footer
		{
		    text-align:center;
			background-color:black;
			color:#fff;
		
		} 

         table{
   border-collapse:collapse;
   background: rgb(238,241,251,0.6);

  

}

 lable{
      margin-left:100px;
  }

  td{
     font-family: Arial, Helvetica, sans-serif;
     color:#0B1D45;
     
     }
#rcorners2 {
    border-radius: 25px;
	width:1200px;
   
    
      
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
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
 input[type=number], select {
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

div {
     
    
}
table
{ background: rgb(238,241,251,0.6);

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
    border-top: none;
}
	
					

</style>

<script src="js/countries.js"></script>
<script src="js/department.js"></script>
<script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>


<script>
 
	  $(document).ready(function(){
		  $("#code4").keyup(function(){
			  var name=$("#code4").val();
			  
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
					  
					  $("#city4").val(html);
				  }
				  });
			  }
		  });
	  });
	  </script>
<script type="text/javascript">

function validateForm()
{

   var x = document.forms["myForm"]["doc_id"].value;
    if (x == "") {
        alert("Id must be filled out");
        return false;
    }
}
function Checkuname(){
	if(document.getElementById('Uname').value==''){
		document.getElementById('erroruname').innerHTML='enter User name';
		document.getElementById('Uname').focus();
		
	
	}
	else
	{
		document.getElementById('erroruname').innerHTML='';
	}
	return false;
	
}


function Checkdesignation(){
	if(document.getElementById('designation').value==''){
		document.getElementById('errordesignation').innerHTML='enter designation';
		document.getElementById('designation').focus();
		
	
	}
	else
	{
		document.getElementById('errordesignation').innerHTML='';
	}
	return false;
	
}
function Checkufname(){
	if(document.getElementById('Ufname').value==''){
		document.getElementById('errorufname').innerHTML='enter first name';
		document.getElementById('Ufname').focus();
		
	
	}
	else
	{
		document.getElementById('errorufname').innerHTML='';
	}
	return false;
	
}




function Checkumname(){
	if(document.getElementById('Umname').value==''){
		document.getElementById('errorumname').innerHTML='enter middle name';
		document.getElementById('Umname').focus();
		
	
	}
	else
	{
		document.getElementById('errorumname').innerHTML='';
	}
	return false;
	
}
function Checkulname(){
	if(document.getElementById('Ulname').value==''){
		document.getElementById('errorulname').innerHTML='enter last name';
		document.getElementById('Ulname').focus();
		
	
	}
	else
	{
		document.getElementById('errorulname').innerHTML='';
	}
	return false;
	
}
function Checkstreet1(){
	if(document.getElementById('street1').value==''){
		document.getElementById('errorstreet1').innerHTML='enter street1';
		document.getElementById('street1').focus();
		
	
	}
	else
	{
		document.getElementById('errorstreet1').innerHTML='';
	}
	return false;
}
function Checkstreet2(){
	if(document.getElementById('street2').value==''){
		document.getElementById('errorstreet2').innerHTML='enter street2';
		document.getElementById('street2').focus();
		
	
	}
	else
	{
		document.getElementById('errorstreet2').innerHTML='';
	}
	return false;
}
function Checkzipcode(){
	 var letters = /^[A-Za-z]+$/;
    if(document.getElementById('code4').value==''||document.getElementById('code4').value.match(letters)||document.getElementById('code4').value.length<6){
		document.getElementById('errorzipcode').innerHTML='Enter 6 digit pincode';
		document.getElementById('code4').focus();
	}
	else
	{
		document.getElementById('errorzipcode').innerHTML='';
	}
	return false;

}
function Checkphoneno(){
	 var letters = /^[A-Za-z]+$/;
    if(document.getElementById('user_phone').value==''||document.getElementById('user_phone').value.match(letters)||document.getElementById('user_phone').value.length<6){
		document.getElementById('erroruser_phone').innerHTML='Enter 10 digit phone number';
		document.getElementById('user_phone').focus();
	}
	else
	{
		document.getElementById('erroruser_phone').innerHTML='';
	}
	return false;

}
function Checkemail(){
    var x=document.getElementById('email').value;  
    var atposition=x.indexOf("@");  
    var dotposition=x.lastIndexOf(".");  
    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length||x==''){  
	 
		document.getElementById('erroremail').innerHTML='Enter valid email';
		document.getElementById('email').focus();
	}
	else
	{
		document.getElementById('erroremail').innerHTML='';
	}
	return false;
}
function Checkpassword(){
	
	var re= /^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{6,}$/;
	//if (document.getElementById('password').value==''||document.getElementById('password').value.match(re)||document.getElementById('password').value.length<6) {
		if (document.getElementById('password').value==''||document.getElementById('password').value.length<6) {
		
		document.getElementById('errorpassword').innerHTML='Password must be longer than six charaters';
		document.getElementById('password').focus();
	}
	else{
		document.getElementById('errorpassword').innerHTML='';
	}
		
}
function CheckCpassword(){
	if (document.getElementById('Cpassword').value!=document.getElementById('password').value) {
		document.getElementById('errorcpassword').innerHTML='Password does not match';
		document.getElementById('Cpassword').focus();
	}
	else{
		document.getElementById('errorcpassword').innerHTML='';
	}
	return false;
		
}

</script>
</head>
<body  style="background-image:url('images/banner9.jpg')" id="menu_1" >
<header>
	<div  style="background-color:#FFC039;color:black;margin-top:0px">
	   <!--  <h1><a><img  src="images/logo-nitte.jpg" width="30%" style="padding-bottom: 1px;" alt="Nitte"></a></h1>
-->
	<h1 style="font-family:sans-serif;color:#030606;font-size:45px;text-align:left;margin-bottom:0px" >
	
	<img class="img-responsive sp-default-logo" src="images/logo-nitte.jpg" width="31%" style="padding:2px;padding-top:5px;margin-left:50px" alt="Nitte"> </h1>
	
	<ul id="menu" style="align :center">
                
		<li><a href="home.php"><b>Home<b></a></li>
                 
		
	</ul>
	</header>
    
	</div>
<div>

<form action="userdata.php" name="myForm" enctype="multipart/form-data" method="post" >	

<div >

<table align="center" bgcolor="#2E2E2E"   box-shadow="10px 10px"  id="rcorners2" >
<br>
<div style=" font-size:30px;color:white;text-align:center">Personal Information</div>
<tr> 
<td width="300px">

</td>


<td width="300px">
</td>
<td width="300px">
</td>



</tr>
<tr>
<td width="300px"></td>
<td width="300px"> 

</td>
<td width="300px">
       
   </td>

<td width="300px"> <video id="video" width="80" height="80" autoplay></video>
<button id="snap">Snap Photo</button>
<canvas id="canvas" width="80" height="80"></canvas>
</td>

<script>
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


// Get access to the camera!
if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    // Not adding `{ audio: true }` since we only want video now
    navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
        //video.src = window.URL.createObjectURL(stream);
        video.srcObject = stream;
        video.play();
		
    });
}
</script>

       
   </td>

</tr>
<tr>
<td><input type="hidden" id="sour" name="source"></input></td>
</tr>
<tr> 
<td width="300px"><lable>User Name:<span class="form-required"> * </span></lable>

</td>


<td width="300px">
<input type="text" name="Uname" id="Uname" placeholder="UserName " required pattern="[a-zA-Z ]{2,30}" title="alphabets and length minimum of 2 letters" onblur=" Checkuname();"><span  style="color:red" id="erroruname"></span></td>

<td width="300px">
	  
<td width="300px">

	   
</td>


</tr>
<tr> 
<td width="300px"><lable>User Full Name:<span class="form-required"> * </span></lable>

</td>


<td width="300px"><input type="text" name="user_name" id="Ufname" placeholder="First Name " required pattern="[a-zA-Z ]{2,30}" title="alphabets and length minimum of 2 letters" onblur=" Checkufname();"><span  style="color:red" id="errorufname"></span></td>

<td width="300px"><input type="text" name="user_mname" id="Umname" placeholder="middle name " required pattern="[a-zA-Z ]{1,30}" title="alphabets and length minimum of 2 letters" onblur="Checkumname();">
	   <span  style="color:red" id="errorumname"></span></td>
<td width="300px">
<input type="text" name="user_lname"id="Ulname" placeholder="Last Name" required pattern="[a-zA-Z ]{1,30}" title="alphabets and length minimum of 2 letters" onblur="Checkulname();">
	   <span  style="color:red" id="errorulname"></span>
</td>


</tr>

<tr>
 <td style="margin-left:0px ;text-align:left width:300px">
       <lable>Department:<span class="form-required"> * </span> </lable>
 </td>
<td width="300px">
  <select id="department" name ="department"></select>
			<br />
     
       <script language="javascript">
				
				populateDep("department");
			</script>
</td>
 
    <td width="300px">

</td>


<td width="300px"></td>
 
</tr>
<tr>
<td><lable name="designation" >Designation: <span class="form-required"> * </span></lable>

</td>
   <td>
      <input  name="designation" id="designation" placeholder="Designation" required  type="text"onblur=" Checkdesignation();" ><span  style="color:red" id="errordesignation"></span>
   </td>
<td></td>
<td></td>

  
</tr>
      
<tr>
<td width="300px"></td>
<td width="300px"> 

</td>
<td width="300px">
       
   </td>

<td width="300px">
       
   </td>

</tr>


<tr>
      <td width="300px">
    <lable>User Address: <span class="form-required"> * </span> </lable>
    </td>
   <td width="300px">
       <input type="text" name="user_addressstreet" id="street1" placeholder="Street Line 1" required maxlength="10" title="maximum length 100"  onblur="Checkstreet1();">
	   <span  style="color:red" id="errorstreet1"></span>
   </td>
   
  
   <td width="300px"> 
          <input type="text" name="user_addressstreetline" id="street2" placeholder="Street Line 2" required  maxlength="maximum length of 30 " onblur="Checkstreet2();">
		  <span  style="color:red" id="errorstreet2"></span>
   </td>

  <td width="300px"> </td>
  
   
</tr>

<tr>
    <td width="300px">
   </td>
   <td width="25%"> 
          <select id="country" name ="country"></select>
    </td>
    <td width="300px">			
           <select name ="state" id ="state" ></select>

			 
                        <script language="javascript">
				populateCountries("country", "state");
				
			</script>
   </td>

   
   <td width="300px">
   
        

  </td>
   
</tr>
<tr> <td width="300px"></td>
     <td width="300px"><input type="text" name="code4" id="code4" placeholder="Postal/ZipCode" required  maxlength="6" minlength="6" onblur="Checkzipcode();"><span  style="color:red" id="errorzipcode"></span></td>
	 
   <td width="300px"> <input type="text" name="city4" id="city4"  placeholder="City" required  maxlength="maximum length of 40 ">   </td>
  
  
   <td width="300px"></td>
   
</tr>


<tr>
<td width="300px">
<lable>User Email  & PhoneNo: <span class="form-required"> * </span></lable>
</td>

<td width="300px">
    <input  name="user_phone" id="user_phone" placeholder="Enter the PhoneNo" required  type="number" maxlength="10" minlength="10" onblur="Checkphoneno();"><span  style="color:red" id="erroruser_phone"></span>
</td>
   <td width="300px">
       <input type="email" name="user_email" id="email" placeholder="Enter the Email" required onblur="Checkemail();" /><span  style="color:red" id="erroremail"></span>
   </td>

<td width="300px"> </td>



  
</tr>   


<tr>
<td>
<lable>Create password: <span class="form-required"> * </span></lable>
</td>
   <td>
       <input  name="password" id="password" placeholder="Password" required  type="text" maxlength="30"  onblur="Checkpassword();"><span  style="color:red" id="errorpassword"></span>
   </td>
<td></td>
<td></td>

  
</tr>
         
<tr>
 
<td><lable>Confirm password: <span class="form-required"> * </span></lable>
</td>
<td> <input type="text" name="Cpassword" id="Cpassword" placeholder="Confirm Password" maxlength="30" required onblur="CheckCpassword();" /><span  style="color:red" id="errorcpassword"></span>
</td>
<td></td>
<td>
</td>

</table>

</div>

         
<tr>
 
<td>
</td>
<td>
</td>
<td></td>
<td><center><input type="submit" name="submit1" value="submit" style="width:200px; height:50px; background: radial-gradient(at top left, #689F38, green); border:0px;color:white; border-radius:4px" /> 
						
</td>
<td></td>
</tr> 
</table>
</div>

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

