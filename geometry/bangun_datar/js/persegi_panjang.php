<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bangun Datar | Persegi Panjang</title>
</head>
<body>
	<h3>Persegi Panjang</h3>
   	<p>Persegi panjang adalah bangun datar 2 dimensi yang mempunyai 2 pasang sisi sejajar yang sama Panjang dan mempunyai 4 titik sudut siku-siku.</p>
  	<img src="../img/persegi panjang.png" alt="persegi panjang"><br>
   	<strong>Keterangan:</strong><br>
   	<i>
       	p = panjang <br>
        l = lebar
    </i>
	<br>
    <h3>Luas dan Keliling Persegi Panjang</h3>
    <strong>Rumus:</strong><br>
   	<i>luas (L) = panjang (p) x lebar (l)</i><br>
   	<i>keliling (k) = 2 x (panjang + lebar)</i>

	<table>
		<tr>
            <td><label for="p"><i>panjang (p)</i></label></td>
		    <td>:</td>
			<td><input type="number" id="p" required min="1" minlength="1" maxlength="21"></td>
        </tr>
        <tr>
   	        <td><label for="l"><i>lebar (l)</i></label></td>
            <td>:</td>
            <td><input type="number" id="l" required min="1" minlength="1" maxlength="21"></td>
        </tr>
        <tr>
			<td><label for="luas"><i>luas (L)</i></label></td>
			<td>:</td>
			<td><input type="text" id="luas" disabled readonly></td>
		</tr>
        <tr>
			<td><label for="keliling"><i>keliling (k)</i></label></td>
			<td>:</td>
			<td><input type="text" id="keliling" disabled readonly></td>
		</tr>
        <tr>
            <td></td>
            <td></td>
            <td><button onclick="hitung()">Hitung</button></td>
        </tr>
	</table>

	<script type="text/javascript">
		var	panjang = document.getElementById('p')
		var lebar = document.getElementById('l')
		var	luas = document.getElementById('luas')
		var	keliling =  document.getElementById('keliling')

		function hitung() {
			luas.value = Number(panjang.value) * Number(lebar.value)
			keliling.value = 2 * (Number(panjang.value) + Number(lebar.value))

			if (panjang.value != "" && lebar.value != "" && panjang.value > 0 && lebar.value > 0) {
				return true
			} else {
				alert("Masukkan nilai yang lebih dari 0")
				luas.value = ""
				keliling.value = ""

			}
		}
	</script>
</body>
</html>