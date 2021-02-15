<!DOCTYPE html>
<html>
<head>
	<title>Bangun Datar | Belah Ketupat</title>
</head>
<body>
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
			<td><label for="d1"><i>diagonal (d1)</i></td>
			<td>:</td>
			<td><input type="number" id="d1" required min="1" minlength="1" maxlength="21"></td>
		</tr>
		<tr>
			<td><label for="d2"><i>diagonal (d2)</i></td>
			<td>:</td>
			<td><input type="number" id="d2" required min="1" minlength="1" maxlength="21"></td>
		</tr>
		<tr>
			<td><label for="luas"><i>luas (L)</i></td>
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
			<td><button onclick="hitung2()">Hitung</button></td>
		</tr>
	</table>

	<script type="text/javascript">
		var d1 = document.getElementById('d1')
		var d2 = document.getElementById('d2')
		var luas = document.getElementById('luas')

		function hitung1() {
			luas.value = 1/2 * Number(d1.value) * Number(d2.value)

		}
	</script>

	<script type="text/javascript">
		var s = document.getElementById('s')
		var keliling = document.getElementById('keliling')

		function hitung2() {
			keliling.value = s.value * 4
		}
	</script>
</body>
</html>