<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bangun Datar | Belah Ketupat</title>
</head>
	<h3>Belah Ketupat</h3>
	<p>Belah ketupat adalah bangun datar 2 dimensi yang dibentuk oleh 4 buah sisi yang sama panjang dan mempunyai 2 pasang sudut bukan siku-siku dengan sudut yang saling berhadapan mempunyai besar sama.</p>
	<img src="../img/belah ketupat.png"><br>
	<strong>Keterangan:</strong><br>
	<i>
		s = sisi belah ketupat <br>
        d1, d2 = diagonal
	</i>
	<br>

	<h3>Luas Belah Ketupat</h3>
	<strong>Rumus:</strong>
	<i>L = &#189; x d1 x d2</i>

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
		<tr>
			<td></td>
			<td></td>
			<td><button onclick="hapus1()">Hapus</button></td>
		</tr>
	</table>
	<label id="hasil1"><i></i></label>
	<br>

	<h3>Keliling Belah Ketupat</h3>
	<strong>Rumus:</strong>
	<i>K = s x 4</i>

	<table>
		<tr>
			<td><label for="s"><i>sisi (s)</i></td>
			<td>:</td>
			<td><input type="number" id="s" required min="1" minlength="1" maxlength="21"></td>
		</tr>
		<tr>
			<td><label for="keliling"><i>keliling (K)</i></td>
			<td>:</td>
			<td><input type="text" id="keliling" disabled readonly></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button id="hitung" onclick="hitung2()">Hitung</button></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button id="hitung" onclick="hapus2()">Hapus</button></td>
		</tr>
	</table>
	<label id="hasil2"><i></i></label>

	<script type="text/javascript">
		var d1 = document.getElementById('d1')
		var d2 = document.getElementById('d2')
		var luas = document.getElementById('luas')
		var hasil1 = document.getElementById('hasil1')

		function hitung1() {
			luas.value = 1/2 * Number(d1.value) * Number(d2.value)
			hasil1.innerHTML =
			"<strong>Penyelesaian:</strong>" +
			"<br><u>diketahui:</u>" +
			"<br><i>diagonal (d1)</i>: " + d1.value +
			"<br><i>diagonal (d2)</i>: " + d2.value +

			"<br><u>luas (L):</u>" +
			"<br><i>L = &#189; x d1 x d2</i>" +
			"<br><i>L</i> = " + "&#189; x " + d1.value + " x " + d2.value +
			"<br><i>L</i> = " + "&#189; x " + (Number(d1.value) * Number(d2.value)) +
			"<br><i>L</i> = " + luas.value
			
			if (d1.value != "" && d2.value != "" && d1.value > 0 && d2.value > 0) {
				return true
			} else {
				alert("Masukkan nilai yang lebih besar dari 0")
				d1.value = ""
				d2.value = ""
				luas.value = ""
				hasil1.innerHTML = ""
			}
		}

		function hapus1() {
			d1.value = ""
			d2.value = ""
			luas.value = ""
			hasil1.innerHTML = ""
		}
	</script>

	<script type="text/javascript">
		var sisi = document.getElementById('s')
		var keliling = document.getElementById('keliling')
		var hasil2 = document.getElementById('hasil2')

		function hitung2() {
			keliling.value = s.value * 4
			hasil2.innerHTML =
			"<strong>Penyelesaian:</strong>" +
			"<br><u>diketahui:</u>" +
			"<br><i>sisi (s)</i>: " + sisi.value +

			"<br><u>keliling (K):</u>" +
			"<br><i>K = s x 4</i>" +
			"<br><i>L</i> = " + sisi.value + " x " + 4 +
			"<br><i>L</i> = " + keliling.value

			if (sisi.value != "" && sisi.value > 0) {
				return true
			} else {
				alert("Masukkan nilai yang lebih besar dari 0")
				sisi.value = ""
				keliling.value = ""
				hasil2.innerHTML = ""
			}
		}

		function hapus2() {
			sisi.value = ""
			keliling.value = ""
			hasil2.innerHTML = ""
		}
	</script>
</body>
</html>