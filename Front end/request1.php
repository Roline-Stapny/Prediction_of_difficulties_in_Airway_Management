<?php
//if(isset($_POST['submit'])){
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

$q=$_POST["code"];
$query1  = "SELECT * FROM `harshit` WHERE `pin` LIKE '$q'";
$result = mysql_query($query1) or die(mysql_error());
while ($row = mysql_fetch_array($result))
{
	 echo $city=$row['postoffice'];
 
}


if(!mysql_query($query1)){

	die('query not executed'.mysql_error());
}




/*$q=$_POST["code"];
$sql  = "SELECT * FROM `harshit` WHERE pincode = '$q'";
$result= mysqli_query($con,$sql) or die(mysqli_error());
while($row =mysqli_fetch_array($result))
{
	echo $city=$row['postoffice'];
}*/

 ?>