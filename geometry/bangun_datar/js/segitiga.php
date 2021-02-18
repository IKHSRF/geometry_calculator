<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bangun Datar | Segitiga</title>
</head>
<body>
	<h3>Segitiga</h3>
    <p>Segitiga adalah bangun datar yang terdiri dari 3 sisi garis lurus dengan 3 titik sudut yang berjumlah 180º.</p>
	<img src="../img/segitiga.png"><br>
	<strong>Keterangan:</strong><br>
	<i>
        a = alas <br>
        t = tinggi, tinggi segitiga membentuk sudut 90° terhadap alasnya.<br>
        b, c = adalah sisi lain segitiga
    </i>
    <br>
    <h3>Luas Segitiga</h3>	
    <strong>Rumus:</strong>
    <i>L = &#189; x a x t</i>

	<table>
		<tr>
            <td><label for="alas"><i>alas (a)</i></label></td>
			<td>:</td>
			<td><input type="number" id="alas" required min="1" minlength="1" maxlength="21"></td>
		</tr>
		<tr>
			<td><label for="tinggi"><i>tinggi (t)</i></label></td>
			<td>:</td>
            <td><input type="number" id="tinggi" required min="1" minlength="1" maxlength="21"></td>
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
	
	<h3>Keliling Segitiga</h3>
	<strong>Rumus:</strong>
	<i>K = a + b + c</i>
	<table>
		<tr>
            <td><label for="a"><i>sisi (a)</i></label></td>
			<td>:</td>
			<td><input type="number" id="a" required min="1" minlength="1" maxlength="21"></td>
		</tr>
		<tr>
			<td><label for="b"><i>sisi (b)</i></label></td>
			<td>:</td>
            <td><input type="number" id="b" required min="1" minlength="1" maxlength="21"></td>
        </tr>
        <tr>
			<td><label for="c"><i>sisi (c)</i></label></td>
			<td>:</td>
            <td><input type="number" id="c" required></td>
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
		var alas = document.getElementById('alas')
		var tinggi = document.getElementById('tinggi')
		var luas = document.getElementById('luas')
		var hasil1 = document.getElementById('hasil1')

		function hitung1() {
			luas.value = 1/2 * Number(alas.value) * Number(tinggi.value)
			hasil1.innerHTML = 
			"<strong>Penyelesaian:</strong>" +
			"<br><u>diketahui:</u>" +
			"<br><i>alas (a)</i>: " + alas.value +
			"<br><i>tinggi (t)</i>: " + tinggi.value +

			"<br><u>luas (L):</u>" +
			"<br><i>L = &#189; x a x t</i>" +
			"<br><i>L</i> = " + "&#189; x " + alas.value + " x " + tinggi.value +
			"<br><i>L</i> = " + "&#189; x " + (Number(alas.value) * Number(tinggi.value)) +
			"<br><i>L</i> = " + luas.value
			
			if (alas.value != "" && tinggi.value != "" && alas.value > 0 && tinggi.value > 0) {
				return true
			} else {
				alert("Masukkan nilai yang lebih besar dari 0")
				alas.value = ""
				tinggi.value = ""
				luas.value = ""
				hasil1.innerHTML = ""
			}
		}
		
		function hapus1() {
			alas.value = ""
			tinggi.value = ""
			luas.value = ""
			hasil1.innerHTML = ""
		}
	</script>

	<script type="text/javascript">
		var a = document.getElementById('a')
		var b = document.getElementById('b')
		var c = document.getElementById('c')
		var keliling = document.getElementById('keliling')

		function hitung2() {
			keliling.value = Number(a.value) + Number(b.value) + Number(c.value)
			hasil2.innerHTML = 
			"<strong>Penyelesaian:</strong>" +
			"<br><u>diketahui:</u>" +
			"<br><i>sisi (a)</i>: " + a.value +
			"<br><i>sisi (b)</i>: " + b.value +
			"<br><i>sisi (c)</i>: " + c.value +

			"<br><u>keliling (K):</u>" +
			"<br><i>K = a + b + c</i>" +
			"<br><i>K</i> = " + a.value +  " + " + b.value + " + " + c.value +
			"<br><i>K</i> = " + (Number(a.value) + Number(b.value)) + " + " + c.value +
			"<br><i>K</i> = " + keliling.value
			
			if (a.value != "" && b.value != "" && c.value != "" && a.value > 0 && b.value > 0 && c.value > 0) {
				return true
			} else {
				alert("Masukkan nilai yang lebih besar dari 0")
				a.value = ""
				b.value = ""
				c.value = ""
				keliling.value = ""
				hasil2.innerHTML = ""
			}
		}

		function hapus2() {
			a.value = ""
			b.value = ""
			c.value = ""
			keliling.value = ""
			hasil2.innerHTML = ""
		}
	</script>
</body>
</html>