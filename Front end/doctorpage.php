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
      padding-left:100px;
  }

  td{
     font-family: Arial, Helvetica, sans-serif;
     color:#0B1D45;
     
     }
#rcorners2 {
    border-radius: 25px;
   
    
      
}
input{
	width:300px;
}
select{
	width:300px;
}

 input[type=text], select {
    
    padding: 12px 20px;
   
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

 input[type=email], select {
    
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
 input[type=number], select {
    
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=float], select {
    
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    
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
td{
	
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

function Checkdid(){
	if(document.getElementById('docId').value==''){
		document.getElementById('errordocId').innerHTML='enter doctor Id';
		document.getElementById('docId').focus();
		
	
	}
	else
	{
		document.getElementById('errordocId').innerHTML='';
	}
	return false;
	
}
function Checkdfname(){
	if(document.getElementById('dfname').value==''){
		document.getElementById('errordfname').innerHTML='enter first name';
		document.getElementById('dfname').focus();
		
	
	}
	else
	{
		document.getElementById('errordfname').innerHTML='';
	}
	return false;
	
}




function Checkdmname(){
	if(document.getElementById('dmname').value==''){
		document.getElementById('errordmname').innerHTML='enter middle name';
		document.getElementById('dmname').focus();
		
	
	}
	else
	{
		document.getElementById('errordmname').innerHTML='';
	}
	return false;
	
}
function Checkdlname(){
	if(document.getElementById('dlname').value==''){
		document.getElementById('errordlname').innerHTML='enter last name';
		document.getElementById('dlname').focus();
		
	
	}
	else
	{
		document.getElementById('errordlname').innerHTML='';
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
    if(document.getElementById('code').value==''||document.getElementById('code').value.match(letters)||document.getElementById('code').value.length<6){
		document.getElementById('errorzipcode').innerHTML='Enter pincode in number format of 6 digits';
		document.getElementById('code').focus();
	}
	else
	{
		document.getElementById('errorzipcode').innerHTML='';
	}
	return false;

}
function Checkphoneno(){
	 var letters = /^[A-Za-z]+$/;
    if(document.getElementById('doc_phone').value==''||document.getElementById('doc_phone').value.match(letters)||document.getElementById('doc_phone').value.length!=10){
		document.getElementById('errordoc_phone').innerHTML='Enter 10 digit phone number';
		document.getElementById('doc_phone').focus();
	}
	else
	{
		document.getElementById('errordoc_phone').innerHTML='';
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
function Checkspecialization(){
	if(document.getElementById('specialization').value==''){
		document.getElementById('errorspec').innerHTML='enter specialization';
		document.getElementById('specialization').focus();
	}
	else
	{
		document.getElementById('errorspec').innerHTML='';
	}
	return false;
}
function Checkdoc_yearEx(){
	 var letters = /^[A-Za-z]+$/;
    if(document.getElementById('yearEx').value==''||document.getElementById('yearEx').value>80){
		document.getElementById('erroryearEx').innerHTML='Enter Year of Exerience';
		document.getElementById('yearEx').focus();
	}
	else
	{
		document.getElementById('erroryearEx').innerHTML='';
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
	
	
	</header>
     
	<ul id="menu" style="align :center">
                
		<li><a href="home.php"><b>Home<b></a></li>
                 
		
	</ul>
	</div>
<div>
<form action="docdata.php" name="myForm" enctype="multipart/form-data" method="post" >	
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Doctor Contact')" id="defaultOpen" text-align="center">Doctor's Information</button>
  <button class="tablinks" onclick="openCity(event, 'DoctorCon Contact')">Doctor's Specialization</button>

</div>
<center><label style="font-size:30px ; margin-left:40px; text-align:center; padding:50px">Doctors Information</label></center>
<div id="Doctor Contact" class="tabcontent">

<table align="center" bgcolor="#2E2E2E"   box-shadow="10px 10px"  id="rcorners2" >



<tr>
<td></td>
<td></td> 
<td></td><td>
    <video id="video" width="100" height="100" autoplay></video>

<canvas id="canvas"></canvas>
</td></tr>
<tr><td></td><td></td><td></td><td><button id="snap">Snap Photo</button></td></tr>
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
	context.drawImage(video, 0, 60, 100, 80);
	var imasrc=canvas.toDataURL();
    document.getElementById("sour").value = imasrc;
	
});




</script>

<tr>
<td>
<lable name="docID" >Doctor Id: <span class="form-required"> * </span></lable>
</td>


<td><input  name="docId" id="docId" placeholder="Enter Doctor's Id number" required  type="text"onblur=" Checkdid();" ></td>



</tr>
<tr>
<td>
</td>

<td>
<span  style="color:red" id="errordocId"></span>
</td>

</tr>
<tr>
 <td style="margin-left:0px ;text-align:left">
       <lable>Department:<span class="form-required"> * </span> </lable>
 </td>
<td>
  <select id="department" name ="department"></select>
			<br />
     
       <script language="javascript">
				
				populateDep("department");
			</script>
</td>
   <td>
       
<span  style="color:red" id="errordepartment"></span>
   </td>
    
</tr>
<tr>
<td><lable>Doctors Name:<span class="form-required"> * </span></lable></td>
<td> 
<input type="text" name="doctors_name" id="dfname" placeholder="Enter First Name " required pattern="[a-zA-Z ]{2,30}" title="alphabets and length minimum of 2 letters" onblur="Checkdfname();">

</td>
<td>
       <input type="text" name="doctors_mname" id="dmname" placeholder="middle name " required pattern="[a-zA-Z ]{1,30}" title="alphabets and length minimum of 2 letters" onblur="Checkdmname();">
	   
   </td>

<td>
       <input type="text" name="doctors_lname"id="dlname" placeholder="Last Name" required pattern="[a-zA-Z ]{1,30}" title="alphabets and length minimum of 2 letters" onblur="Checkdlname();">
	   
   </td>
<td></td>
</tr>

<tr>
<td>
</td>
<td>
<span  style="color:red" id="errordfname"></span>
</td>
<td>
<span  style="color:red" id="errordmname"></span>
</td>
<td>
<span  style="color:red" id="errordlname"></span>
</td>


</tr>

<tr>
      <td>
    <lable>Doctor Address: <span class="form-required"> * </span> </lable>
    </td>
   <td>
       <input type="text" name="doc_addressstreet" id="street1" placeholder="Street Address" required maxlength="10" title="maximum length 10"  onblur="Checkstreet1();">
	   
   </td>
   
  
   <td> 
          <input type="text" name="doc_addressstreetline" id="street2" placeholder="Street Line 2" required  maxlength="maximum length of 30 " onblur="Checkstreet2();">
		  
   </td>

  <td> </td>
  <td></td>
   
</tr>

<tr>
<td>

</td>
<td>
<span  style="color:red" id="errorstreet1"></span>
</td>
<td>
<span  style="color:red" id="errorstreet2"></span>
</td>
</tr>






<tr>
    <td>
   </td>
   <td > 
          <select id="country" name ="country"></select>
    </td>
    <td>			
           <select name ="state" id ="state" ></select>

			 
                        <script language="javascript">
				populateCountries("country", "state");
				
			</script>
   </td>

   
   <td>
   
        

  <td></td>
   
</tr>
<tr>
     <td>
     </td> <td><input type="text" name="code" id="code" placeholder="Postal/ZipCode" required  maxlength="6" minlength="6" onblur="Checkzipcode();">
	 
	 
   <td> <input type="text" name="city" id="city"  placeholder="City" required  maxlength="maximum length of 40 ">   </td>
  
   <td></td>
   <td></td>
   
</tr>

<tr>
<td>

</td>

<td> <span  style="color:red" id="errorzipcode"></span>
</td>

<td>
</td>

</tr>





<tr>
<td>
<lable>Doctor phone & Email <span class="form-required"> * </span></lable>
</td>

<td>
    <input  name="doc_phone" id="doc_phone" placeholder="Enter Doctor's phoneNo" required  type="number" onblur="Checkphoneno();">
	
</td>
   <td>
       <input type="email" name="doc_email" id="email" placeholder="Enter Doctor's Email" required onblur="Checkemail();" />
	  
   </td>

<td> </td>
<td></td>


  
</tr>   
<tr>
<td>

</td>
<td>
<span  style="color:red" id="errordoc_phone"></span>
</td>
<td>
 <span  style="color:red" id="erroremail"></span>
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
         
<tr>
 
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

</div>

<div id="DoctorCon Contact" class="tabcontent">

<table align="center" bgcolor="#2E2E2E"   box-shadow="10px 10px"  id="rcorners2" >
<tr> 
<td>

</td>

<td>

 <lable style="font-size:30px ;margin-left:40px">Doctors Information</lable>


</td>
<td></td>
<td></td>
<td> <div class="pic-container pic-medium pic-circle">
      <img class="pic" src="images/People-Doctor-Male.jpg" alt="">
          <div class="pic-overlay">
      <a><i class="fa fa-window-close-o" aria-hidden="true"></i></a>
      <a><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
          </div>
      </div></td>

</tr>

<tr>
   <td>
    <lable>Specialization: </lable>
    </td>

   <td>
<?php
$sql="SELECT * FROM doctor";
$result=mysql_query($sql);
    echo '<input id="docname" type="text" name="doc_spec" list="spec" required > <datalist id="spec">';
    while($rows=mysql_fetch_array($result)){
    ?>
    <option value="<?php echo $rows['Specialization']; ?>">
    <?php
    }
    ?>
    </datalist>
</td>
  
</tr>
<tr>
<td><lable> Year of experience:</td> 
<td>
 <input type="number" name="doc_yearEx"  id="yearEx" placeholder="Enter Doctor's Experience" onblur="Checkdoc_yearEx();" required><span  style="color:red" id="erroryearEx"></span>
</td>
   <td>
      

   </td>
<td></td>
</tr>
</tr>
         
<tr>
 
<td>
</td>
<td>
</td>
<td></td>
<td><center><input type="submit" name="submit1" value="submit" style="width:200px; height:50px; background: radial-gradient(at top left, #689F38, green); border:0px;color:white; border-radius:4px" /> 
						
</td>
<td><input type="hidden" id="sour" name="source"></input></td>
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

