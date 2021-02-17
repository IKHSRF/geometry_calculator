<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Datar | Lingkaran</title>
</head>
<body>
    <h3>Lingkaran</h3>
    <p>Lingkaran adalah bangun datar dua dimensi dibentuk oleh himpunan semua titik yang mempunyai jarak sama dari suatu titik tetap.</p>
    <img src="../img/lingkaran.png" alt="lingkaran"><br>
    <strong>Keterangan:</strong><br>
    <i>
        P = titik pusat <br>
        r = jari-jari <br>
        d = diameter <br>
        π = konstanta pi (3.14 atau 22/7) <br>
    </i>
    <br>
    
    <h3>Luas dan Keliling Lingkaran</h3>
    <strong>Rumus:</strong><br>
    <i>luas (L) = π x r<sup>2</sup></i><br>
    <i>keliling (K) = π x 2 x r</i>
    <table>
		<tr>
			<td><label for="r"><i>jari-jari (r)</i></label></td>
			<td>:</td>
			<td><input type="number" id="r" required min="1" minlength="1" maxlength="21"></td>
		</tr>
        <tr>
            <td><label for="d"><i>diameter (d)</i></label></td>
            <td>:</td>
            <td><input type="number" id="d" disabled></td>
        </tr>
        <tr>
			<td><label for="luas"><i>luas (L)</i></label></td>
			<td>:</td>
			<td><input type="text" id="luas" disabled></td>
		</tr>
        <tr>
			<td><label for="keliling"><i>keliling (l)</i></label></td>
			<td>:</td>
			<td><input type="text" id="keliling" disabled></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button onclick="hitung()">Hitung</button></td>
		</tr>
	</table>

    <script type="text/javascript">
        var pi = 3.14
        var pi7 = 22/7
        var jarijari = document.getElementById('r')
        var diameter = document.getElementById('d')
        var luas = document.getElementById('luas')
        var keliling = document.getElementById('keliling')

        function hitung() {
            diameter.value = jarijari.value * 2
            luas.value = pi7 * Number(jarijari.value * jarijari.value)
            keliling.value = pi7 * 2 * Number(jarijari.value)
            
            if (jarijari.value != "" && jarijari.value > 0) {
                return true
            } else {
                alert("Masukkan nilai yang lebih besar dari 0")7.
                jarijari.value = ""
                diameter.value = ""
                luas.value = ""
                keliling.value = ""
            }

            if (jarijari.value % 7 == 0) {
                return true
            } else {
                luas.value = pi * Number(jarijari.value * jarijari.value)
                keliling.value = pi * 2 * Number(jarijari.value)
            }

        }
    </script>
</body>
</html>