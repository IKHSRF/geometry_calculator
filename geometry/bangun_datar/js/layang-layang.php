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
	<label id="hasil1"></label>
	<br>

    <h3>Keliling Layang-layang</h3>
    <strong>Rumus:</strong>
    <i>K = 2 x (a + c)</i>
    <table>
		<tr>
			<td><label for="a"><i>sisi (a)</i></label></td>
			<td>:</td>
			<td><input type="number" id="a" required min="1" minlength="1" maxlength="21"></td>
		</tr>
		<tr>
			<td><label for="c"><i>sisi (c)</i></label></td>
			<td>:</td>
			<td><input type="number" id="c" required min="1" minlength="1" maxlength="21"></td>
		</tr>
		<tr>
			<td><label for="keliling"><i>keliling (K)</i></label></td>
			<td>:</td>
			<td><input type="text" id="keliling" disabled readonly></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button onclick="hitung2()">Hitung</button></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button onclick="hapus2()">Hapus</button></td>
		</tr>
	</table>
	<label id="hasil2"></label>

    <script type="text/javascript">
        var d1 = document.getElementById('d1')
        var d2 = document.getElementById('d2')
        var luas = document.getElementById('luas')
        var hasil1 = document.getElementById('hasil1')

        function hitung1() {
            luas.value = 1/2 * (Number(d1.value * d2.value))
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
        var a = document.getElementById('a')
        var c = document.getElementById('c')
        var keliling = document.getElementById('keliling')
        var hasil2 = document.getElementById('hasil2')

        function hitung2() {
            keliling.value = 2 * (Number(a.value) + Number(c.value))
			hasil2.innerHTML =
			"<strong>Penyelesaian:</strong>" +
			"<br><u>diketahui:</u>" +
			"<br><i>sisi (a)</i>: " + a.value +
			"<br><i>sisi (c)</i>: " + c.value +

			"<br><u>keliling (K):</u>" +
			"<br><i>k = 2 x (a + c)</i>" +
			"<br><i>K</i> = 2 x (" + a.value + " + " + c.value + ")" +
			"<br><i>K</i> = 2 x (" + (Number(a.value) + Number(c.value)) + ")" +
			"<br><i>K</i> = " + keliling.value

			if (a.value != "" && c.value != "" && a.value > 0 && c.value > 0) {
				return true
			} else {
				alert("Masukkan nilai yang lebih besar dari 0")
				a.value = ""
				c.value = ""
				keliling.value = ""
				hasil2.innerHTML = ""
			}
        }

		function hapus2() {
			a.value = ""
			c.value = ""
			keliling.value = ""
			hasil2.innerHTML = ""
		}
    </script>
</body>
</html>