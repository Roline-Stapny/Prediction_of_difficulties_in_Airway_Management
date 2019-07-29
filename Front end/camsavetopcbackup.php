<html>
<?php

session_start();  
define('DB_name','Imagesave');
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


//$image=$_POST['ima'];


?>






<table align="center" bgcolor="#EEF1FB"   box-shadow="10px 10px"  id="rcorners2">

<tr><td></td><td></td><td></td>
   <td>
    <video id="video" width="80" height="80" autoplay></video></td>
	<td><canvas id="canva" width="80" height="80"></canvas></td>
	</tr>
	<tr>
<td><button id="snap">Snap Photo</button></td></tr>
<tr>
<div><!--<button onclick="to_image()">Draw to Image</button></td>
<td><image  name="ima" id="theimage"></image></td>-->
<td><a href="#" download="image.png">download image></a></td>
</div>
</tr>


<script>
// Grab elements, create settings, etc.
var video = document.getElementById('video');
var canvas = document.getElementById('canva');
var context = canvas.getContext('2d');



// Trigger photo take
document.getElementById("snap").addEventListener("click", function() {
	context.drawImage(video, 0, 0, 80, 80);
	
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


/*function to_image(){
                var canvas = document.getElementById("canvas");
                document.getElementById("theimage").src = canvas.toDataURL();
				var imasrc=document.getElementById("theimage").src;
		        
				Canvas2Image.saveAsPNG(canvas);
     	 }*/
			
const anchor = document.querySelector('a');
const rand = i=>Math.random()*i<<0
const fileName = `image${100+rand(100)}.png`;
			
anchor.addEventListener('click', onClickAnchor);

function onClickAnchor(e) {
  if (window.navigator.msSaveBlob) {
  	window.navigator.msSaveBlob(canvas.msToBlob(), fileName);
    e.preventDefault();
  } else {
    anchor.setAttribute('download', fileName);
    anchor.setAttribute('href', canvas.toDataURL());
  }
}


</script>
</html>