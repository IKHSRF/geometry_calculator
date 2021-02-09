<!DOCTYPE html>
<html>
<head>
    <title>Bangun Datar | Belah Ketupat</title>
</head>
<body>
    <h1 align="center">Belah Ketupat</h1>
    <p>Belah Ketupat adalah bangun datar 2 dimensi yang dibentuk oleh 4 buah sisi yang sama panjang dan mempunyai 2 pasang sudut bukan siku-siku dengan sudut yang saling berhadapan mempunyai besar sama.</p>
    <img src="belah Ketupat.png" alt="belah Ketupat">
    <strong>Keterangan:</strong>
    <p>
        s = sisi belah ketupat
        d1, d2 = diagonal
    </p>

    <h2 align="center">Hitung Luas Belah Ketupat</h2>
    <strong>Rumus: luas (L) = &#189; x diagonal 1 x diagonal 2</strong>

    <h3>Isi Data:</h3>
    <form action="./" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>diagonal (d1)</td>
                <td>:</td>
                <td><input type="text" name="d1" required></td>
            </tr>
            <tr>
                <td>diagonal (d2)</td>
                <td>:</td>
                <td><input type="text" name="d2" required ></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit1" value="Hitung"></td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_POST['submit1'])){
            $diagonal_1 = $_POST['d1'];
            $diagonal_2 = $_POST['d2'];
            
            // menghitung luas belah ketupat
            $luas = 1/2 * $diagonal_1 * $diagonal_2;

            if ($luas == 0) {
                echo "Ini bukan belah ketupat";
            } else {
                echo "Hasil hitung luas belah ketupat adalah sebagai berikut:<br />";
                echo "Diketahui:<br />";
                echo "diagonal (d1) = $diagonal_1<br />";
                echo "diagonal (d2) = $diagonal_2<br />";
                echo "Maka luas belah ketupat adalah L = &#189; x diagonal (d1) x diagonal (d2) = $diagonal_1 x $diagonal_2 = $luas";
            }
        }
    ?>

    <h2 align="center">Hitung Keliling Belah Ketupat</h2>
    <strong>Rumus: keliling (k) = 4 x sisi</strong>

    <h3>Isi Data:</h3>
    <form action="./" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Sisi (s)</td>
                <td>:</td>
                <td><input type="text" name="sisi" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit2" value="Hitung"></td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST['submit2'])){
            $sisi = $_POST['sisi'];
            
            // menghitung keliling belah ketupat
            $keliling = 4 * $sisi;

            if ($keliling == 0) {
                echo "Ini bukan belah ketupat";
            } else {
                echo "Hasil hitung keliling belah ketupat adalah sebagai berikut:<br />";
                echo "Diketahui:<br />";
                echo "sisi (s) = $sisi<br />";
                echo "Maka keliling belah ketupat adalah K = 4 x sisi (s) = 4 x $sisi = $keliling";
            }
        }
    ?>
    
</body>
</html>