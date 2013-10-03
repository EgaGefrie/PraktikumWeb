<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www/w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Studi Kasus 2</title>
</head>

<body>
<?php
//Fungsi perulangan matriks
function matriks($baris,$kolom){
		echo "<table border='1'>";//membuat tabel 
		for($i=1;$i<=$baris;$i++){
			echo "<tr>";//membuat baris baru
		for($j=1;$j<=$kolom;$j++){
            echo "<td>($i,$j)</td>"; //isi dari kolom
        }
			echo "</tr>";
		}
		echo "</table>";
}
matriks(3,4); //membuat 3 baris dan 4 kolom
?>

</body>
</html>