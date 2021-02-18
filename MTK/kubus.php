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
    <h2>Mencari Luas dan Volume Kubus</h2>
	<form action="" method="post">
		<table>
			<tr>
                <td>Sisi</td>
                <td>:</td>
                <td><input type="text" min="1" required name="sisi"/><br/></td>
            </tr>
            <tr>
                <td></td>
               	<td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
                <td><a href="kubus.php" class="link-button">Reset</a></td>
           	</tr>
		</table>
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