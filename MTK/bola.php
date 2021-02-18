<html>
<head>
    <title></title>
    <style type="text/css">
    .link-button{
        text-decoration: none;
        background-color: #eeeeee;
        color: black;
        padding: 2px 6px 2px 6px;
        border: 1px solid #c2c2c2;
        border-radius:2px;
    }
    </style>
</head>
<body>
    <h2>Mencari Luas dan Volume Bola</h2>
	<form action="" method="post">
		<table>
			<tr>
                <td>Jari Jari</td>
                <td>:</td>
                <td><input type="number" name="jari2" required min="1"></td>
            </tr>
            <tr>
            	<td></td>
                <td></td>
            	<td><input type="submit" name="submit" value="Hitung"></td>
            	<td><a href="bola.php" class="link-button">Reset</a></td>
            </tr>
		</table>
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