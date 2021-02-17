<html>
<head>
    <title></title>
</head>
<body>
    <h2>Mencari Luas dan Volume Kubus</h2>
	<form action="" method="post">
		Sisi :<input type="text" name="sisi"><br>
		<input type="submit" name="submit" value="Hitung">
	</form>
	 
	<?php
	if(isset($_POST['submit'])){
		$sisi = $_POST['sisi'];
	 	$s = $sisi * $sisi;
		$lkubus = 6 * $s;
	 
		echo "Penyelesaian Mencari Luas Kubus:: <br>";
		echo "L = 6 x s <br >";
		echo "L = $lkubus <br>";

		 echo "-------------------------------------</br>"; 

		$vkubus = $sisi * $sisi *$sisi;
	 	echo "Penyelesaian Mencari Volume Kubus:<br>";
	 	echo "V = s . s .s <br>";
	 	echo "V = $sisi * $sisi* $sisi  <br />";
		echo "V = $vkubus";
	}
	?>
</body>
</html>