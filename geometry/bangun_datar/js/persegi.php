<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bangun Datar | Persegi</title>
</head>
<body>
	<h3>Peresegi</h3>
	<p>Persegi adalah bangun datar 2 dimensi yang dibentuk oleh empat sisi yang sama panjang dan keempat titik sudutnya membentuk sudut siku-siku (90º).</p>
	<img src="../img/persegi.png" alt="persegi"><br>
	<strong>Keterangan: </strong><br>
	<i>s = sisi persegi</i>
	<br>
	<h3>Luas dan Keliling Persegi</h3>
	<strong>Rumus:</strong><br>
	<i>L = s x s</i><br>
	<i>K = s x 4</i>

	<table>
		<tr>
			<td><label for="s"><i>sisi (s)</i></label></td>
			<td>:</td>
			<td><input type="number" id="s" name="s" required min="1" minlength="1" maxlength="21"></td>
		</tr>
		<tr>
			<td><label for="luas"><i>luas (L)</i></label></i></td>
			<td>:</td>
			<td><input type="text" id="luas" name = "luas" disabled readonly></td>
		</tr>
		<tr>
			<td><label for="keliling"><i>keliling (K)</i></label><i></i></td>
			<td>:</td>
			<td><input type="text" id="keliling" name="keliling" disabled readonly></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button onclick="hitung()">Hitung</button></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button onclick="hapus()">Hapus</button></td>
		</tr>
	</table>
	<label id="hasil"></label>
	<br>

	<script type="text/javascript">
		var sisi = document.getElementById('s')
		var luas = document.getElementById('luas')
		var keliling = document.getElementById('keliling')
		var hasil = document.getElementById('hasil')

		function hitung() {
			luas.value = Number(sisi.value) * Number(sisi.value)
			keliling.value = Number(sisi.value) * 4
			hasil.innerHTML=
			"<strong>Penyelesaian:</strong>" +
			"<br><u>diketahui:</u>" +
			"<br><i>sisi (s)</i>: " + sisi.value +

			"<br><u>luas (L):</u>" +
			"<br><i>L = s x s</i>" +
			"<br><i>L</i> = " + sisi.value + " x " + sisi.value +
			"<br><i>L</i> = " + luas.value +

			"<br><u>keliling (K):</u>" +
			"<br><i>K = s x 4</i>" +
			"<br><i>K</i> = " + sisi.value + " x 4" +
			"<br><i>K</i> = " + keliling.value
			

			if (sisi.value != "" && sisi.value > 0) {
				return true
			} else {
				alert("Masukkan nilai yang lebih besar dari 0")
				sisi.value = ""
				luas.value = ""
				keliling.value = ""
				hasil.innerHTML = ""
			}
		}
		
		function hapus() {
			sisi.value = ""
			luas.value = ""
			keliling.value = ""
			hasil.innerHTML = ""
		}
	</script>
</body>
</html>