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
    <i>L = π x r<sup>2</sup></i><br>
    <i>K = π x 2 x r</i>
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
			<td><label for="keliling"><i>keliling (K)</i></label></td>
			<td>:</td>
			<td><input type="text" id="keliling" disabled></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button onclick="hitung()">Hitung</button></td>
		</tr>
        <tr>
			<td></td>
			<td></td>
			<td><button onclick="hapus()">Hapus</button></td>
		</tr>
	</table>
    <label id="hasil"></label>

    <script type="text/javascript">
        var pi = 3.14
        var pi7 = 22/7
        var jarijari = document.getElementById('r')
        var diameter = document.getElementById('d')
        var luas = document.getElementById('luas')
        var keliling = document.getElementById('keliling')
        var hasil = document.getElementById('hasil')

        function hitung() {
            diameter.value = jarijari.value * 2
            luas.value = pi7 * Number(jarijari.value * jarijari.value)
            keliling.value = pi7 * 2 * Number(jarijari.value)
            hasil.innerHTML =
            "<strong>Penyelesaian:</strong>" +
			"<br><u>diketahui:</u>" +
			"<br><i>jari-jari (r)</i>: " + jarijari.value +
			"<br><i>diameter (d)</i>: " + diameter.value +
            
			"<br><u>luas (L):</u>" +
			"<br><i>L = π x r<sup>2</sup></i>" +
			"<br><i>L = π x r x r</i>" +
			"<br><i>L</i> = " + pi7 + " x " + jarijari.value + " x " + jarijari.value +
			"<br><i>L</i> = " + pi7 + " x " + (Number(jarijari.value * jarijari.value)) +
            "<br><i>L</i> = " + luas.value +

			"<br><u>keliling (K):</u>" +
			"<br><i>L = π x 2 x r</i>" +
			"<br><i>L</i> = " + pi7 + " x " + 2 + " x " + jarijari.value +
			"<br><i>L</i> = " + pi7 + " x " + (Number(2 * jarijari.value)) +
            "<br><i>L</i> = " + keliling.value
            
            if (jarijari.value != "" && jarijari.value > 0 && jarijari.value % 7 == 0) {
                return true
            } else if (jarijari.value != "" && jarijari.value > 0 && jarijari.value % 7 != 0) {
                luas.value = pi * Number(jarijari.value * jarijari.value)
                keliling.value = pi * 2 * Number(jarijari.value)
                hasil.innerHTML =
                "<strong>Penyelesaian:</strong>" +
                "<br><u>diketahui:</u>" +
                "<br><i>jari-jari (r)</i>: " + jarijari.value +
                "<br><i>diameter (d)</i>: " + diameter.value +
                
                "<br><u>luas (L):</u>" +
                "<br><i>L = π x r<sup>2</sup></i>" +
                "<br><i>L = π x r x r</i>" +
                "<br><i>L</i> = " + pi + " x " + jarijari.value + " x " + jarijari.value +
                "<br><i>L</i> = " + pi + " x " + (Number(jarijari.value * jarijari.value)) +
                "<br><i>L</i> = " + luas.value +

                "<br><u>keliling (K):</u>" +
                "<br><i>L = π x 2 x r</i>" +
                "<br><i>L</i> = " + pi + " x " + 2 + " x " + jarijari.value +
                "<br><i>L</i> = " + pi + " x " + (Number(2 * jarijari.value)) +
                "<br><i>L</i> = " + keliling.value
            } else {
                alert("Masukkan nilai yang lebih besar dari 0")
                jarijari.value = ""
                diameter.value = ""
                luas.value = ""
                keliling.value = ""
                hasil.innerHTML = ""
            }
        }

        function hapus() {
            jarijari.value = ""
            diameter.value = ""
            luas.value = ""
            keliling.value = ""
            hasil.innerHTML = ""
        }
    </script>
</body>
</html>