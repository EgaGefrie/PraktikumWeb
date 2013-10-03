<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www/w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Studi Kasus 1</title>
</head>

<body>
<?php
function salam($time){
	if ($time >= 0 && $time <= 10 ){   
   		echo "Selamat Pagi";  //jam 1 - 10
  	}else if ($time > 10 && $time <= 15 ){   
   		echo "Selamat Siang"; //jam 11 - 15
 	}else if ($time > 15 && $time <= 18 ){   
   		echo "Selamat Sore"; //jam 16 - 18
 	}else if ($time > 18 && $time <= 24 ){   
   		echo "Selamat Malam"; // jam 19 - 24
 	}else {   
  		echo "";  
	}  
}

salam(12);
?>
</body>
</html>