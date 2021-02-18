<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bangun Datar | Jajar Genjang</title>
</head>
<body>
	<h3>Jajar Genjang</h3>
	<p>Jajar genjang adalah bangun datar 2 dimensi yang tersusun oleh 2 pasang sisi yang sama panjang dan sejajar serta mempunyai 2 pasang sudut yang sama besar (pasangan sudut lancip dan pasangan sudut tumpul).</p>
	<img src="../img/jajar genjang.png" alt="jajar genjan"><br>
	<strong>Keterangan:</strong><br>
	<i>
		a = sisi alas <br>
		b = sisi miring <br>
		t = tinggi
	</i>
	<br>

	<h3>Luas Jajar Genjang</h3>
	<strong>Rumus:</strong>
	<i>luas (L) = alas (a) x tinggi (t)</i>

	<table>
		<tr>
			<td><label for="alas"><i>alas (a)</i></alas></td>
			<td>:</td>
			<td><input type="number" id="alas" required min="1" minlength="1" maxlength="21"></td>
		</tr>
		<tr>
			<td><label for="tinggi"><i>tinggi (t)</i></alas></td>
			<td>:</td>
			<td><input type="number" id="tinggi" required min="1" minlength="1" maxlength="21"></td>
		</tr>
		<tr>
			<td><label for="luas"><i>luas (L)</i></alas></td>
			<td>:</td>
			<td><input type="text" id="luas" disabled readonly></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button onclick="hitung1()">Hitung</button></td>
		</tr>
	</table>

	<br>
	<h3>Keliling Jajar Genjang</h3>
	<strong>Rumus:</strong>
	<i>keliling (k) = 2 x (sisi alas + sisi miring)</i>
	<table>
		<tr>
			<td><label for="a"><i>sisi alas (a)</i></alas></td>
			<td>:</td>
			<td><input type="number" id="a" min="1" minlength="1" maxlength="21"></td>
		</tr>
		<tr>
			<td><label for="b"><i>sisi miring (b)</i></alas></td>
			<td>:</td>
			<td><input type="number" id="b" min="1" minlength="1" maxlength="21"></td>
		</tr>
		<tr>
			<td><label for="keliling"><i>keliling (k)</i></alas></td>
			<td>:</td>
			<td><input type="text" id="keliling" disabled readonly></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button onclick="hitung2()">Hitung</button></td>
		</tr>
	</table>

	<script type="text/javascript">
		var alas = document.getElementById('alas')
		var tinggi =  document.getElementById('tinggi')
		var luas = document.getElementById('luas')

		function hitung1() {
			luas.value	 = Number(alas.value) * Number(tinggi.value)

			if (alas.value != "" && tinggi.value != "" && alas.value > 0 && tinggi.value > 0) {
				return true
			} else {
				alert("Masukkan nilai yang lebih besar dari 0")
				alas.value = ""
				tinggi.value = ""
				luas.value = ""
			}
		}
	</script>

	<script type="text/javascript">
		var a = document.getElementById('a')
		var b = document.getElementById('b')
		var keliling = document.getElementById('keliling')

		function hitung2() {
			keliling.value = 2 * (Number(a.value) + Number(b.value))

			if (a.value != "" && b.value != "" && a.value > 0 && b.value > 0) {
				return true
			} else {
				alert("Masukkan nilai yang lebih besar dari 0")
				a.value = ""
				b.value = ""
				keliling.value = ""
			}
		}
	</script>
</body>
</html>