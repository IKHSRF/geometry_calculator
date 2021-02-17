<html>
<head>
    <title></title>
</head>
<body>
    <h2>Mencari Luas dan Volume Tabung</h2>
<form action="" method="post">
	<table>
		<tr>
	        <td>jari-jari</td>
	        <td>=</td>
	        <td><input type="text" name="jari2" /><br/></td>
	    </tr>
	    <tr>
	        <td>tinggi</td>
	        <td>=</td>
	        <td><input type="text" name="tinggi"/><br/></td>
	    </tr>
    </table>
	<input type="submit" name="submit" value="Hitung">
</form>
 
<?php
	if(isset($_POST['submit'])){
		$jari = $_POST['jari2'];
		$tinggi = $_POST['tinggi'];
		$phi = 22/7;
		
		$ltabung = 2 * $phi * $jari *($jari + $tinggi);
		echo "Penyelesaian Mencari Luas Tabung: <br/>";
		echo "L = 2 x 22/7 x r x (r + t) <br> ";
		echo "L = 2 * $phi * $jari *($jari + $tinggi) <br>";
		echo "L = $ltabung <br>";

		echo "-------------------------------------</br>"; 

		$vtabung = $phi * $jari * $jari * $tinggi;
		echo "Penyelesaian Mencari Volume Tabung: <br/>";
		echo "V = 22/7 x r x r x t <br> ";
		echo "V = $phi x $jari x $jari x $tinggi <br>";
		echo "V = $vtabung";
	}
?>
</body>
</html>