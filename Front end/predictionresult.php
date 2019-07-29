<html>
<head>
<style>
<link rel="stylesheet" href="{{ url_for('static', filename='style (1).css') }}">
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
    margin-left:auto; 
    margin-right:auto;
	 background-image: linear-gradient(270deg,#FEFFDBD6 ,rgb(255, 179, 0));
  /* background:#FEFFDBD6 ;rgb(238,241,251,0.6)*/
/*margin-left:10px*/;
  width:90%;
height:35%;
 
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
	
	
	</header>
  
	</div>
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

<div >
<table class="one" id="rcorners2" style="color:#0B1D45" align="center" >
	
<tr>
<td></td>
<td></td>
<td><h1 style=" color: green">Prediction Result </h1></td>
<td></td>
</tr>
<!---<tr>
<td><h1>Inputs</h1></td>
<td><h1>Prediction</h1></td>
<td><h1>Explanation</h1></td>
</	tr> --->
<tr>
<td></td>
<td><h2 style=" color:blue">{{b}}</h2>
</td>
<td></td>
<td><h2 style=" color:blue">{{d}}</h2></td>
</tr>
<tr>
<td></td>
<td><h2 style=" color:blue">{{a}}</h2>
</td>
<td>
<td><h2 style=" color:blue">{{c}}</h2></td>
</td>
</tr>
</table>
</div>
</body>
</html>
	