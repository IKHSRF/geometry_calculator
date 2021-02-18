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
	<i>L = &#189; x (a + b) t</i>

	<table>
		<tr>
			<td><label for="a"><i>sisi sejajar (a)</i></label></td>
			<td>:</td>
			<td><input type="number" id="a" required min="1" minlength="1" maxlength="21"></td>
		</tr>
		<tr>
			<td><label for="b"><i>sisi sejajar (b)</i></label></td>
			<td>:</td>
			<td><input type="number" id="b" required min="1" minlength="1" maxlength="21"></td>
		</tr>
		<tr>
			<td><label for="t"><i>tinggi (t)</i></label></td>
			<td>:</td>
			<td><input type="number" id="t" required min="1" minlength="1" maxlength="21"></td>
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

    <h3>Keliling Trapesium</h3>
    <strong>Rumus:</strong>
    <i>K = a + b + c + d</i>
    <table>
		<tr>
			<td><label for="ab"><i>sisi (a)</i></label></td>
			<td>:</td>
			<td><input type="number" id="ab" required min="1" minlength="1" maxlength="21"></td>
		</tr>
        <tr>
			<td><label for="bc"><i>sisi (b)</i></label></td>
			<td>:</td>
			<td><input type="number" id="bc" required min="1" minlength="1" maxlength="21"></td>
		</tr>
		<tr>
			<td><label for="cd"><i>sisi (c)</i></label></td>
			<td>:</td>
			<td><input type="number" id="cd" required min="1" minlength="1" maxlength="21"></td>
		</tr>
        <tr>
			<td><label for="da"><i>sisi (d)</i></label></td>
			<td>:</td>
			<td><input type="number" id="da" required min="1" minlength="1" maxlength="21"></td>
		</tr>
		<tr>
			<td><label for="da"><i>keliling (K)</i></td>
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
        var a = document.getElementById('a')
        var b = document.getElementById('b')
        var t = document.getElementById('t')
        var luas = document.getElementById('luas')
        var hasil1 = document.getElementById('hasil1')

        
        function hitung1() {
            luas.value = 1/2 * (Number(a.value) + Number(b.value)) * t.value
			hasil1.innerHTML =
			"<strong>Penyelesaian:</strong>" +
			"<br><u>diketahui:</u>" +
			"<br><i>sisi sejajar (a)</i>: " + a.value +
			"<br><i>sisi sejajar (b)</i>: " + b.value +
			"<br><i>tinggi (t)</i>: " + t.value +

			"<br><u>luas (L):</u>" +
			"<br><i>L = &#189; x (a + b) x t</i>" +
			"<br><i>L</i> = " + "&#189; x (" + a.value + " + " + b.value + ")" + " x " + t.value +
			"<br><i>L</i> = " + "&#189; x " + (Number(a.value) + Number(b.value)) + " x " + t.value +
			"<br><i>L</i> = " + "&#189; x " + ((Number(a.value) + Number(b.value)) * t.value) +
			"<br><i>L</i> = " + luas.value

			if (a.value != "" && b.value != "" && t.value && a.value > 0 && b.value > 0 && c.value) {
				return true
			} else {
				alert("Masukkan nilai yang lebih besar dari 0")
				a.value = ""
				b.value = ""
				t.value = ""
				luas.value = ""
				hasil1.innerHTML = ""
			}
        }

		function hapus1() {
			a.value = ""
			b.value = ""
			t.value = ""
			luas.value = ""
			hasil1.innerHTML = ""
		}
    </script>

    <script type="text/javascript">
        var ab = document.getElementById('ab')
        var bc = document.getElementById('bc')
        var cd = document.getElementById('cd')
        var da = document.getElementById('da')
        var keliling = document.getElementById('keliling')
        var hasil2 = document.getElementById('hasil2')

        function hitung2() {
            keliling.value = Number(ab.value) + Number(bc.value) + Number(cd.value) + Number(da.value)
			hasil2.innerHTML =
			"<strong>Penyelesaian:</strong>" +
			"<br><u>diketahui:</u>" +
			"<br><i>sisi (a)</i>: " + ab.value +
			"<br><i>sisi (b)</i>: " + bc.value +
			"<br><i>sisi (c)</i>: " + cd.value +
			"<br><i>sisi (d)</i>: " + da.value +

			"<br><u>luas (L):</u>" +
			"<br><i>K = a + b + c + d</i>" +
			"<br><i>K</i> = " +  ab.value + " + " + bc.value + " + " + cd.value + " + " + da.value +
			"<br><i>K</i> = " +  (Number(ab.value) + Number(bc.value)) + " + " + cd.value + " + " + da.value +
			"<br><i>K</i> = " +  (Number(ab.value) + Number(bc.value) + Number(cd.value)) + " + " + da.value +
			"<br><i>K</i> = " + keliling.value

			if (ab.value != "" && bc.value != "" && cd.value != "" && da.value != "" && ab.value > 0 && bc.value > 0 && cd.value > 0 && da.value > 0) {
				return true
			} else {
				alert ("Masukkan nilai yang lebih besar dari 0")
				ab.value = ""
				bc.value = ""
				cd.value = ""
				da.value = ""
				keliling.value = ""
				hasil2.innerHTML = ""
			}
        }

		function hapus2() {
			ab.value = ""
			bc.value = ""
			cd.value = ""
			da.value = ""
			keliling.value = ""
			hasil2.innerHTML = ""
		}
    </script>
</body>
</html>