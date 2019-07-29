<html>
<head>
<style>
<link rel="stylesheet" href="{{ url_for('static', filename='style (1).css') }}">
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
 
   input[type=submit] {
    width:auto;
   /* background-color: #4CAF50;*/
    background: radial-gradient(at top left, #689F38, green);
      font-family: Arial, Helvetica, sans-serif;
    color: white;
    padding: 14px 14px;
    border: none;
	width:100px;
	
    border-radius: 4px;
    cursor: pointer;
}
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

        .tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #FFD700;
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
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    /*border: 1px solid #ccc;*/
    border-top: none;
}
 table.one{
  border-collapse:collapse;
   border-radius:10px;
   text-align:center;
 margin-top:none;   
    margin-left:auto; 
    margin-right:auto;
	 /*background-image: linear-gradient(270deg,#FFFFFF,#C0C0C0);*/
   background:#FFFFFF ;/*rgb(238,241,251,0.6)*/
/*margin-left:10px*/;
  width:90%;
height:25%;
 
}	

table.two{
  border-collapse:collapse;
   border-radius:10px;
   text-align:center; 
    margin-left:auto; 
    margin-right:auto;
	 background-image: linear-gradient(270deg,#FEFFDBD6 ,rgb(255, 179, 0));
  /* background:#FEFFDBD6 ;rgb(238,241,251,0.6)*/
/*margin-left:10px*/;
    width:50%;
	height:50%;
 
}	
td{
	padding:5px;
}		

</style>

 
</head>
<body  style="background-color:#FFD700;background-image:url('static/images/banner9.jpg');margin-top:0px;margin-left:0px;margin-right:0px" id="menu_1" >

<header>
	<div style="background-color:rgb(255, 179, 0);color:black;margin-top:0px">
	   <!--  <h1><a><img  src="images/logo-nitte.jpg" width="30%" style="padding-bottom: 1px;" alt="Nitte"></a></h1>
-->
	<h1 style="font-family:sans-serif;color:#030606;font-size:45px;text-align:left;background-color:rgb(255, 179, 0);margin-bottom:0px" >
	
	<img class="img-responsive sp-default-logo" src="static/images/logo-nitte.jpg" width="31%" style="padding:2px;padding-top:5px;margin-left:50px" alt="Nitte"> </h1>
	<ul id="menu">
                
		<li><a href="http://localhost:8080/Final%20year/home.php"><b>Home<b></a></li>
		<!--<li><a href="personel_info.php">Personal Details</a></li>
		<li><a href="addressrev.php">Contact Info</a></li>
		<li><a href="parameters.php">Physical Parameters</a></li>-->
		
                 
		
	</ul>
	
	</header>
  
	</div>
	
	
	




<h4 style="font-family:sans-serif;color:black;font-size:30px;text-align:center;">Prediction Result 


<script type="text/javascript">
    function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        //Set the print button to 'visible' again 
        //[Delete this line if you want it to stay hidden after printing]
        printButton.style.visibility = 'visible';
    }
</script>

</h4>


<table class="one" id="rcorners2" style="color:#0B1D45" align="center" >


    
<tr style="border-bottom: 1px solid #000;color:black">
    <td>age/sex</td>
	<td><h3>{{age}}/{{sex}}</td>
    <!--<td>Doctor adviced</td>
    <td></td>-->
	
	<td></td>
	<td></td>
    </tr>


<tr>
<td><h2 style="color:blue">Intubation</h2></td>
<td></td>
<td></td>
<td><h2 style=" color:blue">{{a}}</h2></td>
</tr>
<tr>
<td><h3>Parameters</h3></td>
<td><h3>Obtained values</h3></td>
<td><h3>Normal range</h3></td>
<td><h3>Units</h3></td>
<!--<td><h2 style=" color:blue">{{d}}</h2></td> -->
</tr>
<tr>
<td>BMI</td>
<td>{{bmi}}</td>
<td> 19-26 </td>
<td>kg/cm</td>
</tr>
<tr>
<td>Mallampati score</td>
<td>{{ms}}</td>
<td> 1-2 </td>
<td> -</td>
</tr>
<tr>
<td>Interncisor Gap</td>
<td>{{ig}}</td>
<td> >3 </td>
<td>cm</td>
</tr>
<tr>
<td>Thyromental Distance</td>
<td>{{td}}</td>
<td> 6.5-9 </td>
<td>cm</td>
</tr>
<tr>
<td>Head and neck Distance</td>
<td>{{hnd}}</td>
<td> >80 </td>
<td>°</td>
</tr>
<tr>
<td>Pregnant</td>
<td>{{p}}</td>
<td> - </td>
<td>- </td>
</tr>
<tr>
<td>Buck teeth</td>
<td>{{bt}}</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<td>Neck thick</td>
<td>{{nt}}</td>
<td> No </td>
<td>-</td>
</tr>
<tr>
<td>Mouth opening</td>
<td>{{mo}}</td>
<td> Present </td>
<td>-</td>
</tr>
<tr>
<td>Strider History</td>
<td>{{sh}}</td>
<td>Absent</td>
<td>-</td>
</tr>
<tr>
<td>Facial asymmetry </td>
<td>{{fa}}</td>
<td> No </td>
<td>-</td>
</tr>
<tr>
<td>Small mandible </td>
<td>{{sm}}</td>
<td> No </td>
<td>-</td>
</tr>
<tr style="border-bottom: 1px solid #000;color:black">
<td>ULBT</td>
<td>{{ub}}</td>
<td>1 </td>
<td>-</td>
<td></td>
</tr>
<tr>
<td><h2 style="color:blue">Mask Ventilation</h2></td>
<td></td>
<td></td>
<td><h2 style=" color:blue">{{b}}</h2></td>
</tr>
<tr>
<td>Beard </td>
<td>{{be}}</td>
<td> No</td>
<td>-</td>
</tr>
<tr>
<td>Neck Radiation </td>
<td>{{nrl}}</td>
<td> Absent </td>
<td>-</td>
</tr>
<tr>
<td>Teeth </td>
<td>{{t}}</td>
<td> yes </td>
<td>-</td>
</tr>
<tr>
<td>Neck circumference</td>
<td>{{nc}}</td>
<td> <40</td>
<td>cm</td>
</tr>
<tr>
<td>Stiff lungs </td>
<td>{{sl}}</td>
<td> Absent</td>
<td>-</td>
</tr>
<tr>
<td>History of snoring </td>
<td>{{hs}}</td>
<td> Absent </td>
<td>-</td>
</tr>
<tr>
<td>Macroglossia </td>
<td>{{mg}}</td>
<td> Absent</td>
<td>-</td>
</tr>
<tr>
<td>BMI</td>
<td>{{bmi}}</td>
<td> 19-26 </td>
<td>kg/cm</td>
</tr>
<tr>
<td>ULBT</td>
<td>{{ub}}</td>
<td>1 </td>
<td>-</td>
<td></td>
</tr>
<tr>
<td>Mallampati score</td>
<td>{{ms}}</td>
<td> 1-2 </td>
<td> -</td>
</tr>

<!--<tr>
<td></td>

<td><h2 style=" color:blue">{{c}}</h2></td>

</tr>-->

</table>
<br>
<br>
<center><input id="printpagebutton" type="submit" value="Print" onclick="printpage() "/></center>
<br>
<br>


</body>
</html>
	