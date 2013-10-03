<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www/w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Tugas 2</title>
</head>

<body>
<?php
function tabel($sel,$kolom){
				echo "<table width=400 border=1>";
				$cel = 1;
				while ($cel <= $sel){
					echo "<tr>";
					$cl = 0;
					while ($cl < $kolom){
						if ($cel <= $sel){
							echo "<td><div align=center>".$cel."</div></td>";
							$cel++;
						}
						$cl++;
					}
					echo "</tr>";
				}
				echo "</table>";
}
tabel(8,3)
?>
</body>
</html>