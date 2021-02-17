<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bangun Datar | Belah Ketupat</title>
</head>
	<h3>Belah Ketupat</h3>
	<p>Belah Ketupat adalah bangun datar 2 dimensi yang dibentuk oleh 4 buah sisi yang sama panjang dan mempunyai 2 pasang sudut bukan siku-siku dengan sudut yang saling berhadapan mempunyai besar sama.</p>
	<img src="../img/belah ketupat.png"><br>
	<strong>Keterangan:</strong><br>
	<i>
		s = sisi belah ketupat <br>
        d1, d2 = diagonal
	</i>
	<br>

	<h3>Luas Belah Ketupat</h3>
	<strong>Rumus:</strong>
	<i>luas (L) = &#189; x diagonal (d1) x diagonal (d2)</i>

	<table>
		<tr>
			<td><label for="d1"><i>diagonal (d1)</i></label></td>
			<td>:</td>
			<td><input type="number" id="d1" required min="1" minlength="1" maxlength="21"></td>
		</tr>
		<tr>
			<td><label for="d2"><i>diagonal (d2)</i></label></td>
			<td>:</td>
			<td><input type="number" id="d2" required min="1" minlength="1" maxlength="21"></td>
		</tr>
		<tr>
			<td><label for="luas"><i>luas (L)</i></label></td>
			<td>:</td>
			<td><input type="text" id="luas" disabled readonly></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button onclick="hitung1()">Hitung</button></td>
		</tr>
	</table>
	<label id="hasil"><i></i></label>
	<br>

	<h3>Keliling Belah Ketupat</h3>
	<strong>Rumus:</strong>
	<i>keliling (k) = 4 x sisi</i>

	<table>
		<tr>
			<td><label for="s"><i>sisi (s)</i></td>
			<td>:</td>
			<td><input type="number" id="s" required min="1" minlength="1" maxlength="21"></td>
		</tr>
		<tr>
			<td><label for="keliling"><i>keliling (k)</i></td>
			<td>:</td>
			<td><input type="text" id="keliling" disabled readonly></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button id="hitung" onclick="hitung2()">Hitung</button></td>
		</tr>
	</table>

	<script type="text/javascript">
		var d1 = document.getElementById('d1')
		var d2 = document.getElementById('d2')
		var luas = document.getElementById('luas')

		function hitung1() {
			luas.value = 1/2 * Number(d1.value) * Number(d2.value)
			
			if (d1.value != "" && d2.value != "" && d1.value > 0 && d2.value > 0) {
				return true
			} else {
				alert("Masukkan nilai yang lebih dari 0")
				luas.value = ""
			}
			// hasil.innerHTML = "<strong>Penyelesaian</strong> <br> <i>luas (L) = &#189; x diagonal (d1) x diagonal (d2)</i> <br> <i>luas (L) =";
		}
	</script>

	<script type="text/javascript">
		var sisi = document.getElementById('s')
		var keliling = document.getElementById('keliling')

		function hitung2() {
			keliling.value = s.value * 4

			if (sisi.value != "" && sisi.value > 0) {
				return true
			} else {
				alert("Masukkan nilai yang lebih dari 0")
				keliling.value = ""
			}
		}
	</script>
</body>
</html>