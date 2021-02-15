<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangung Datar | Trapesium</title>
</head>
<body>
    <h3>Trapesium</h3>
	<p>Trapesium adalah bangun datar dua dimensi yang tersusun oleh 4 buah sisi yaitu 2 buah sisi sejajar yang tidak sama panjang dan 2 buah sisi lainnya.</p>
	<img src="../img/trapesium.png"><br>
	<strong>Keterangan:</strong><br>
	<i>
        t = tinggi trapesium <br>
        a, b = adalah sisi yang sejajar, sisi a merupakan panjang AB dan sisi b merupakan panjang DC
	</i>
	<br>

	<h3>Luas Trapesium</h3>
	<strong>Rumus:</strong>
	<i>luas (L) = &#189; x (a + b) x t</i>

	<table>
		<tr>
			<td><label for="a"><i>sisi sejajar (a)</i></td>
			<td>:</td>
			<td><input type="number" id="a" required min="1" minlength="1" maxlength="21"></td>
		</tr>
		<tr>
			<td><label for="b"><i>sisi sejajar (b)</i></td>
			<td>:</td>
			<td><input type="number" id="b" required min="1" minlength="1" maxlength="21"></td>
		</tr>
		<tr>
			<td><label for="t"><i>tinggi (t)</i></td>
			<td>:</td>
			<td><input type="number" id="t" required min="1" minlength="1" maxlength="21"></td>
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

    <h3>Keliling Trapesium</h3>
    <strong>Rumus:</strong>
    <i>keliling (K) = AB + BC + CD + DA</i>
    <table>
		<tr>
			<td><label for="ab"><i>sisi (AB)</i></td>
			<td>:</td>
			<td><input type="number" id="ab" required min="1" minlength="1" maxlength="21"></td>
		</tr>
        <tr>
			<td><label for="bc"><i>sisi (BC)</i></td>
			<td>:</td>
			<td><input type="number" id="bc" required min="1" minlength="1" maxlength="21"></td>
		</tr>
		<tr>
			<td><label for="cd"><i>sisi (CD)</i></td>
			<td>:</td>
			<td><input type="number" id="cd" required min="1" minlength="1" maxlength="21"></td>
		</tr>
        <tr>
			<td><label for="da"><i>sisi (CA)</i></td>
			<td>:</td>
			<td><input type="number" id="da" required min="1" minlength="1" maxlength="21"></td>
		</tr>
		<tr>
			<td><label for="da"><i>keliling (k)</i></td>
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
        var a = document.getElementById('a')
        var b = document.getElementById('b')
        var t = document.getElementById('t')
        var luas = document.getElementById('luas')
        
        function hitung1() {
            luas.value = 1/2 * (Number(a.value) + Number(b.value)) * t.value
        }
    </script>

    <script type="text/javascript">
        var ab = document.getElementById('ab')
        var bc = document.getElementById('bc')
        var cd = document.getElementById('cd')
        var da = document.getElementById('da')
        var keliling = document.getElementById('keliling')

        function hitung2() {
            keliling.value = Number(ab.value) + Number(bc.value) + Number(cd.value) + Number(da.value)
        }
    </script>
</body>
</html>