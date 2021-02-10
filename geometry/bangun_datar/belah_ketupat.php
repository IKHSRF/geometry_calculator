<!DOCTYPE html>
<html>
<head>
    <title>Bangun Datar | Layang-layang</title>
</head>
<body>
    <h1 align="center">Layang-layang</h1>
    <p>Layang-layang adalah bangun datar 2 dimensi yang dibentuk oleh 4 buah sisi yang sama panjang dan mempunyai 2 pasang sudut bukan siku-siku dengan sudut yang saling berhadapan mempunyai besar sama.</p>
    <img src="layang-layang.png" alt="layang-layang">
    <strong>Keterangan:</strong>
    <p>
        a, b, c, d = sisi layang-layang <br>
        d1, d2 = diagonal
    </p>

    <h2 align="center">Hitung Luas Layang-layang</h2>
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
            
            // menghitung luas layang-layang
            $luas = 1/2 * $diagonal_1 * $diagonal_2;

            if ($luas == 0) {
                echo "Ini bukan layang-layang";
            } else {
                echo "Hasil hitung luas layang-layang adalah sebagai berikut:<br />";
                echo "Diketahui:<br/>";
                echo "diagonal 1 = $diagonal_1<br/>";
                echo "diagonal 2 = $diagonal_2<br/>";
                echo "Maka luas layang-layang adalah L = &#189; x diagonal 1 x diagonal 2 = $diagonal_1 x $diagonal_2 = $luas";
            }
        }
    ?>

    <h2 align="center">Hitung Keliling layang-layang</h2>
    <strong>Rumus: keliling (k) = 2 x (a + c)</strong>

    <h3>Isi Data:</h3>
    <form action="./" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>sisi (a)</td>
                <td>:</td>
                <td><input type="text" name="sisi_a" required></td>
            </tr>
            <tr>
                <td>sisi (c)</td>
                <td>:</td>
                <td><input type="text" name="sisi_c" required></td>
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
            $sisi_a = $_POST['sisi_a'];
            $sisi_c = $_POST['sisi_c'];
            
            // menghitung keliling layang-layang
            $keliling = 2 * ($sisi_a + $sisi_c);

            if ($keliling == 0) {
                echo "Ini bukan layang-layang";
            } else {
                echo "Hasil hitung keliling layang-layang adalah sebagai berikut:<br />";
                echo "Diketahui:<br/>";
                echo "sisi (a) = $sisi_a<br/>";
                echo "sisi (c) = $sisi_c<br/>";
                echo "Maka keliling layang-layang adalah K = 2 x (sisi a + sisi c) = 2 x ($sisi_a + $sisi_c) = $keliling";
            }
        }
    ?>
    
</body>
</html>
