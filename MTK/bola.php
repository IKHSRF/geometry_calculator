<html>
<head>
    <title></title>
</head>
<body>
    <h2>Mencari Luas dan Volume Bola</h2>
	<form action="" method="post">
		Jari-jari :<input type="text" name="jari2"><br>
		<input type="submit" name="submit" value="Hitung">
	</form>
	 
	<?php
	if(isset($_POST['submit'])){
		$jari2 = $_POST['jari2'];
		$phi = 22/7;
		$lbola = 4 * $phi*($jari2 * $jari2);
		
		echo "Penyelesaian Mencari Luas:<br>";
		echo "L = 4 x 22/7 x (r x r) <br>";
		echo "L = 4 * $phi*($jari2 * $jari2) <br />";
		echo "L = $lbola <br>";

		echo "-------------------------------------</br>"; 

		$vbola = 4/3 * $phi * ($jari2 * $jari2 * $jari2);
		echo "Penyelesaian Mencari Volume:<br>";
		echo "V = 4/3 x 22/7 x (r x r x r) <br>";
		echo "V = 4/3 * $phi * ($jari2 * $jari2 * $jari2) <br/>";
		echo "V = $vbola <br>";
	}
	?>
</body>
</html>