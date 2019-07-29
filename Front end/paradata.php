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
else{
	echo"connected";
}
$wardno=$_POST['wardno'];
$Patient_id=$_SESSION['Patient_id'];
$Date_of_admission=$_POST['dateofa'];
$doa = date("Y-m-d", strtotime($Date_of_admission));
	   
$BMI=$_POST['BMI'];
$Age=$_SESSION['dob'];
$Gender=$_SESSION['gender'];
$Beard=$_POST['beard'];
$Mallampati=$_POST['Mallam'];
$ULBT=$_POST['ulbt'];
$Neck_circumference=$_POST['NeckC'];
$Neck_radiation=$_POST['NeckR'];

$Teeth=$_POST['teeth'];

$History_of_snoring=$_POST['snore'];
$Macroglossia=$_POST['Macroglossia'];
$Stiff_lungs=$_POST['StiffLungs'];


$Interincisor_gap=$_POST['interincisor'];
$Head_and_neck_movement=$_POST['headneck'];
$Buck_teeth=$_POST['dentalcondition'];
$Neck_thick=$_POST['neckthick'];
$Absence_of_mouth_opening=$_POST['absenceofmouthopening'];
$Strider_history=$_POST['striderhistory'];
$Thyromental_distance=$_POST['thyromental'];






$sql  = "INSERT INTO `patient_parameters` (`Patient_id`, `Date_of_admission`, `Age`, `Gender`, `Beard`, `Mallampati`, `ULBT`,`BMI` ,`Neck_circumference`, `Neck_radiation`, `Stiff_lungs`, `History_of_snoring`, `Teeth`, `Macroglossia`, `Interincisor_gap`, `Head_and_neck_movement`, `Strider_history`, `Buck_teeth`, `Neck_thick`, `Absence_of_mouth_opening`, `Thyromental_distance`) VALUES ('$Patient_id', '$doa', '$Age', '$Gender', '$Beard', '$Mallampati', '$ULBT','$BMI', '$Neck_circumference', '$Neck_radiation', '$Stiff_lungs', '$History_of_snoring', '$Teeth', '$Macroglossia', '$Interincisor_gap', '$Head_and_neck_movement', '$Strider_history', '$Buck_teeth', '$Neck_thick', '$Absence_of_mouth_opening', '$Thyromental_distance')";

if(mysql_query($sql,$link))
	{
		
		echo "DATA INSERTED SUCCESSFULLY.... PLEASE WAIT UNTILL REDIRECTED";
		echo "<script>setTimeout(\"location.href = 'personal_info.php';\",3500);</script>";
	}else{
		echo "Error";
	}
?>