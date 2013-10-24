
<!DOCTYPE HTML>
<html>
<head>
	<title>Set Cookie</title>
</head>
<body>
	<?php
		//Men-set nilai cooki
		setcookie('cookies','nilai cookie');
		
		//Mendapatkan nilai cookie
		echo $_COOKIE['cookies'];
	?>
	
	<p>
	Tekan Refresh (F5)
</body>
</html>