<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangung Datar | Layang-layang</title>
</head>
<body>
<h3>Layang-layang</h3>
	<p>Layang-layang adalah bangun datar yang dibentuk oleh 2 pasang sisi sama panjang yang saling membentuk sudut yang berbeda.</p>
	<img src="../img/layang-layang.png"><br>
	<strong>Keterangan:</strong><br>
	<i>
        a, b, c, d = sisi layang-layang <br>
        d1, d2 = diagonal
	</i>
	<br>

	<h3>Luas Layang-layang</h3>
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

    <h3>Keliling Layang-layang</h3>
    <strong>Rumus:</strong>
    <i>keliling (k) = 2 x (a + c)</i>
    <table>
		<tr>
			<td><label for="a"><i>sisi (a)</i></td>
			<td>:</td>
			<td><input type="number" id="a" required min="1" minlength="1" maxlength="21"></td>
		</tr>
		<tr>
			<td><label for="c"><i>sisi (c)</i></td>
			<td>:</td>
			<td><input type="number" id="c" required min="1" minlength="1" maxlength="21"></td>
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
            luas.value = 1/2 * (Number(d1.value * d2.value))
        }
    </script>

    <script type="text/javascript">
        var a = document.getElementById('a')
        var c = document.getElementById('c')
        var keliling = document.getElementById('keliling')

        function hitung2() {
            keliling.value = 2 * (Number(a.value) + Number(c.value))
        }
    </script>
</body>
</html>